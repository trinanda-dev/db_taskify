<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TaskManajemenPerTanggalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [];

        // Tugas pertanggal
        $tasks[] = [
            'title' => 'Returan nota piutang',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Manajemen',
            'show_on_dates' => json_encode(['01', '02', '03']) // Tanggal muncul hanya pada tanggal 1-3 setiap bulan
        ];

        $tasks[] = [
            'title' => 'Follow up orderan konsumen',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Manajemen',
            'show_on_dates' => json_encode(['01', '02', '03']) // Tanggal muncul hanya pada tanggal 1-3 setiap bulan
        ];

        $tasks[] = [
            'title' => 'Cek bibit expired',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Manajemen',
            'show_on_dates' => json_encode(['01']) // Tanggal muncul hanya pada tanggal 1 setiap bulan
        ];

        $tasks[] = [
            'title' => 'Cek stok barang',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Manajemen',
            'show_on_dates' => json_encode(['03', '04', '05']) // Tanggal muncul hanya pada tanggal 3-5 setiap bulan
        ];

        $tasks[] = [
            'title' => 'Cek target konsumen',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Manajemen',
            'show_on_dates' => json_encode(['27', '28', '29', '30']) // Tanggal muncul hanya pada tanggal 27-30 setiap bulan
        ];


        // Insert the tasks into the database
        DB::table('tasks')->insert($tasks);
    }
}