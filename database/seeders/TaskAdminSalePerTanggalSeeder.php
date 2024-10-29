<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskAdminSalePerTanggalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasksadminsale = [];
        $tasksadminsale[] = [
            'title' => 'Print bonus maraco',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Admin Sale',
            'show_on_dates' => json_encode(['01', '02', '03']) // Tanggal muncul hanya pada tanggal 1-3 setiap bulan
        ];

        $tasksadminsale[] = [
            'title' => 'Sesuaikan fisik invoice piutang dengan GF Akuntansi',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Admin Sale',
            'show_on_dates' => json_encode(['02', '03', '04']) // Tanggal muncul hanya pada tanggal  se2-4tiap bulan
        ];

        // Insert the tasks into the database
        DB::table('tasks')->insert($tasksadminsale);
    }
}
