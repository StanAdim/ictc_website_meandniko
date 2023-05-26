<?php
namespace App\Repositories\Registration;
use App\Models\Award;
use App\Models\AwardApplication;
use App\Models\Registration;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class RegistrationRepository extends BaseRepository
{

    const MODEL = Registration::class;
    protected $destinationPath;
    protected $destinationAttachmentPath;

    public function __construct()
    {
        $this->destinationPath = 'uploads/registration';
    }

    public function store($request)
    {
        return DB::transaction(function () use ($request) {


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

            $registration = $this->query()->create([
                'entity_name' => $request->entity_name,
                'entity_address' => $request->entity_address,
                'region_id' => $request->region,
                'district' => $request->district,
                'phone' => $request->phone,
                'email' => $request->email,
                'website' => $request->website ?? null,
                'description' => $request->description,

                'list_of_social_media' => $request->list_of_social_media,
                'date_of_incorporation' => $request->date_of_incorporation ?? '',

                'contact_name' => $request->contact_name,
                'contact_email' => $request->contact_email,
                'contact_phone' => $request->contact_phone,

                'is_registered' => $request->is_registered,

                'company_registration_document_file' => $company_registration_document_filename,
                'tax_registration_document_file' => $tax_registration_document_filename,
                'startup_logo' => $startup_logo_filename,
            ]);

            foreach ($request->category as $cat) {
                $registration->categories()->attach($cat);
            }

            return $registration;
        });
    }

    public function update($request, $uid)
    {
        return DB::transaction(function () use ($request, $uid) {

            $registration = Registration::where('uid', $uid)->first();
            if ($registration) {
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

                return $application->update([
                    'entity_name' => $request->entity_name,
                    'entity_address' => $request->entity_address,
                    'region_id' => $request->region_id,
                    'district' => $request->district,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'website' => $request->website ?? null,
                    'description' => $request->description,

                    'list_of_social_media' => $request->list_of_social_media,
                    'date_of_incorporation' => $request->date_of_incorporation,
                    'contact_name' => $request->contact_name,
                    'contact_email' => $request->contact_email,
                    'contact_phone' => $request->contact_phone,

                    'is_registered' => $request->is_registered,

                    'company_registration_document_file' => $company_registration_document_filename,
                    'tax_registration_document_file' => $tax_registration_document_filename,
                    'startup_logo' => $startup_logo_filename,
                ]);
            }
        });
    }

    public function destroy($uid)
    {
        $registration = Registration::where('uid', $uid)->first();
        if ($registration) {
            if ($registration->company_registration_document_file) {
                if (File::exists($this->destinationPath.'/'.$registration->company_registration_document_file)){
                    File::delete($this->destinationPath.'/'.$registration->company_registration_document_file);
                }
            }

            if ($registration->tax_registration_document_file) {
                if (File::exists($this->destinationPath.'/'.$registration->tax_registration_document_file)){
                    File::delete($this->destinationPath.'/'.$registration->tax_registration_document_file);
                }
            }

            if ($registration->startup_logo) {
                if (File::exists($this->destinationPath.'/'.$registration->startup_logo)){
                    File::delete($this->destinationPath.'/'.$registration->startup_logo);
                }
            }

            $registration->delete();
            return true;
        }
        return false;
    }
}
