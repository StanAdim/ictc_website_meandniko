<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->index();

            $table->string('title_sw');
            $table->string('title_en');

            $table->text('description_sw');
            $table->text('description_en');

            $table->string('start_date');
            $table->string('end_date');

            $table->string('file_sw')->nullable();
            $table->string('file_en')->nullable();

            $table->tinyInteger('status')->default(0);

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
        Schema::dropIfExists('events');
    }
}
