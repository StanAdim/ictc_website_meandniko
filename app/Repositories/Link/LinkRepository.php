<?php
namespace App\Repositories\Link;
use App\Models\Link;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class LinkRepository extends BaseRepository
{

    const MODEL = Link::class;

    public function __construct()
    {
    }

    public function store($request)
    {
        return DB::transaction(function () use ($request) {
       $this->query()->create([
                'title' => $request->title,
                'link' => $request->link,
                ]);
        });
    }

    public function update($request, $id)
    {
        return DB::transaction(function () use ($request, $id) {
            $social = $this->find($id);
            return $social->update([
                'title' => $request->title,
                'link' => $request->link,
            ]);
        });
    }

    public function destroy($id)
    {
        $social = Link::find($id);
        if ($social) {
            $social->delete();
            return true;
        }
        return false;
    }
}
