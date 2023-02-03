<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInnovationProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('innovation_projects', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('institution');
            $table->string('title');
            $table->integer('year');
            $table->string('type');
            $table->longText('brief');
            $table->boolean('isNominated');
            $table->timestamps();
            $table->string('creatorEmail');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

        public function down()
    {
        Schema::dropIfExists('innovation_projects');
    }
}
