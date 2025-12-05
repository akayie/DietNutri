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
        Schema::create('meal_plans', function (Blueprint $table) {
    $table->id();

    // Foreign keys
    $table->unsignedBigInteger('energy_food_id')->nullable();
    $table->unsignedBigInteger('bodybuilding_food_id')->nullable();
    $table->unsignedBigInteger('protective_food_id')->nullable();
    $table->unsignedBigInteger('disease_id')->nullable();

    $table->text('note')->nullable();
    $table->enum('meal_time', ['breakfast','lunch','dinner'])->nullable();
    $table->string('image_path', 1000)->nullable();

    $table->timestamps();
    $table->softDeletes();

    // Foreign keys
    $table->foreign('energy_food_id')->references('id')->on('energy_food')->onDelete('set null');
    $table->foreign('bodybuilding_food_id')->references('id')->on('body_building_food')->onDelete('set null');
    $table->foreign('protective_food_id')->references('id')->on('protective_food')->onDelete('set null');
    $table->foreign('disease_id')->references('id')->on('diseases')->onDelete('set null');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meal_plans');
    }
};
