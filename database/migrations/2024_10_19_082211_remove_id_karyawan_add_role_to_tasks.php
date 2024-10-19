<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveIdKaryawanAddRoleToTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            // Periksa apakah kolom id_karyawan ada sebelum menghapusnya
            if (Schema::hasColumn('tasks', 'id_karyawan')) {
                $table->dropColumn('id_karyawan');
            }

            // Menambahkan kolom role dengan nilai default 'Manajemen'
            $table->string('role')->default('Manajemen');
        });

        // Jika ingin, isi semua tugas yang sudah ada dengan 'Manajemen' di kolom role
        DB::table('tasks')->update(['role' => 'Manajemen']);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            // Jika rollback, tambahkan kembali kolom id_karyawan
            $table->string('id_karyawan')->nullable();

            // Hapus kolom role
            $table->dropColumn('role');
        });
    }
}