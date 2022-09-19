<?php
namespace App\Repositories\Award;
use App\Models\Award;
use App\Models\AwardApplication;
use App\Repositories\BaseRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AwardApplicationRepository extends BaseRepository
{

    const MODEL = AwardApplication::class;
    protected $destinationPath;
    protected $destinationAttachmentPath;

    public function __construct()
    {
        $this->destinationPath = 'uploads/award-application';
    }

    public function store($request)
    {
        return DB::transaction(function () use ($request) {

            $award = Award::where('uid', $request->award_uid)->first();
            if ($award) {
                //Move Uploaded company registration document File
                $company_registration_document_file = $request->file('company_registration_document_file');
                if ($company_registration_document_file) {
                    $company_registration_document_filename = Str::random(50) . '.' . $company_registration_document_file->getClientOriginalExtension();
                    $company_registration_document_file->move($this->destinationPath, $company_registration_document_filename);
                } else {
                    $company_registration_document_filename = null;
                }

                //Move Uploaded tax registration document File
                $tax_registration_document_file = $request->file('tax_registration_document_file');
                if ($tax_registration_document_file) {
                    $tax_registration_document_filename = Str::random(50) . '.' . $tax_registration_document_file->getClientOriginalExtension();
                    $tax_registration_document_file->move($this->destinationPath, $tax_registration_document_filename);
                } else {
                    $tax_registration_document_filename = null;
                }


                //Move Uploaded startup logo File
                $startup_logo_file = $request->file('startup_logo');
                if ($startup_logo_file) {
                    $startup_logo_filename = Str::random(50) . '.' . $startup_logo_file->getClientOriginalExtension();
                    $startup_logo_file->move($this->destinationPath, $startup_logo_filename);
                } else {
                    $startup_logo_filename = null;
                }

                //Move Uploaded startup pitch deck File
                $startup_pitch_deck_file = $request->file('startup_pitch_deck');
                if ($startup_pitch_deck_file) {
                    $startup_pitch_deck_filename = Str::random(50) . '.' . $startup_logo_file->getClientOriginalExtension();
                    $startup_logo_file->move($this->destinationPath, $startup_pitch_deck_filename);
                } else {
                    $startup_pitch_deck_filename = null;
                }



                return $this->query()->create([
                    'award_id' => $award->id,
                    'startup_name' => $request->startup_name,
                    'founder_names' => $request->founder_names,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'city' => $request->city,

                    'startup_description' => $request->startup_description,
                    'date_of_incorporation' => $request->date_of_incorporation,
                    'no_of_staff' => $request->no_of_staff,
                    'product_service' => $request->product_service,
                    'website' => $request->website ?? null,
                    'achievements' => $request->achievements,
                    'major_achievements' => $request->major_achievements,
                    'impact_of_startup' => $request->impact_of_startup,
                    'growth_plan' => $request->growth_plan,
                    'award_recognition' => $request->award_recognition,
                    'why_your_startup' => $request->why_your_startup,

                    'list_of_social_media' => $request->list_of_social_media,
                    'online_resources' => $request->online_resources ?? null,

                    'contact_name' => $request->contact_name,
                    'contact_email' => $request->contact_email,
                    'contact_phone' => $request->contact_phone,

                    'company_registration_document_file' => $company_registration_document_filename,
                    'tax_registration_document_file' => $tax_registration_document_filename,
                    'startup_logo' => $startup_logo_filename,
                    'startup_pitch_deck' => $startup_pitch_deck_filename,

                ]);
            }
        });
    }

    public function update($request, $uid)
    {
        return DB::transaction(function () use ($request, $uid) {

            $application = AwardApplication::where('uid', $uid)->first();
            if ($application) {
                //Move Uploaded company registration document File
                $company_registration_document_file = $request->file('company_registration_document_file');
                if ($company_registration_document_file) {
                    $company_registration_document_filename = Str::random(50) . '.' . $company_registration_document_file->getClientOriginalExtension();
                    $company_registration_document_file->move($this->destinationPath, $company_registration_document_filename);
                    if ($application->company_registration_document_file) {
                        if (File::exists($this->destinationPath.'/'.$application->company_registration_document_file)){
                            File::delete($this->destinationPath.'/'.$application->company_registration_document_file);
                        }
                    }
                } else {
                    $company_registration_document_filename = $application->company_registration_document_file;
                }

                //Move Uploaded tax registration document File
                $tax_registration_document_file = $request->file('tax_registration_document_file');
                if ($tax_registration_document_file) {
                    $tax_registration_document_filename = Str::random(50) . '.' . $tax_registration_document_file->getClientOriginalExtension();
                    $tax_registration_document_file->move($this->destinationPath, $tax_registration_document_filename);
                    if ($application->tax_registration_document_file) {
                        if (File::exists($this->destinationPath.'/'.$application->tax_registration_document_file)){
                            File::delete($this->destinationPath.'/'.$application->tax_registration_document_file);
                        }
                    }
                } else {
                    $tax_registration_document_filename = $application->tax_registration_document_file;
                }


                //Move Uploaded startup logo File
                $startup_logo_file = $request->file('startup_logo');
                if ($startup_logo_file) {
                    $startup_logo_filename = Str::random(50) . '.' . $startup_logo_file->getClientOriginalExtension();
                    $startup_logo_file->move($this->destinationPath, $startup_logo_filename);

                    if ($application->startup_logo) {
                        if (File::exists($this->destinationPath.'/'.$application->startup_logo)){
                            File::delete($this->destinationPath.'/'.$application->startup_logo);
                        }
                    }
                } else {
                    $startup_logo_filename = $application->startup_logo;
                }

                //Move Uploaded startup pitch deck File
                $startup_pitch_deck_file = $request->file('startup_pitch_deck');
                if ($startup_pitch_deck_file) {
                    $startup_pitch_deck_filename = Str::random(50) . '.' . $startup_logo_file->getClientOriginalExtension();
                    $startup_logo_file->move($this->destinationPath, $startup_pitch_deck_filename);

                    if ($application->startup_pitch_deck) {
                        if (File::exists($this->destinationPath.'/'.$application->startup_pitch_deck)){
                            File::delete($this->destinationPath.'/'.$application->startup_pitch_deck);
                        }
                    }
                } else {
                    $startup_pitch_deck_filename = $application->startup_pitch_deck;
                }



                return $application->update([
                    'startup_name' => $request->startup_name,
                    'founder_names' => $request->founder_names,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'city' => $request->city,

                    'startup_description' => $request->startup_description,
                    'date_of_incorporation' => $request->date_of_incorporation,
                    'no_of_staff' => $request->no_of_staff,
                    'product_service' => $request->product_service,
                    'website' => $request->website ?? null,
                    'achievements' => $request->achievements,
                    'major_achievements' => $request->major_achievements,
                    'impact_of_startup' => $request->impact_of_startup,
                    'growth_plan' => $request->growth_plan,
                    'award_recognition' => $request->award_recognition,
                    'why_your_startup' => $request->why_your_startup,

                    'list_of_social_media' => $request->list_of_social_media,
                    'online_resources' => $request->online_resources ?? null,

                    'contact_name' => $request->contact_name,
                    'contact_email' => $request->contact_email,
                    'contact_phone' => $request->contact_phone,

                    'company_registration_document_file' => $company_registration_document_filename,
                    'tax_registration_document_file' => $tax_registration_document_filename,
                    'startup_logo' => $startup_logo_filename,
                    'startup_pitch_deck' => $startup_pitch_deck_filename,
                ]);
            }
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
