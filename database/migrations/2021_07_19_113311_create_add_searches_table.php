<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddSearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_searches', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('addSearchId')->unique()->unsigned();

            $table->bigInteger('sanc_req_id')->unsigned();
            $table->foreign('sanc_req_id')->references('id')->on('req_for_sanc_status');

            $table->string("name")->nullable();
            $table->string("searchType")->nullable();
            $table->string("searchTypeId")->nullable();
            $table->string("isArchived")->nullable();
            $table->string("numOfResults")->nullable();
            $table->string("clientInResults")->nullable();
            $table->string("clientNotInResults")->nullable();
            $table->string("affectedByUpdate")->nullable();
            $table->string("listSearchResults")->nullable();
            $table->string("excludeResults")->nullable();
            $table->string("includesPepSearchRecord")->nullable();
            $table->string("responseStatus")->nullable();

            //Using this for SaveSearch api method
            $table->string('saveSearchSuccess')->nullable();
            $table->string('saveSearchResponseStatusMessage')->nullable();
            $table->timestamp('saveSearchDate')->nullable();

            //Using this for DeleteSearch api method
            $table->string('deleteSearchSuccess')->nullable();
            $table->string('deleteSearchResponseStatusMessage')->nullable();
            $table->timestamp('deleteSearchDate')->nullable();


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
        Schema::dropIfExists('add_searches');
    }
}
