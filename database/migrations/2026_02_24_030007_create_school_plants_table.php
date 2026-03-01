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
        Schema::create('school_plants', function (Blueprint $table) {
            $table->id();
            $table->string('plant_number');
            $table->foreignId('plant_id')->constrained();
            $table->string('image');
            $table->foreignId('location_id')->constrained();
            $table->text('location_detail');
            $table->foreignId('condition_id')->constrained();
            $table->text('condition_detail');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_plants');
    }
};
