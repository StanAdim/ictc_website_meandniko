<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_categories')->insert([
            'categoryName' => 'Fintech'
        ]);

        DB::table('project_categories')->insert([
            'categoryName' => 'HealthTech'
        ]);

        DB::table('project_categories')->insert([
            'categoryName' => 'Agritech'
        ]);

        DB::table('project_categories')->insert([
            'categoryName' => 'E-Commerce'
        ]);

        DB::table('project_categories')->insert([
            'categoryName' => 'Edutech'
        ]);

        DB::table('project_categories')->insert([
            'categoryName' => 'TourTech'
        ]);

        DB::table('project_categories')->insert([
            'categoryName' => 'Digital inclusion'
        ]);


        DB::table('project_categories')->insert([
            'categoryName' => 'Blue Economy'
        ]);
   
        DB::table('project_categories')->insert([
            'categoryName' => 'Digital Security'
        ]);

        
        DB::table('project_categories')->insert([
            'categoryName' => 'General'
        ]);

        
    }
}
