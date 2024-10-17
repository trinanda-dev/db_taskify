<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TaskManajemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            // Tugas untuk hari senin
            [
                'title' => 'Lowongan Kerja Senin',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],

            // Tugas untuk hari selasa
            [
                'title' => 'Lowongan Kerja Selasa',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],

            // Tugas untuk hari rabu
            [
                'title' => 'Lowongan Kerja Rabu',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],

            // Tugas untuk hari kamis
            [
                'title' => 'Lowongan Kerja Kamis',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],

            // Tugas untuk hari jumat
            [
                'title' => 'Lowongan Kerja Jumat',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],

            // Tugas untuk hari sabtu
            [
                'title' => 'Lowongan Kerja Sabtu',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
        ];

        // Insert the tasks into the database
        DB::table('tasks')->insert($tasks);
    }
}