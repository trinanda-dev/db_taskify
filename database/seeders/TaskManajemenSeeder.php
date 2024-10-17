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
                'title' => 'Lowongan Kerja',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Penyelesaian catatan pertanyaan setiap bagian kerja & kontrol buku masing-masing',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Kontrol tugas harian dan pertanggal setiap bagian',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Cek penyelesaian tugas pribadi belum selesai hari-har- sebelumnya',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Penyelesaian catatan pertanyaan setiap bagian kerja & kontrol buku masing-masing',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Cek stok error',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Kirim lamaran masuk ke atasan (setiap kali ada chat masuk)',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Follow up stock minus / bermasalah',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Kontrol centang tugas perhari dan semua tugas yang sudah selesai',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Jika tidak selesai (lebih dari 3 hari) pindahkan ke halaman berikutnya',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Absesi izin jam siang',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Penyelesaian kendala / permasalahan orang kerja / sistem',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Wajib dicatat setiap penyampaian baik tugas maupun bukan',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Konsultasi dengan atasan bila ada kendala atau apa yang belum terselesaikan & dan follow up tugas yang tidak terselesaikan ke atasan (pagi, siang, sore)',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Followup balance kas, tugas harian, tugas pertanggal setiap bagian kerja dan pertanyaan yang belum selesai (senin-sabtu)',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Input barang masuk dan barang keluar yang sudah di tanda tangani boss',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Kontrol barang masuk dan barang keluar',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Cek tf kas, kas masuk, dan kas keluarm serta kode perkiraan jangan sampai salah',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Kontrol semua laporan, tidak boleh ada yang tidak isi',
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
                'title' => 'Penyelesaian catatan pertanyaan setiap bagian kerja (kontrol)',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Kontrol tugas harian dan pertanggal setiap bagian kerja (kontrol buku tugas harian)',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Audit stok',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Cek tugas belum selesai, hari-hari sebelumnya (pagi-sore)',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Audit data bagian admin sale',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Cek stok error',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Kirim lamaran masuk ke atasan (setiap kali ada chat masuk)',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Follow up stock minus / bermasalah',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Stock error paket, follow up kak shelly',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Centang buku satu persatu tugas yang sudah selesai dikerjakan (semua bagian kerja)',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Jika tidak selesai (lebih dari 3 hari) pindahkan ke halaman berikutnya',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Absesi izin jam siang',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Penyelesaian kendala / permasalahan orang kerja / sistem',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Wajib dicatat setiap penyampaian baik tugas maupun bukan',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Konsultasi dengan atasan bila ada kendala atau apa yang belum terselesaikan & dan follow up tugas yang tidak terselesaikan ke atasan (pagi, siang, sore)',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Followup balance kas, tugas harian, tugas pertanggal setiap bagian kerja dan pertanyaan yang belum selesai (senin-sabtu)',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Input barang masuk dan barang keluar yang sudah di tanda tangani boss',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Kontrol barang masuk dan barang keluar',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Cek tf kas, kas masuk, dan kas keluarm serta kode perkiraan jangan sampai salah',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
            ],
            [
                'title' => 'Kontrol semua laporan, tidak boleh ada yang tidak isi',
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