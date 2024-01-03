<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_information', function (Blueprint $table) {
            $table->id();
            $table->string('created_by', 50);
            $table->string('created_date', 50);
            $table->string('last_modified_by', 50)->nullable();
            $table->string('last_modified_date', 50)->nullable();
            $table->string('country_name')->nullable()->unique();
            $table->binary('law_governing_ins')->nullable();
            $table->string('no_of_operating_entities')->nullable();
            $table->string('reg_authority')->nullable();
            $table->string('reg_authority_web_link')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('rate_in_dollar')->nullable();
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
        Schema::dropIfExists('country_information');
    }
}
