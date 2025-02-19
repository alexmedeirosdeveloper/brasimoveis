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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ref');
            $table->string('title');
            $table->text('description');
            $table->string('price');
            $table->string('priceRange');
            $table->string('location');
            $table->integer('bed');
            $table->integer('bath');
            $table->integer('garage');
            $table->string('area');
            $table->string('type');

            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
