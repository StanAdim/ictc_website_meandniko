<?php

namespace App\Repositories;

use App\Exceptions\GeneralException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

/**
 * Class BaseRepository.
 */
class BaseRepository
{
    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->query()->get();
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->query()->count();
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function find($id)
    {
        return $this->query()->find($id);
    }

    /**
     * @return mixed
     */
    public function query()
    {
        return call_user_func(static::MODEL.'::query');
    }

    public function all()
    {
        return call_user_func(static::MODEL.'::all');
    }

    /**
     * Return Only Importer ID
     * @param $uuid
     * @return mixed
     */
    public function getByUuid($uuid)
    {
        return $this->query()->where('uuid', $uuid)->first()->id;
    }

    public function getOneByUuid($uuid)
    {
        return $this->query()->where('uuid', $uuid)->first();
    }

    /*
     *get get by key and value
     *
     */
    public function getByKeyValue($key, $value)
    {
        return $this->query()->where($key, $value);
    }
    /*
     *get get one by key and value
     *
     */
    public function getOneByKeyValue($key, $value)
    {
        return $this->query()->where($key, $value)->first();
    }

    // use this for case insensitive scenario. seems to work only with postgres.
    public function getOneByKeyValueLike($key, $value)
    {
        return $this->query()->where($key,  'ilike', '%' . $value . '%')->first();
    }

    /**
     * Get all importers by using uuid
     * @param $uuid
     * @return mixed
     */
    public function getImporterDetailsByUuid($uuid)
    {
        return $this->query()->where('uuid', $uuid);
    }

    /**
     * Check if user is the owner (the one created) - when opening profiles/dashboard
     */
    public function checkIfUserIsOwner(Model $model)
    {
        $user = access()->user();
        if ($user->id != $model->user_id)
        {
            throw new GeneralException(__('exceptions.general.owner_restriction'));
        }
    }

    /**
     * Check if company (user belong to company) is the owner (the one created) - when opening profiles/dashboard
     */
    public function checkIfCompanyIsOwner(Model $model)
    {
        $user = access()->user();
        $company = $user->getCompanyAdministeredByUser();
        if ($company->id != $model->company_id){
            throw new GeneralException(__('exceptions.general.owner_restriction'));
        }
    }

    /**
     * Check if company (user belong to company) or user  is the owner (the one created) - when opening profiles/dashboard
     */
    public function checkIfCompanyOrUserIsOwner(Model $model)
    {
        $user = access()->user();
        /*Check if Model is owned by company*/
        if (isset($model->company_id)){
            $this->checkIfCompanyIsOwner($model);
        }else{
            /*Check if model is owned by user */
            $this->checkIfUserIsOwner($model);
        }
    }

    /**
     * Check if admin is Owner
     */
    public function checkIfAdminIsOwner()
    {
        $user = access()->user();
        if ($user->user_account_type != 1){
            throw new GeneralException(__('exceptions.general.admin_restriction'));
        }
    }

    public function forSelect()
    {
        return $this->getAll()->pluck('name', 'id');
    }

    public function getLoggedInCompany()
    {
        return access()->user()->company()->first();
    }



    /**
     * @param array $input
     * @return mixed
     * Regex column search
     */
    public function regexColumnSearch(array $input)
    {
        $return = $this->query();
        if (count($input)) {
            $sql = $this->regexFormatColumn($input)['sql'];
            $keyword = $this->regexFormatColumn($input)['keyword'];
            $return = $this->query()->whereRaw($sql, $keyword);
        }
        return $return;
    }

    /**
     * @param array $input
     * @return array
     * Regex format according to drive used
     */
    public function regexFormatColumn(array $input)
    {
        $keyword = [];
        $sql = "";
        if (count($input)) {
            switch (DB::getDriverName()) {
                case 'pgsql':
                    foreach ($input as $key => $value) {
                        $sql .= " cast({$key} as text) ~* ? or";
                        $keyword[] = $value;
                    }
                    break;
                default:
                    foreach ($input as $key => $value) {
                        $value = strtolower($value);
                        $sql .= " LOWER({$key}) REGEXP  ? or";
                        $keyword[] = $value;
                    }
            }
            $sql = substr($sql, 0, -2);
            $sql = "( {$sql} )";
        }
        return ['sql' => $sql, 'keyword' => $keyword];
    }

}
