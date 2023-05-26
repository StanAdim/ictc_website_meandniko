<?php
namespace Database\Seeders;
use App\Repositories\UserRepository;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = (new UserRepository())->find(1);
        if (!$user) {
            $this->disableForeignKeys("users");
            $this->delete('users');
            DB::table('users')->insert(array(
                    0 =>
                        array(
                            'id' => 1,
                            'name' => 'ICTC Admin',
                            'email' => 'admin@ictc.go.tz',
//                            'phone' => '+255716220745',
//                            'uuid' => 'b0905ab4-92cf-4f7a-966c-b8e0270d92aa',
                            'password' => bcrypt('vfVNY@d9'),
                        ),
                )
            );
            $this->enableForeignKeys("users");
        } else {
            $user->name = 'ICTC Admin';
            $user->email = 'admin@ictc.go.tz';
            $user->password = bcrypt('vfVNY@d9');
            $user->save();
        }
    }
}
