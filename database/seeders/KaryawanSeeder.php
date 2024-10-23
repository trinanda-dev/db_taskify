<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Karyawan::create([
            'id_karyawan' => '0000000001',
            'nama' => 'Joko Wijaya',
            'role' => 'Manajemen',
            'password' => '123', //Password tidak di hashing
        ]);


        Karyawan::create([
            'id_karyawan' => '0000000002',
            'nama' => 'JokoPra',
            'role' => 'Manajemen',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '0000000003',
            'nama' => 'ProJo',
            'role' => 'Admin Marketing',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '0000000004',
            'nama' => 'Ganjar Baswedan',
            'role' => 'Admin Marketing',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '0000000005',
            'nama' => 'Anis Rakabuming',
            'role' => 'Admin Sale',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '0000000006',
            'nama' => 'Fufufafa',
            'role' => 'Admin Sale',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '0000000007',
            'nama' => 'Kaesang Mulyono',
            'role' => 'Kepala Toko',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '0000000008',
            'nama' => 'Mulyono',
            'role' => 'Kepala Toko',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '0000000009',
            'nama' => 'Rasyid Anis',
            'role' => 'Gudang Jakarta',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '0000000010',
            'nama' => 'Prabowo Baswedan',
            'role' => 'Gudang Jakarta',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '0000000011',
            'nama' => 'Prabroro',
            'role' => 'Gudang Bintan',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '0000000012',
            'nama' => 'Prabroro Mulyono',
            'role' => 'Gudang Bintan',
            'password' => '123', //Password tidak di hashing
        ]);


    }
}
