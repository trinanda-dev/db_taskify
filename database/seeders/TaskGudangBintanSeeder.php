<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TaskGudangBintanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $taskgudangbintan = [];

        $taskgudangbintan[] = [
            // Tugas untuk hari senin
            [
                'title' => 'Cek pengantaran yang belum selesai (pagi / hari sebelumnya)',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Produksi atau pengemasan barang',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Mempersiapkan barang orderan',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek tugas (pertanggal)',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Follow up jadwal kapal',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Kunci Gudang (sore)',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Kebersihan dan kerapian gudang',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek barang sampai pulau (kapan sampai)',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek keadaan kendaraan motor-pickup-lori-engkel-froklip radiator & oli (takutnya berkurang)',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cuci bak / kendaraan saat selesai antar barang (jika kotor)',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Tulis koli di surat jalan & kemasaan packing (dibuat nama pelanggannya)',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek yang harus di follow up dibuku / yg belum ada penyelesaian & wajib dicatat setiap penyampaian tugas maupun bukan',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Konsultasi dengan atasan bila ada kendala apa yang belum terselesaikan & follow up tugas yang tidak terselesaikan ke atasan (pagi-siang-sore)',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],

            // Tugas hari selasa
            [
                'title' => 'Cek pengantaran yang belum selesai (pagi / hari sebelumnya)',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Produksi atau pengemasan barang',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Mempersiapkan barang orderan',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek tugas (pertanggal)',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Follow up jadwal kapal',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Kunci Gudang (sore)',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Kebersihan dan kerapian gudang',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek barang sampai pulau (kapan sampai)',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek keadaan kendaraan motor-pickup-lori-engkel-froklip radiator & oli (takutnya berkurang)',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Tulis koli di surat jalan & kemasaan packing (dibuat nama pelanggannya)',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek yang harus di follow up dibuku / yg belum ada penyelesaian & wajib dicatat setiap penyampaian tugas maupun bukan',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Konsultasi dengan atasan bila ada kendala apa yang belum terselesaikan & follow up tugas yang tidak terselesaikan ke atasan (pagi-siang-sore)',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],

            // Tugas hari Rabu
            [
                'title' => 'Cek pengantaran yang belum selesai (pagi / hari sebelumnya)',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Produksi atau pengemasan barang',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Mempersiapkan barang orderan',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek tugas (pertanggal)',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Follow up jadwal kapal',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Kunci Gudang (sore)',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Kebersihan dan kerapian gudang',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek barang sampai pulau (kapan sampai)',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek keadaan kendaraan motor-pickup-lori-engkel-froklip radiator & oli (takutnya berkurang)',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Tulis koli di surat jalan & kemasaan packing (dibuat nama pelanggannya)',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek yang harus di follow up dibuku / yg belum ada penyelesaian & wajib dicatat setiap penyampaian tugas maupun bukan',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Konsultasi dengan atasan bila ada kendala apa yang belum terselesaikan & follow up tugas yang tidak terselesaikan ke atasan (pagi-siang-sore)',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],

            // Tugas hari Kamis
            [
                'title' => 'Cek pengantaran yang belum selesai (pagi / hari sebelumnya)',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Produksi atau pengemasan barang',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Mempersiapkan barang orderan',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek tugas (pertanggal)',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Follow up jadwal kapal',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Kunci Gudang (sore)',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Kebersihan dan kerapian gudang',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek barang sampai pulau (kapan sampai)',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek keadaan kendaraan motor-pickup-lori-engkel-froklip radiator & oli (takutnya berkurang)',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Tulis koli di surat jalan & kemasaan packing (dibuat nama pelanggannya)',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek yang harus di follow up dibuku / yg belum ada penyelesaian & wajib dicatat setiap penyampaian tugas maupun bukan',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Konsultasi dengan atasan bila ada kendala apa yang belum terselesaikan & follow up tugas yang tidak terselesaikan ke atasan (pagi-siang-sore)',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],

            // Tugas hari jumat
            [
                'title' => 'Cek pengantaran yang belum selesai (pagi / hari sebelumnya)',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Produksi atau pengemasan barang',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Mempersiapkan barang orderan',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek tugas (pertanggal)',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Follow up jadwal kapal',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Kunci Gudang (sore)',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Kebersihan dan kerapian gudang',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek barang sampai pulau (kapan sampai)',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek keadaan kendaraan motor-pickup-lori-engkel-froklip radiator & oli (takutnya berkurang)',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Tulis koli di surat jalan & kemasaan packing (dibuat nama pelanggannya)',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek yang harus di follow up dibuku / yg belum ada penyelesaian & wajib dicatat setiap penyampaian tugas maupun bukan',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Konsultasi dengan atasan bila ada kendala apa yang belum terselesaikan & follow up tugas yang tidak terselesaikan ke atasan (pagi-siang-sore)',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],

            // Tugas hari sabtu
            [
                'title' => 'Cek pengantaran yang belum selesai (pagi / hari sebelumnya)',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Produksi atau pengemasan barang',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Mempersiapkan barang orderan',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek tugas (pertanggal)',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Follow up jadwal kapal',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Kunci Gudang (sore)',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Kebersihan dan kerapian gudang',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek barang sampai pulau (kapan sampai)',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek keadaan kendaraan motor-pickup-lori-engkel-froklip radiator & oli (takutnya berkurang)',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Tulis koli di surat jalan & kemasaan packing (dibuat nama pelanggannya)',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Cek yang harus di follow up dibuku / yg belum ada penyelesaian & wajib dicatat setiap penyampaian tugas maupun bukan',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
            [
                'title' => 'Konsultasi dengan atasan bila ada kendala apa yang belum terselesaikan & follow up tugas yang tidak terselesaikan ke atasan (pagi-siang-sore)',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ],
        ];

        // Mendapatkan tanggal dan bulan saat ini
        $today = Carbon::now()->format('d'); // Mendapatkan tanggal dua digit
        $thisMonth = Carbon::now()->format('m'); // Mendapatkan bulan

        // Tugas yang muncul pada tanggal 1-3 setiap bulan
        if (in_array($today, ['01',  '02', '03'])) {
            $taskgudangbintan[] = [
                'title' => 'Cek expired barang benih',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false, 
                'from_system' => true,
                'role' => 'Gudang Bintan',

            ];
        }

        // Tugas cek stok barang pada bulan 3, 6, 9, 12 dan tanggal 1
        if ($today == '01' && in_array($thisMonth, ['03', '06', '09', '12'])) {
            $taskgudangbintan[] = [
                'title' => 'Cek stok barang',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false, 
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ];
        }

        // Tugas ganti oli pada bulan 1, 4, 7, 10 dan tanggal 5
        if ($today == '05' && in_array($thisMonth, ['01', '04', '07', '10'])) {
            $taskgudangbintan[] = [
                'title' => 'Ganti oli (lori, engkel, hilux)',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false, 
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ];
        }

        // Tugas ganti filter oli dan bersihkan udara pada bulan 1 dan 7 dan tanggal 5
        if ($today == '05' && in_array($thisMonth, ['01', '07'])) {
            $taskgudangbintan[] = [
                'title' => 'Ganti filter oli dan bersihkan udara (lori, engkel, hilux)',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false, 
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ];
        }

        // Tugas cek servis berkala seluruh kondisi kendaraan pada bulan 1 dan 7 dan tanggal 5
        if ($today == '05' && in_array($thisMonth, ['01', '07'])) {
            $taskgudangbintan[] = [
                'title' => 'Cek / service berkala selruruh kondisi kendaraan (lori, engkel, hilux, forklip)',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false, 
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ];
        }

        // Tugas ganti oli dan stel rantai setiap bulan dan tanggal 10
        if ($today == '10') {
            $taskgudangbintan[] = [
                'title' => 'Ganti oli dan stel rantai (revo, supra, vario, dll)',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false, 
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ];
        }

        // Tugas cek & service berkala seluruh kondisi kenadaran bulan 1 dan 7 setiap tanggal 10
        if ($today == '10' && in_array($thisMonth, ['01', '07'])) {
            $taskgudangbintan[] = [
                'title' => 'Ganti oli dan stel rantai (revo, supra, vario, dll)',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false, 
                'from_system' => true,
                'role' => 'Gudang Bintan',
            ];
        }

        // Insert the tasks into the database
        DB::table('tasks')->insert($taskgudangbintan);
    }
}
