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
            'id_karyawan' => '00000001',
            'nama' => 'Sari',
            'role' => 'Manajemen',
            'password' => '123', //Password tidak di hashing
        ]);


        Karyawan::create([
            'id_karyawan' => '00000003',
            'nama' => 'Nurul',
            'role' => 'Admin Sale', //
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000004',
            'nama' => 'Anis',
            'role' => 'Admin Marketing',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000005',
            'nama' => 'Saris',
            'role' => 'Admin Marketing',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000006',
            'nama' => 'Misi',
            'role' => 'Admin Marketing',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000007',
            'nama' => 'Delvi',
            'role' => 'Admin Pembelian',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000008',
            'nama' => 'Zila',
            'role' => 'Admin Pembelian',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000010',
            'nama' => 'Tata',
            'role' => 'Admin Pembelian',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '000000011',
            'nama' => 'Mala',
            'role' => 'Admin Sale',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000012',
            'nama' => 'Agung',
            'role' => 'Manajemen', //
            'password' => '123', //Password tidak di hashing
        ]);


        Karyawan::create([
            'id_karyawan' => '00000016',
            'nama' => 'Rohmah',
            'role' => 'Admin Marketing',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000017',
            'nama' => 'Siti',
            'role' => 'Admin Sale',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000018',
            'nama' => 'Risda',
            'role' => 'Admin Marketing',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000020',
            'nama' => 'Susan',
            'role' => 'Admin Pembelian',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000022',
            'nama' => 'Dian',
            'role' => 'Toko Tani Makmur',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000023',
            'nama' => 'Adhi',
            'role' => 'Designer',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000025',
            'nama' => 'Tiya',
            'role' => 'Manajemen',
            'password' => '123', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000028',
            'nama' => 'Trinanda',
            'role' => 'IT Support',
            'password' => '123', //Password tidak di hashing
        ]);
    }
}
