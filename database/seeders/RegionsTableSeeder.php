<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class RegionsTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        $this->disableForeignKeys("regions");
        $this->delete('regions');
        
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Arusha',
                'hasc' => 'TZ.AS',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Dar es Salaam',
                'hasc' => 'TZ.DS',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Dodoma',
                'hasc' => 'TZ.DO',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Geita',
                'hasc' => 'TZ.GE',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Iringa',
                'hasc' => 'TZ.IG',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Kagera',
                'hasc' => 'TZ.KG',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Katavi',
                'hasc' => 'TZ.KA',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Kigoma',
                'hasc' => 'TZ.KM',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Kilimanjaro',
                'hasc' => 'TZ.KL',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Lindi',
                'hasc' => 'TZ.LI',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Manyara',
                'hasc' => 'TZ.MY',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Mara',
                'hasc' => 'TZ.MA',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Mbeya',
                'hasc' => 'TZ.MB',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Morogoro',
                'hasc' => 'TZ.MO',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Mtwara',
                'hasc' => 'TZ.MT',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Mwanza',
                'hasc' => 'TZ.MZ',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Njombe',
                'hasc' => 'TZ.NJ',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Pemba North',
                'hasc' => 'TZ.PN',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Pemba South',
                'hasc' => 'TZ.PS',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Pwani',
                'hasc' => 'TZ.PW',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Rukwa',
                'hasc' => 'TZ.RU',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Ruvuma',
                'hasc' => 'TZ.RV',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Shinyanga',
                'hasc' => 'TZ.SY',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Simiyu',
                'hasc' => 'TZ.SI',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Singida',
                'hasc' => 'TZ.SD',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Tabora',
                'hasc' => 'TZ.TB',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Tanga',
                'hasc' => 'TZ.TN',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Zanzibar North',
                'hasc' => 'TZ.ZN',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Zanzibar South and Central',
                'hasc' => 'TZ.ZS',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Zanzibar West',
                'hasc' => 'TZ.ZW',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Songwe',
                'hasc' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Unguja South',
                'hasc' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Unguja North',
                'hasc' => NULL,
            ),
        ));
        $this->enableForeignKeys("regions");
        
    }
}
