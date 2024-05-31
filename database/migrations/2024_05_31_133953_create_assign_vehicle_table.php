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
        Schema::create('assign_vehicle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rental_company_id');
            $table->unsignedBigInteger('vehicle_id');
            $table->unsignedBigInteger('insurance_company_id');
            $table->unsignedBigInteger('insurance_sub_company_id');
            $table->string('amount');
            $table->dateTime('start_date');
            $table->dateTime('end_data');
            $table->timestamps();
            $table->foreign('rental_company_id')->references('id')->on('companies');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->foreign('insurance_company_id')->references('id')->on('insurance_companies');
            $table->foreign('insurance_sub_company_id')->references('id')->on('sub_insurance_companies')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assign_vehicle');
    }
};
