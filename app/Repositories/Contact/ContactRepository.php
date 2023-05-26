<?php
namespace App\Repositories\Contact;
use App\Models\Contact;
use App\Repositories\BaseRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ContactRepository extends BaseRepository
{

    const MODEL = Contact::class;

    public function __construct()
    {
    }

    public function store($request)
    {
        return DB::transaction(function () use ($request) {
            return $this->query()->create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone ?? null,
                'message' => $request->message,
                ]);
        });
    }
}
