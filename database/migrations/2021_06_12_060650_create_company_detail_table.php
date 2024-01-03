<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_detail', function (Blueprint $table) {
            $table->id();
            $table->string('created_by', 50);
            $table->dateTime('created_date', 6)->nullable();
            $table->string('last_modified_by', 50)->nullable();
            $table->dateTime('last_modified_date', 6)->nullable();
            $table->longText('about')->nullable();
            $table->string('auditor')->nullable();
            $table->string('company_email_id')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_type')->nullable();
            $table->string('company_website')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('corporate_details')->nullable();
            $table->string('country')->nullable();
            $table->string('employee_count')->default(0);
            $table->string('fax_detail')->nullable();
            $table->binary('financial_report')->nullable();
            $table->longText('image_url')->nullable();
            $table->string('incorporated')->nullable();
            $table->string('incorporated_year')->nullable();
            $table->string('location')->nullable();
            $table->string('toll_free_number')->nullable();
            $table->string('trade_name')->nullable();
            $table->longText('alternative_names')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('company_detail');
    }
}
