<?php
namespace App\Repositories\Social;
use App\Models\Social;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class SocialRepository extends BaseRepository
{

    const MODEL = Social::class;

    public function __construct()
    {
    }

    public function store($request)
    {
        return DB::transaction(function () use ($request) {
       $this->query()->create([
                'type' => $request->type,
                'link' => $request->link,
                ]);
        });
    }

    public function update($request, $id)
    {
        return DB::transaction(function () use ($request, $id) {
            $social = $this->find($id);
            return $social->update([
                'type' => $request->type,
                'link' => $request->link,
            ]);
        });
    }

    public function destroy($id)
    {
        $social = Social::find($id);
        if ($social) {
            $social->delete();
            return true;
        }
        return false;
    }
}
