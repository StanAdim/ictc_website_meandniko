<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwardApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//  "contact_name" => null
//  "contact_email" => null
//  "contact_phone" => null
        Schema::create('award_applications', function (Blueprint $table) {
            $table->id();
            $table->uuid('uid');

            $table->integer('award_id');
            $table->string('startup_name');
            $table->string('founder_names');
            $table->string('phone');
            $table->string('email');
            $table->string('city');

            $table->text('startup_description');
            $table->string('date_of_incorporation');

            $table->integer('no_of_staff');
            $table->string('product_service');
            $table->string('website');

            $table->text('achievements');
            $table->text('major_achievements');
            $table->text('impact_of_startup');
            $table->text('growth_plan');
            $table->text('award_recognition');
            $table->text('why_your_startup');
            $table->text('list_of_social_media');
            $table->text('online_resources')->nullable();

            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('contact_phone');

            $table->string('company_registration_document_file')->nullable();
            $table->string('tax_registration_document_file')->nullable();
            $table->string('startup_logo')->nullable();
            $table->string('startup_pitch_deck')->nullable();

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