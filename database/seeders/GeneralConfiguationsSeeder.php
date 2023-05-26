<?php

namespace Database\Seeders;
use App\Models\General;
use App\Models\Language;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class GeneralConfiguationsSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys("general_configurations");
        $this->delete('general_configurations');

        $general = new General;
        $general->map_key = "AIzaSyBSIU9-xcjVfPpfir98qg0bC5HhyEAsed4";

        $general->recaptcha_key = "6Lfr6yIiAAAAAHB0bBeJFQD8YSvdRyxy840SgcRr";
        $general->google_recaptcha_secret = "6Lfr6yIiAAAAAKz_SEj4xnELTVYeRPb0A_miV2W5";
        $general->save();

        $this->enableForeignKeys("general_configurations");

    }
}
