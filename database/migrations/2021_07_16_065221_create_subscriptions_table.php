<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('package_name',20)->nullable();
            $table->float('price',20)->nullable();
            $table->integer('total_sanctions')->nullable();
            $table->integer('remaining_sanctions')->nullable();
            $table->integer('used_sanctions')->nullable();
            $table->string('status',20)->nullable();

            $table->bigInteger('package_id')->unsigned();
            $table->foreign('package_id')->references('id')->on('packages');

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->softDeletes();
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
        Schema::dropIfExists('subscriptions');
    }
}
