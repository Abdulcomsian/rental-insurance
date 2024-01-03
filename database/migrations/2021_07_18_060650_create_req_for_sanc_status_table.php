<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReqForSancStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('req_for_sanc_status', function (Blueprint $table) {
            $table->id();
            $table->longText('comments')->nullable();

            $table->bigInteger('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('company_detail');

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('sanctions_type');
            $table->string('status');
            $table->string('board_of_directors')->nullable();
            $table->string('sanctions')->nullable();
            $table->longText('admin_comments')->nullable();
            $table->timestamp('result_date')->nullable();
            $table->timestamp('cancel_date')->nullable();
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
        Schema::dropIfExists('req_for_sanc_status');
    }
}
