<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskGudangBintanPerTanggalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $taskgudangbintan = [];
        $taskgudangbintan[] = [
            'title' => 'Cek expired barang benih',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Gudang Bintan',
            'show_on_dates' => json_encode(['01', '02', '03']),
            'show_on_months' => null
        ];

        $taskgudangbintan[] = [
            'title' => 'Cek stok barang',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Gudang Bintan',
            'show_on_dates' => json_encode(['01']),
            'show_on_months' => json_encode(['03', '06', '09', '12'])

        ];

        $taskgudangbintan[] = [
            'title' => 'Ganti oli (lori, engkel, hilux)',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Gudang Bintan',
            'show_on_dates' => json_encode(['05']),
            'show_on_months' => json_encode(['01', '04', '07', '10'])
        ];

        $taskgudangbintan[] = [
            'title' => 'Ganti filter oli dan bersihkan udara (lori, engkel, hilux)',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Gudang Bintan',
            'show_on_dates' => json_encode(['05']),
            'show_on_months' => json_encode(['01', '07'])
        ];

        $taskgudangbintan[] = [
            'title' => 'Cek / service berkala selruruh kondisi kendaraan (lori, engkel, hilux, forklip)',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Gudang Bintan',
            'show_on_dates' => json_encode(['05']),
            'show_on_months' => json_encode(['01', '07'])
        ];

        $taskgudangbintan[] = [
            'title' => 'Ganti oli dan stel rantai (revo, supra, vario, dll)',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Gudang Bintan',
            'show_on_dates' => json_encode(['10']),
            'show_on_months' => null
        ];

        $taskgudangbintan[] = [
            'title' => 'Ganti oli dan stel rantai (revo, supra, vario, dll)',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Gudang Bintan',
            'show_on_dates' => json_encode(['10']),
            'show_on_months' => json_encode(['01', '07'])
        ];

        // Insert the tasks into the database
        DB::table('tasks')->insert($taskgudangbintan);
    }
}
