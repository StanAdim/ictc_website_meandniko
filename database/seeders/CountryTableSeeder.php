<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { //
        $json = file_get_contents(database_path('data/countries.json'));
        $data = json_decode($json, true);
        foreach ($data as $country) {
            DB::table('countries')->insert([
                'name' => $country['name'],
                'code' => $country['code'],
            ]);
        }
    }
    
}
