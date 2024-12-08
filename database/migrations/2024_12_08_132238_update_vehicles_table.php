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
        Schema::table('vehicles', function (Blueprint $table) {
            $table->after('status',function (Blueprint $table) {
                $table->string('insurance_type')->nullable;
                $table->date('start_date')->nullable;
                $table->date('end_date')->nullable;
                $table->integer('insurance_company_id')->nullable;  

                
                       }); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {
            //
        });
    }
};
