<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TaskAdminMarketingPerTanggalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $taskadminmarketing = [];

        $taskadminmarketing[] =[
            'title' => 'Follow up ke petani besar Bintan',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Admin Marketing',
            'show_on_dates' => json_encode(['05']) // Tanggal muncul hanya pada tanggal 5 setiap bulan
        ];

        $taskadminmarketing[] =[
            'title' => 'Promosi ke distributor',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Admin Marketing',
            'show_on_dates' => json_encode(['10']) // Tanggal muncul hanya pada tanggal 10 setiap bulan
        ];

        $taskadminmarketing[] =[
            'title' => 'Lakukan pencatatan atas orderan terakhir konsumen di Bintan dengan fokus padatanggal genap (2, 4, 6, 8, 10, 12, dan 28 untuk pulau), lalu cek orderan selama 9 bulan terakhir',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Admin Marketing',
            'show_on_dates' => json_encode(['15']) // Tanggal muncul hanya pada tanggal 15 setiap bulan
        ];

        $taskadminmarketing[] =[
            'title' => 'Print total orderan per 1 bulan nilai pengambilan konsumen',
            'date' => null,
            'day' => null,
            'time' => '08:00:00',
            'completed' => false,
            'from_system' => true,
            'role' => 'Admin Marketing',
            'show_on_dates' => json_encode(['20']) // Tanggal muncul hanya pada tanggal 20 setiap bulan
        ];
        
        // Insert the tasks into the database
        DB::table('tasks')->insert($taskadminmarketing);
    }
}
