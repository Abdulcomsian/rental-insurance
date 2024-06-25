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
            $table->after('delivery_fee',function (Blueprint $table) {
                $table->string('basic_insurance');
                $table->string('reduction');
                $table->string('traffic_infringement');
                $table->string('fuel_topup');
                $table->string('cleaning_fee');
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
