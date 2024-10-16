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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->string('id_karyawan', 36)->primary(); // ID bisa dibatasi panjangnya (misalnya untuk UUID)
            $table->string('nama', 100); // Berikan batasan panjang nama
            $table->string('role', 50); // Berikan batasan panjang untuk role, atau pertimbangkan menggunakan enum
            $table->string('password', 255); // Panjang 255 karakter untuk hash password
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
