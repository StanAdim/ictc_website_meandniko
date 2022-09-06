<?php
namespace App\Repositories\Page;
use App\Models\Page;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PageRepository extends BaseRepository
{

    const MODEL = Page::class;
    protected $destinationPath;

    public function __construct()
    {
        $this->destinationPath = 'uploads/pages';
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
            } else {
                $filename_sw = 'noimg.png';
            }

            if ($file_en) {
                $filename_en = Str::random(30).'.'.$file_en->getClientOriginalExtension();
                $file_en->move($this->destinationPath, $filename_en);
            } else {
                $filename_sw = 'noimg.png';
            }
            $this->query()->create([
                'title_sw' => $request->title_sw,
                'title_en' => $request->title_en,
                'description_sw' => $request->description_sw,
                'description_en' => $request->description_en,
                'slug' => Str::slug($request->title_en),
                'status' => 1,
                'file_sw' => $filename_sw,
                'file_en' => $filename_en
            ]);
        });
    }

    public function update($request, $id)
    {
        return DB::transaction(function () use ($request, $id) {
            $page = $this->find($id);

            $file_sw = $request->file('photo_sw');
            $file_en = $request->file('photo_en');
            //Move Uploaded File
            if ($file_sw) {
                $filename_sw = Str::random(30).'.'.$file_sw->getClientOriginalExtension();
                $file_sw->move($this->destinationPath, $filename_sw);
                if ($page->file_sw != 'noimg.png') {
                    File::delete($this->destinationPath.'/'.$page->file_sw);
                }
            } else {
                $filename_sw = $page->file_sw;
            }

            if ($file_en) {
                $filename_en = Str::random(30) . '.' . $file_en->getClientOriginalExtension();
                $file_en->move($this->destinationPath, $filename_en);
                if ($page->file_en != 'noimg.png') {
                    File::delete($this->destinationPath.'/'.$page->file_en);
                }
            } else {
                $filename_en = $page->file_en;
            }

            return $page->update([
                'title_sw' => $request->title_sw,
                'title_en' => $request->title_en,
                'description_sw' => $request->description_sw,
                'description_en' => $request->description_en,
                'slug' => Str::slug($request->title_en),
                'file_sw' => $filename_sw,
                'file_en' => $filename_en
            ]);
        });
    }

    public function destroy($id)
    {
        $page = Page::find($id);
        if ($page) {
            if ($page->file_sw) {
                File::delete($this->destinationPath . '/' . $page->file_sw);
            }
            if ($page->file_en) {
                File::delete($this->destinationPath . '/' . $page->file_en);
            }
            $page->delete();
            return true;
        }
        return false;
    }
}
