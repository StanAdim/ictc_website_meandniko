<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('application_categories');
        Schema::create('application_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('award_application_id')->constrained()->cascadeOnDelete();
            $table->foreignId('award_category_id')->constrained()->cascadeOnDelete();

//            $table->foreign('award_application_id')->references('id')->on('award_applications')->onUpdate('CASCADE')->onDelete('RESTRICT');
//            $table->foreign('award_category_id')->references('id')->on('award_categories')->onUpdate('CASCADE')->onDelete('RESTRICT');

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application_categories');
    }
}