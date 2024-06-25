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
            $table->after('administration_charges',function (Blueprint $table) {
                $table->string('pdf_file');
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
