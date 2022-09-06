<?php
namespace App\Repositories\Banner;
use App\Models\Banner;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BannerRepository extends BaseRepository
{
    const MODEL = Banner::class;
    protected $destinationPath;

    public function __construct()
    {
        $this->destinationPath = 'uploads/banners';
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
                $filename_en = 'noimg.png';
            }
            $this->query()->create([
                'title_sw' => $request->title_sw,
                'title_en' => $request->title_en,
                'details_sw' => $request->details_sw,
                'details_en' => $request->details_en,
                'link_url' => $request->link_url,
                'visits' => 0,
                'status' => 1,
                'file_sw' => $filename_sw,
                'file_en' => $filename_en
            ]);
        });
    }

    public function update($request, $id)
    {
        return DB::transaction(function () use ($request, $id) {
            $banner = $this->find($id);


            $file_sw = $request->file('photo_sw');
            $file_en = $request->file('photo_en');
            //Move Uploaded File
            if ($file_sw) {
                $filename_sw = Str::random(30).'.'.$file_sw->getClientOriginalExtension();
                $file_sw->move($this->destinationPath, $filename_sw);
                if ($banner->file_sw != 'noimg.png') {
                    if (File::exists($this->destinationPath.'/'.$banner->file_sw)){
                        File::delete($this->destinationPath.'/'.$banner->file_sw);
                    }
                }
            } else {
                $filename_sw = $banner->file_sw;
            }

            if ($file_en) {
                $filename_en = Str::random(30) . '.' . $file_en->getClientOriginalExtension();
                $file_en->move($this->destinationPath, $filename_en);
                if ($banner->file_en != 'noimg.png') {
                    if (File::exists($this->destinationPath.'/'.$banner->file_en)){
                        File::delete($this->destinationPath.'/'.$banner->file_en);
                    }
                }
            } else {
                $filename_en = $banner->file_en;
            }

            return $banner->update([
                'title_sw' => $request->title_sw,
                'title_en' => $request->title_en,
                'details_sw' => $request->details_sw,
                'details_en' => $request->details_en,
                'link_url' => $request->link_url,
                'file_sw' => $filename_sw,
                'file_en' => $filename_en
            ]);
        });
    }

    public function destroy($id)
    {
        $banner = Banner::find($id);
        if ($banner) {
            if ($banner->file_sw != 'noimg.png') {
                File::delete($this->destinationPath . '/' . $banner->file_sw);
            }
            if ($banner->file_en != 'noimg.png') {
                File::delete($this->destinationPath . '/' . $banner->file_en);
            }
            $banner->delete();
            return true;
        }
        return false;
    }
}
