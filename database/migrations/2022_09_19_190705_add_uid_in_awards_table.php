<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUidInAwardsTable extends Migration
{
    public function up()
    {
        Schema::table('awards', function (Blueprint $table) {
            if (!Schema::hasColumn('awards', 'uid')) {
                $table->uuid('uid')->nullable();
            }
        });
    }
}