<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPitchdeckYoutubeLinkInAwardApplicationTable extends Migration
{
    public function up()
    {
        Schema::table('award_applications', function (Blueprint $table) {
            if (!Schema::hasColumn('award_applications', 'pitchdeck_youtube_link')) {
                $table->string('pitchdeck_youtube_link');
            }
        });
    }
}