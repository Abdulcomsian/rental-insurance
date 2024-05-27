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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('make_id');
            $table->unsignedBigInteger('model_id');
            $table->string('name');
            $table->string('reg_number');
            $table->string('color');
            $table->foreign('make_id')->references('id')->on('vehiclemakes');
            $table->foreign('model_id')->references('id')->on('vehiclemodels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
