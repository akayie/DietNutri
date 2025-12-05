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
        Schema::create('body_building_food', function (Blueprint $table) {
        $table->id();
            $table->string('name', 1000);
            $table->decimal('calories', 6, 2)->nullable();
            $table->decimal('protein', 5, 2)->nullable();
            $table->text('description')->nullable();
            $table->string('image_path', 1000);
            $table->timestamps();
            $table->softDeletes(); // optional: for soft deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('body_building_food');
    }
};
