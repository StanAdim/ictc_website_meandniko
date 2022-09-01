<?php
namespace App\Repositories;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRepository extends BaseRepository
{

    const MODEL = User::class;

    /**
     * EquipmentInspectionRepository constructor.
     */
    public function __construct()
    {

    }

    public function store($request)
    {
        return DB::transaction(function () use ($request) {
            $spare = $this->query()->create([
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'description' => $request->description
            ]);
            $spare->transactions()->create([
                'quantity' => $request->quantity,
            ]);
        });
    }

    public function update($request, $id)
    {
        return DB::transaction(function () use ($request, $id) {
            $spare = $this->find($id);
            return $spare->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description
            ]);
        });
    }
}
