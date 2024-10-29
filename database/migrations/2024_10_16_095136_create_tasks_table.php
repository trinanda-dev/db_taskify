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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('date')->nullable(); // Mengizinkan nilai NULL
            $table->string('day')->nullable();
            $table->string('time');
            $table->boolean('completed')->default(false);
            $table->boolean('from_system')->default(false); // Menambahkan kolom from_system
            $table->json('show_on_dates')->nullable();
            $table->json('show_on_weeks')->nullable();
            $table->json('show_on_months')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};