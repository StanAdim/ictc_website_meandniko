<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRecaptchaKeyInGeneralConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('general_configurations', function (Blueprint $table) {
            $table->string('recaptcha_key')->nullable();
            $table->string('google_recaptcha_secret')->nullable();
        });
    }
}