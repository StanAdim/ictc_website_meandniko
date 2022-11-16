<?php

namespace Database\Seeders;

use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class RegistrationCategoriesSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys("categories");
        $this->delete('categories');
        \DB::table('categories')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Startup'
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Hub'
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Accelerator'
                ),
        ));

        $this->enableForeignKeys("categories");

    }
}
