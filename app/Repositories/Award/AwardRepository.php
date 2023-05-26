<?php
namespace App\Repositories\Award;
use App\Models\Award;
use App\Repositories\BaseRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AwardRepository extends BaseRepository
{

    const MODEL = Award::class;
    protected $destinationPath;
    protected $destinationAttachmentPath;

    public function __construct()
    {
        $this->destinationPath = 'uploads/awards';
        $this->destinationAttachmentPath = 'uploads/award-attachments';
    }

    public function store($request)
    {
        return DB::transaction(function () use ($request) {

            $file_sw = $request->file('photo_sw');
            $file_en = $request->file('photo_en');

            //Move Uploaded photo File
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
            
            //Attachment Move Uploaded File
            $attachment_sw = $request->file('attachment_sw');
            $attachment_en = $request->file('attachment_en');

            if ($attachment_sw) {
                $attachment_filename_sw = Str::random(30) . '.' . $attachment_sw->getClientOriginalExtension();
                $attachment_sw->move($this->destinationAttachmentPath, $attachment_filename_sw);
            } else {
                $attachment_filename_sw = null;
            }

            //Move Uploaded File
            if ($attachment_en) {
                $attachment_filename_en = Str::random(30) . '.' . $attachment_en->getClientOriginalExtension();
                $attachment_en->move($this->destinationAttachmentPath, $attachment_filename_en);
            } else {
                $attachment_filename_en = null;
            }


            $this->query()->create([
                'title_sw' => $request->title_sw,
                'title_en' => $request->title_en,
                'description_sw' => $request->description_sw,
                'description_en' => $request->description_en,
                'application_deadline' => $request->application_deadline ? Carbon::parse($request->application_deadline) : null,
                'award_date' => $request->award_date ? Carbon::parse($request->award_date) : null,
                'slug' => Str::slug($request->title_en),
                'status' => 'NEW',
                'file_sw' => $filename_sw,
                'file_en' => $filename_en,

                'contact_name' => $request->contact_name ?? null,
                'contact_email' => $request->contact_email ?? null,
                'contact_phone' => $request->contact_phone ?? null,
                'award_venue' => $request->award_venue ?? null,
                'short_description_sw' => $request->short_description_sw ?? null,
                'short_description_en' => $request->short_description_en ?? null,

                'published' => $request->published == 'on' ? 1 : 0,
                'attachment_sw' => $attachment_filename_sw,
                'attachment_en' => $attachment_filename_en,

                ]);
        });
    }

    public function update($request, $id)
    {
        return DB::transaction(function () use ($request, $id) {
            $award = $this->find($id);

            $file_sw = $request->file('photo_sw');
            $file_en = $request->file('photo_en');
            //Move Uploaded photo File
            if ($file_sw) {
                $filename_sw = Str::random(30).'.'.$file_sw->getClientOriginalExtension();
                $file_sw->move($this->destinationPath, $filename_sw);
                if ($award->file_sw != 'noimg.png') {
                    File::delete($this->destinationPath.'/'.$award->file_sw);
                }
            } else {
                $filename_sw = $award->file_sw;
            }

            if ($file_en) {
                $filename_en = Str::random(30) . '.' . $file_en->getClientOriginalExtension();
                $file_en->move($this->destinationPath, $filename_en);
                if ($award->file_en != 'noimg.png') {
                    File::delete($this->destinationPath.'/'.$award->file_en);
                }
            } else {
                $filename_en = $award->file_en;
            }


            //Attachment Move Uploaded File
            $attachment_sw = $request->file('attachment_sw');
            $attachment_en = $request->file('attachment_en');

            if ($attachment_sw) {
                $attachment_filename_sw = Str::random(30) . '.' . $attachment_sw->getClientOriginalExtension();
                $attachment_sw->move($this->destinationAttachmentPath, $attachment_filename_sw);
                if ($award->attachment_sw) {
                    File::delete($this->destinationPath.'/'.$award->file_en);
                }
            } else {
                $attachment_filename_sw = $award->attachment_sw;
            }

            //Move Uploaded File
            if ($attachment_en) {
                $attachment_filename_en = Str::random(30) . '.' . $attachment_en->getClientOriginalExtension();
                $attachment_en->move($this->destinationAttachmentPath, $attachment_filename_en);
                if ($award->attachment_en) {
                    File::delete($this->destinationPath.'/'.$award->attachment_en);
                }
            } else {
                $attachment_filename_en = $award->attachment_en;
            }



            return $award->update([
                'title_sw' => $request->title_sw,
                'title_en' => $request->title_en,
                'description_sw' => $request->description_sw,
                'description_en' => $request->description_en,

                'application_deadline' => $request->application_deadline ? Carbon::parse($request->application_deadline) : null,
                'award_date' => $request->award_date ? Carbon::parse($request->award_date) : null,

                'slug' => Str::slug($request->title_en),
                'file_sw' => $filename_sw,
                'file_en' => $filename_en,

                'contact_name' => $request->contact_name ?? null,
                'contact_email' => $request->contact_email ?? null,
                'contact_phone' => $request->contact_phone ?? null,
                'award_venue' => $request->award_venue ?? null,
                'short_description_sw' => $request->short_description_sw ?? null,
                'short_description_en' => $request->short_description_en ?? null,

                'published' => $request->published == 'on' ? 1 : 0,
                'attachment_sw' => $attachment_filename_sw,
                'attachment_en' => $attachment_filename_en,
            ]);
        });
    }

    public function destroy($id)
    {
        $award = Award::find($id);
        if ($award) {
            if ($award->file_sw) {
                File::delete($this->destinationPath . '/' . $award->file_sw);
            }
            if ($award->file_en) {
                File::delete($this->destinationPath . '/' . $award->file_en);
            }
            $award->delete();
            return true;
        }
        return false;
    }
}
