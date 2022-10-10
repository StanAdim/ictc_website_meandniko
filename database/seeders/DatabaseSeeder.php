<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
//        $this->call(BannersSeeder::class);
//        $this->call(LanguagesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(GeneralConfiguationsSeeder::class);
        Model::reguard();
    }
}
