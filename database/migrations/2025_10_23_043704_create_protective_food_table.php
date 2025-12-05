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
        Schema::create('protective_food', function (Blueprint $table) {
            $table->id();
            $table->string('name', 1000);
            $table->decimal('calories', 6, 2)->nullable();
            $table->decimal('fiber', 5, 2)->nullable();
            $table->decimal('sugar', 5, 2)->nullable();
            $table->text('vitamin')->nullable();
            $table->text('minerals')->nullable();
            $table->text('description')->nullable();
            $table->string('image_path', 1000);
            $table->timestamps();
            $table->softDeletes(); // optional: allows soft delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('protective_food');
    }
};
