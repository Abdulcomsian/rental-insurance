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
        Schema::table('rental_agreements', function (Blueprint $table) {
            $table->after('cleaning_fee',function (Blueprint $table) {
                $table->string('in_km');
                $table->string('out_km');
                $table->string('licence_number')->nullable();
                $table->string('licence_class')->nullable();
                $table->string('licence_state')->nullable();
                $table->string('licence_exp_date')->nullable();
                $table->string('signature')->nullable();
                $table->string('licence_image')->nullable();
                       });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rental_agreements', function (Blueprint $table) {
            //
        });
    }
};
