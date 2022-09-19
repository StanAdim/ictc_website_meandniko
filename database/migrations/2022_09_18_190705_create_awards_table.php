<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awards', function (Blueprint $table) {
            $table->id();
            $table->uuid('uid');
            $table->string('slug')->unique()->index();

            $table->string('title_sw');
            $table->string('title_en');

            $table->text('description_sw');
            $table->text('description_en');

            $table->string('application_deadline');

            $table->string('award_date');

            $table->string('file_sw')->nullable();
            $table->string('file_en')->nullable();

            $table->string('attachment_sw')->nullable();
            $table->string('attachment_en')->nullable();

            $table->tinyInteger('published')->default(0);

            // Award Contact Person
            $table->string('contact_name')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();

            // Award short-description
            $table->string('short_description_sw')->nullable();
            $table->string('short_description_en')->nullable();

            $table->string('award_venue')->nullable();

            $table->string('status')->default('NEW');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('awards');
    }
}