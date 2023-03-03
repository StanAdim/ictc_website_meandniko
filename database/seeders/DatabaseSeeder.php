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
        // once done remember to comment banner ,Language , UserSeeder
        // 
        $this->call(BannersSeeder::class);
        $this->call(LanguagesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(GeneralConfiguationsSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(RegistrationCategoriesSeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(ProjectCategorySeeder::class);
        Model::reguard();
    }
}
