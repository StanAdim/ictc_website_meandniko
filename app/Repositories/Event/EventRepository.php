<?php
namespace App\Repositories\Event;
use App\Models\Event;
use App\Repositories\BaseRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class EventRepository extends BaseRepository
{

    const MODEL = Event::class;
    protected $destinationPath;

    public function __construct()
    {
        $this->destinationPath = 'uploads/events';
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
                'start_date' => Carbon::parse($request->start_date),
                'end_date' => Carbon::parse($request->end_date),
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
            $event = $this->find($id);

            $file_sw = $request->file('photo_sw');
            $file_en = $request->file('photo_en');
            //Move Uploaded File
            if ($file_sw) {
                $filename_sw = Str::random(30).'.'.$file_sw->getClientOriginalExtension();
                $file_sw->move($this->destinationPath, $filename_sw);
                if ($event->file_sw != 'noimg.png') {
                    File::delete($this->destinationPath.'/'.$event->file_sw);
                }
            } else {
                $filename_sw = $event->file_sw;
            }

            if ($file_en) {
                $filename_en = Str::random(30) . '.' . $file_en->getClientOriginalExtension();
                $file_en->move($this->destinationPath, $filename_en);
                if ($event->file_en != 'noimg.png') {
                    File::delete($this->destinationPath.'/'.$event->file_en);
                }
            } else {
                $filename_en = $event->file_en;
            }

            return $event->update([
                'title_sw' => $request->title_sw,
                'title_en' => $request->title_en,
                'description_sw' => $request->description_sw,
                'description_en' => $request->description_en,

                'start_date' => Carbon::parse($request->start_date),
                'end_date' => Carbon::parse($request->end_date),

                'slug' => Str::slug($request->title_en),
                'file_sw' => $filename_sw,
                'file_en' => $filename_en
            ]);
        });
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        if ($event) {
            if ($event->file_sw) {
                File::delete($this->destinationPath . '/' . $event->file_sw);
            }
            if ($event->file_en) {
                File::delete($this->destinationPath . '/' . $event->file_en);
            }
            $event->delete();
            return true;
        }
        return false;
    }
}
