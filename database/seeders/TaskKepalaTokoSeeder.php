<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TaskKepalaTokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $taskkepalatoko = [];
        $taskkepalatoko[] = [
            // Tugas hari senin
            [
                'title' => 'Penyelesaian complain & saran',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol tugas harian & pertanggal setiap toko',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Penyelesaian tugas pertanyaan / lainnya belum selesai hari-hari sebelumnya (pagi-sore) dan wajib di catat setiap penyampaian tugas maupun bukan',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol tugas harian setiap toko',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Follow up barang kosong / barang baru ke pembelian',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Meeting dengan manajer (estimasi senin pagi)',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol ekspor dan impor data toko (sebelum jam 08:00)',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Fokuskan penjulan ke benih yang hampir mencapai expired',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Mencari konsumen baru',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Konsultasi dengan atasan bila ada kendala / lainnya yang belum terselesaikan dan follow up tugas yang tidak terselesaikan ke atasan',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol tugas data konsumen di toko / kebun setiap sore',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol stok toko',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol online via wa',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Cek yang harus di follow up dibuku / yang belum ada penyelesaian & wajib di catat  setiap penyampain tugas maupun bukan',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol cctv',
                'date' => Carbon::now()->next('Monday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],

            // Tugas hari Selasa
            [
                'title' => 'Penyelesaian complain & saran',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol tugas harian & pertanggal setiap toko',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Penyelesaian tugas pertanyaan / lainnya belum selesai hari-hari sebelumnya (pagi-sore) dan wajib di catat setiap penyampaian tugas maupun bukan',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol tugas harian setiap toko',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Follow up barang kosong / barang baru ke pembelian',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Meeting dengan manajer (estimasi senin pagi)',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol ekspor dan impor data toko (sebelum jam 08:00)',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Fokuskan penjulan ke benih yang hampir mencapai expired',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Mencari konsumen baru',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Konsultasi dengan atasan bila ada kendala / lainnya yang belum terselesaikan dan follow up tugas yang tidak terselesaikan ke atasan',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol toko (setiap selasa)',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Perhatikan produk yang layak & tidak layak dijual',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Benih exp (setiap 6-8 bulan) konfirmasi gudang',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Setiap hari selasa turun toko cek benih exp yang 6-8 bulan tukar ke gudang konfirmasi dengan Bang Ali, antar kembali benih tiap kamis, titip ke zul',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol stok toko',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Bawa uang pecahan untuk di toko-toko',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol online (via wa)',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol offline (turun langsung ke toko-toko)',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Control cctv',
                'date' => Carbon::now()->next('Tuesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],

            // Tugas hari Rabu
            [
                'title' => 'Penyelesaian complain & saran',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol tugas harian & pertanggal setiap toko',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Penyelesaian tugas pertanyaan / lainnya belum selesai hari-hari sebelumnya (pagi-sore) dan wajib di catat setiap penyampaian tugas maupun bukan',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol tugas harian setiap toko',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Follow up barang kosong / barang baru ke pembelian',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Meeting dengan manajer (estimasi senin pagi)',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol ekspor dan impor data toko (sebelum jam 08:00)',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Fokuskan penjulan ke benih yang hampir mencapai expired',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Mencari konsumen baru',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Konsultasi dengan atasan bila ada kendala / lainnya yang belum terselesaikan dan follow up tugas yang tidak terselesaikan ke atasan',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol stok toko',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol online (via wa)',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Control cctv',
                'date' => Carbon::now()->next('Wednesday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],

            // Tugas hari Kamis
            [
                'title' => 'Kontrol lapangan',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Penyelesaian complain & saran',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol tugas harian & pertanggal setiap toko',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Penyelesaian tugas pertanyaan / lainnya belum selesai hari-hari sebelumnya (pagi-sore) dan wajib di catat setiap penyampaian tugas maupun bukan',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol tugas harian setiap toko',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Follow up barang kosong / barang baru ke pembelian',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Meeting dengan manajer (estimasi senin pagi)',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol ekspor dan impor data toko (sebelum jam 08:00)',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Fokuskan penjulan ke benih yang hampir mencapai expired',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Mencari konsumen baru',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Konsultasi dengan atasan bila ada kendala / lainnya yang belum terselesaikan dan follow up tugas yang tidak terselesaikan ke atasan',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol stok toko',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol online (via wa)',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Cek yang harus di follow up di buku / yang belum ada penyelesaian & wajib di catat setiap penyampaian tugas maupun bukan',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Control cctv',
                'date' => Carbon::now()->next('Thursday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],

            // Tugas hari Jumat
            [
                'title' => 'Penyelesaian complain & saran',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol tugas harian & pertanggal setiap toko',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Penyelesaian tugas pertanyaan / lainnya belum selesai hari-hari sebelumnya (pagi-sore) dan wajib di catat setiap penyampaian tugas maupun bukan',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol tugas harian setiap toko',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Follow up barang kosong / barang baru ke pembelian',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol ekspor dan impor data toko (sebelum jam 08:00)',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Fokuskan penjulan ke benih yang hampir mencapai expired',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Mencari konsumen baru',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Konsultasi dengan atasan bila ada kendala / lainnya yang belum terselesaikan dan follow up tugas yang tidak terselesaikan ke atasan',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol stok toko',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol online (via wa)',
                'date' => Carbon::now()->next('Friday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],

            // Tugas hari Sabtu
            [
                'title' => 'Penyelesaian complain & saran',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol tugas harian & pertanggal setiap toko',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Penyelesaian tugas pertanyaan / lainnya belum selesai hari-hari sebelumnya (pagi-sore) dan wajib di catat setiap penyampaian tugas maupun bukan',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol tugas harian setiap toko',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Follow up barang kosong / barang baru ke pembelian',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol ekspor dan impor data toko (sebelum jam 08:00)',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Fokuskan penjulan ke benih yang hampir mencapai expired',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Mencari konsumen baru',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Konsultasi dengan atasan bila ada kendala / lainnya yang belum terselesaikan dan follow up tugas yang tidak terselesaikan ke atasan',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol stok toko',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
            [
                'title' => 'Kontrol online (via wa)',
                'date' => Carbon::now()->next('Saturday')->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role'  => 'Kepala Toko',
            ],
        ];

        // Memperoleh tanggal saat ini dan bulan saat ini
        $today = Carbon::now()->format('d'); // Mendapatkan tanggal saat ini
        $thisMonth = Carbon::now()->format('m'); // Mendapatkan bulan saat ini
        $weekOfMonth = carbon::now()->weekOfMonth; // Mendapattkan minggu ke berapa ini dalam bulan
        $dayOfWeek = Carbon::now()->dayOfWeek; // 3 = Rabu

        // Tugas audit jakarta setiap Minggu ke 4 pada bulan 2, 5, 8, 11
        if ($weekOfMonth == 4 && in_array($thisMonth, ['02', '05', '08', '11'])) {
            $taskkepalatoko[] = [
                'title' => 'Audit Jakarta (Gudang) alat dan benih',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false, 
                'from_system' => true,
                'role' => 'Kepala Toko',
            ];
        }

        // Tugas audit Tani Mas pada Rabu Minggu ke-2 (setiap bulan)
        if ($dayOfWeek == Carbon::WEDNESDAY && $weekOfMonth == 2) {
            $taskkepalatoko[] = [
                'title' => 'Audit Tani Mas',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Kepala Toko',
            ];
        }

        // Tugas audit Tani Makmur pada Rabu Minggu ke-3 (setiap bulan)
        if ($dayOfWeek == Carbon::WEDNESDAY && $weekOfMonth == 3) {
            $taskkepalatoko[] = [
                'title' => 'Audit Tani Makmur',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Kepala Toko',
            ];
        }

        // Tugas Audit Bintan (Gudang) - Alat (Senin/Selasa di Minggu ke-1 setiap bulan)
        if (in_array($dayOfWeek, [Carbon::MONDAY, Carbon::TUESDAY]) && $weekOfMonth == 1) {
            $taskgudangbintan[] = [
                'title' => 'Audit Bintan (Gudang) - Alat',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Kepala Toko',
            ];
        }

        // Tugas Audit Bintan (Gudang) - Benih & Pupuk (Senin/Selasa di Minggu ke-2 setiap bulan)
        if (in_array($dayOfWeek, [Carbon::MONDAY, Carbon::TUESDAY]) && $weekOfMonth == 2) {
            $taskgudangbintan[] = [
                'title' => 'Audit Bintan (Gudang) - Benih & Pupuk',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Kepala Toko',
            ];
        }

        // Tugas Audit Bintan (Gudang) - Pestisida (Senin/Selasa di Minggu ke-3 dengan syarat tanggal 1-25 pada bulan 3, 6, 9, 12)
        if (
            in_array($dayOfWeek, [Carbon::MONDAY, Carbon::TUESDAY]) && 
            $weekOfMonth == 3 && 
            $today >= 1 && $today <= 25 && 
            in_array($thisMonth, ['03', '06', '09', '12'])
        ) {
            $taskgudangbintan[] = [
                'title' => 'Audit Bintan (Gudang) - Pestisida',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Kepala Toko',
            ];
        }

        // Tugas audit Tani Mandiri pada Rabu Minggu ke-4 (setiap bulan)
        if ($dayOfWeek == Carbon::WEDNESDAY && $weekOfMonth == 4) {
            $taskkepalatoko[] = [
                'title' => 'Audit Tani Mandiri',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Kepala Toko',
            ];
        }

        // Tugas audit Tani Maju pada Rabu Minggu ke-4 (setiap bulan)
        if ($dayOfWeek == Carbon::WEDNESDAY && $weekOfMonth == 1) {
            $taskkepalatoko[] = [
                'title' => 'Audit Tani Maju',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Kepala Toko',
            ];
        }

        // Tugas Audit Batam pada Jumat Minggu ke-3 di bulan 1, 4, 7, 10
        if ($dayOfWeek == Carbon::FRIDAY && $weekOfMonth == 3 && in_array($thisMonth, ['01', '04', '07', '10'])) {
            $taskbatam[] = [
                'title' => 'Audit Batam',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Kepala Toko',
            ];
        }

        // Tugas audit Tani Maju pada Rabu Minggu ke-4 (setiap bulan)
        if ($dayOfWeek == Carbon::THURSDAY && $weekOfMonth == 4) {
            $taskkepalatoko[] = [
                'title' => 'Audit Sukses Tani',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => '08:00:00',
                'completed' => false,
                'from_system' => true,
                'role' => 'Kepala Toko',
            ];
        }

        // Insert the tasks into the database
        DB::table('tasks')->insert($taskkepalatoko);
    }
}
