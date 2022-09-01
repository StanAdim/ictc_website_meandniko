<?php

namespace Database\Seeders;
use App\Models\Language;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys("languages");
        $this->delete('languages');

        $Language = new Language;
        $Language->title = "English";
        $Language->code = "en";
        $Language->direction = "ltr";
        $Language->icon = "us";
        $Language->box_status = 1;
        $Language->left = "left";
        $Language->right = "right";
        $Language->status = 1;
        $Language->created_by = 1;
        $Language->save();

       $Language = new Language;
        $Language->title = "Swahili";
        $Language->code = "sw";
        $Language->direction = "ltr";
        $Language->icon = "tz";
        $Language->box_status = 1;
        $Language->left = "left";
        $Language->right = "right";
        $Language->status = 1;
        $Language->created_by = 1;
        $Language->save();

        $this->enableForeignKeys("languages");

    }
}
