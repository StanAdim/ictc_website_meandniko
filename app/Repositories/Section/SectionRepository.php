<?php
namespace App\Repositories\Section;
use App\Models\Section;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SectionRepository extends BaseRepository
{

    const MODEL = Section::class;
    protected $destinationPath;

    public function __construct()
    {
        $this->destinationPath = 'uploads/sections';
    }

    public function store($request)
    {
        return DB::transaction(function () use ($request) {

            $file_sw = $request->file('photo_sw');
            $file_en = $request->file('photo_en');

            //Move Uploaded File
            if ($file_sw) {
                $filename_sw = Str::random(30) . '.' . $file_sw->getClientOriginalExtension();
                $file_sw->move($this->destinationPath, $filename_sw);
            }

            if ($file_en) {
                $filename_en = Str::random(30).'.'.$file_en->getClientOriginalExtension();
                $file_en->move($this->destinationPath, $filename_en);
            }
            $this->query()->create([
                'title_sw' => $request->title_sw,
                'title_en' => $request->title_en,
                'description_sw' => $request->description_sw,
                'description_en' => $request->description_en,
                'slug' => $request->slug,
                'link_url' => $request->link_url ?? null,
                'link_title' => $request->link_title ?? null,
                'status' => 1,
                'file_sw' => $filename_sw ?? null,
                'file_en' => $filename_en ?? null
            ]);
        });
    }

    public function update($request, $id)
    {
        return DB::transaction(function () use ($request, $id) {
            $section = $this->find($id);

            $file_sw = $request->file('photo_sw');
            $file_en = $request->file('photo_en');
            //Move Uploaded File
            if ($file_sw) {
                $filename_sw = Str::random(30).'.'.$file_sw->getClientOriginalExtension();
                $file_sw->move($this->destinationPath, $filename_sw);
                if ($section->file_sw) {
                    File::delete($this->destinationPath.'/'.$section->file_sw);
                }
            } else {
                $filename_sw = $section->file_sw;
            }

            if ($file_en) {
                $filename_en = Str::random(30) . '.' . $file_en->getClientOriginalExtension();
                $file_en->move($this->destinationPath, $filename_en);
                if ($section->file_en) {
                    File::delete($this->destinationPath.'/'.$section->file_en);
                }
            } else {
                $filename_en = $section->file_en;
            }

            return $section->update([
                'title_sw' => $request->title_sw,
                'title_en' => $request->title_en,
                'description_sw' => $request->description_sw,
                'description_en' => $request->description_en,
                'slug' => $request->slug,
                'link_url' => $request->link_url ?? null,
                'link_title' => $request->link_title ?? null,
                'file_sw' => $filename_sw,
                'file_en' => $filename_en
            ]);
        });
    }

    public function destroy($id)
    {
        $section = Section::find($id);
        if ($section) {
            if ($section->file_sw) {
                File::delete($this->destinationPath . '/' . $section->file_sw);
            }
            if ($section->file_en) {
                File::delete($this->destinationPath . '/' . $section->file_en);
            }
            $section->delete();
            return true;
        }
        return false;
    }
}
