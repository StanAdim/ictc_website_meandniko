<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->uuid('uid');

            $table->string('entity_name');
            $table->string('entity_address');
            $table->foreignId('region_id')->constrained()->cascadeOnDelete();
            $table->string('phone');
            $table->string('district');
            $table->string('email');
            $table->string('website')->nullable();
            $table->text('description');

            $table->text('list_of_social_media');
            $table->string('date_of_incorporation');
            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('contact_phone');

            $table->boolean('is_registered');

            $table->string('company_registration_document_file')->nullable();
            $table->string('tax_registration_document_file')->nullable();
            $table->string('startup_logo')->nullable();

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
        Schema::dropIfExists('registrations');
    }
}