<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyAccountingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_accounting', function (Blueprint $table) {
            $table->id();
            $table->string('created_by', 50);
            $table->dateTime('created_date', 6)->nullable();
            $table->string('last_modified_by', 50)->nullable();
            $table->dateTime('last_modified_date', 6)->nullable();
            $table->string('currency')->nullable();
            $table->string('financial_strength_rating')->nullable();
            $table->string('gross_written_premium')->nullable();
            $table->string('gross_written_premium_year')->nullable();
            $table->string('issue_credit_rating')->nullable();
            $table->string('moody_rating')->nullable();
            $table->string('other_rating')->nullable();
            $table->string('public_listed_company')->nullable();
            $table->string('regulatory_authority')->nullable();
            $table->string('s_andprating')->nullable();
            $table->bigInteger('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('company_detail');
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
        Schema::dropIfExists('company_accounting');
    }
}
