<?php
namespace App\Repositories\Investment;
use App\Models\Investment;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class InvestmentRepository extends BaseRepository
{

    const MODEL = Investment::class;
    protected $destinationPath;

    public function __construct()
    {
        $this->destinationPath = 'uploads/investments';
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
            $investment = $this->find($id);

            $file_sw = $request->file('photo_sw');
            $file_en = $request->file('photo_en');
            //Move Uploaded File
            if ($file_sw) {
                $filename_sw = Str::random(30).'.'.$file_sw->getClientOriginalExtension();
                $file_sw->move($this->destinationPath, $filename_sw);
                if ($investment->file_sw != 'noimg.png') {
                    File::delete($this->destinationPath.'/'.$investment->file_sw);
                }
            } else {
                $filename_sw = $investment->file_sw;
            }

            if ($file_en) {
                $filename_en = Str::random(30) . '.' . $file_en->getClientOriginalExtension();
                $file_en->move($this->destinationPath, $filename_en);
                if ($investment->file_en != 'noimg.png') {
                    File::delete($this->destinationPath.'/'.$investment->file_en);
                }
            } else {
                $filename_en = $investment->file_en;
            }

            return $investment->update([
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
        $investment = Investment::find($id);
        if ($investment) {
            if ($investment->file_sw) {
                File::delete($this->destinationPath . '/' . $investment->file_sw);
            }
            if ($investment->file_en) {
                File::delete($this->destinationPath . '/' . $investment->file_en);
            }
            $investment->delete();
            return true;
        }
        return false;
    }
}
