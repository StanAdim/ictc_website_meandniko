<?php
namespace Database\Seeders;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannersSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $banner = Banner::all();
//        if (count($banner)  > 0) {
            $this->disableForeignKeys("banners");
            $this->delete('banners');

            $Banner = new Banner();

            $Banner->title_sw = "Banner #1";
            $Banner->title_en = "Banner #1";

            $Banner->details_sw = "It is a long established fact that a reader will be distracted by the readable content of a page.";
            $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";

            $Banner->file_sw = "noimg.png";
            $Banner->file_en = "noimg.png";

            $Banner->link_url = "#";
            $Banner->status = 1;
            $Banner->visits = 0;
            $Banner->created_by = 1;
            $Banner->save();

            $Banner = new Banner();

            $Banner->title_sw = "Banner #2";
            $Banner->title_en = "Banner #2";

            $Banner->details_sw = "It is a long established fact that a reader will be distracted by the readable content of a page.";
            $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";

            $Banner->file_sw = "noimg.png";
            $Banner->file_en = "noimg.png";

            $Banner->link_url = "#";
            $Banner->status = 1;
            $Banner->visits = 0;
            $Banner->created_by = 1;
            $Banner->save();

            $this->enableForeignKeys("banners");
//        }
    }
}
