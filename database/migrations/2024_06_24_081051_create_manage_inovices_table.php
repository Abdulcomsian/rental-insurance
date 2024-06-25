<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('manage_inovices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rental_companyid');
            $table->unsignedBigInteger('vehicle_id');
            $table->unsignedBigInteger('insurance_company_id');
            $table->unsignedBigInteger('insurance_sub_company_id')->nullable();
            $table->string('customer_name');
            $table->string('address');
            $table->dateTime('pickup_date');
            $table->dateTime('drop_date');
            $table->string('rental_fee');
            $table->string('insurance_cover');
            $table->string('rego_recovery');
            $table->string('administration_charges');
            $table->foreign('rental_companyid')->references('id')->on('companies');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->foreign('insurance_company_id')->references('id')->on('insurance_companies');
            $table->foreign('insurance_sub_company_id')->references('id')->on('sub_insurance_companies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manage_inovices');
    }
};
