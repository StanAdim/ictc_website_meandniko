<?php
namespace App\Repositories\Award;
use App\Models\AwardCategory;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class AwardCategoryRepository extends BaseRepository
{

    const MODEL =AwardCategory::class;
    

    public function store($request)
    {
        return DB::transaction(function () use ($request) {
            $this->query()->create([
                'award_id' => $request->award_id,
                'title' => $request->title,
                ]);
        });
    }

    public function update($request, $id)
    {
        return DB::transaction(function () use ($request, $id) {
            $award_category = $this->find($id);

          
            return $award_category->update([
                'title' => $request->title,
            ]);
        });
    }

    public function destroy($id)
    {
        $award_category =AwardCategory::find($id);
        if ($award_category) {
            $award_category->delete();
            return true;
        }
        return false;
    }
}
