<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskKepalaTokoPerTanggalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $taskkepalatoko = [];
        $taskkepalatoko[] = [
            'title' => 'Returan nota piutang',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Kepala Toko',
            'show_on_dates' => null,
            'show_on_weeks' => json_encode(['4']),
            'show_on_months' => json_encode(['02', '05', '08', '11']),
        ];

        $taskkepalatoko[] = [
            'title' => 'Audit Tani Mas',
            'date' => null,
            'day' => 'Wednesday',
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Kepala Toko',
            'show_on_dates' => null,
            'show_on_weeks' => json_encode(['2']),
            'show_on_months' => null,
        ];

        $taskkepalatoko[] = [
            'title' => 'Audit Tani Makmur',
            'date' => null,
            'day' => 'Wednesday',
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Kepala Toko',
            'show_on_dates' => null,
            'show_on_weeks' => json_encode(['3']),
            'show_on_months' => null,
        ];

        $taskkepalatoko[] = [
            'title' => 'Audit Bintan (Gudang) - Alat',
            'date' => null,
            'day' => 'Monday',
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Kepala Toko',
            'show_on_dates' => null,
            'show_on_weeks' => json_encode(['1']),
            'show_on_months' => null,
        ];

        $taskkepalatoko[] = [
            'title' => 'Audit Bintan (Gudang) - Benih & Pupuk',
            'date' => null,
            'day' => 'Tuesday',
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Kepala Toko',
            'show_on_dates' => null,
            'show_on_weeks' => json_encode(['2']),
            'show_on_months' => null,
        ];

        $taskkepalatoko[] = [
            'title' => 'Audit Bintan (Gudang) - Pestisida',
            'date' => null,
            'day' => 'Monday',
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Kepala Toko',
            'show_on_dates' => null,
            'show_on_weeks' => json_encode(['3']),
            'show_on_months' => json_encode(['03', '06'], '09', '12'),
        ];

        $taskkepalatoko[] = [
            'title' => 'Audit Tani Mandiri',
            'date' => null,
            'day' => 'Wednesday',
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Kepala Toko',
            'show_on_dates' => null,
            'show_on_weeks' => json_encode(['4']),
            'show_on_months' => null,
        ];

        $taskkepalatoko[] = [
            'title' => 'Audit Tani Maju',
            'date' => null,
            'day' => 'Wednesday',
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Kepala Toko',
            'show_on_dates' => null,
            'show_on_weeks' => json_encode(['1']),
            'show_on_months' => null,
        ];

        $taskkepalatoko[] = [
            'title' => 'Audit Batam',
            'date' => null,
            'day' => 'Friday',
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Kepala Toko',
            'show_on_dates' => null,
            'show_on_weeks' => json_encode(['3']),
            'show_on_months' => json_encode(['01', '04', '07', '10']),
        ];

        $taskkepalatoko[] = [
            'title' => 'Audit Batam',
            'date' => null,
            'day' => 'Thursday',
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Kepala Toko',
            'show_on_dates' => null,
            'show_on_weeks' => json_encode(['4']),
            'show_on_months' => null,
        ];

        // Insert the tasks into the database
        DB::table('tasks')->insert($taskkepalatoko);
    }
}
