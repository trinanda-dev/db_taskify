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
            'password' => 'Manajemen001', //Password tidak di hashing
        ]);


        Karyawan::create([
            'id_karyawan' => '00000003',
            'nama' => 'Nurul',
            'role' => 'Admin Sale', //
            'password' => 'Adminsale003', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000004',
            'nama' => 'Anis',
            'role' => 'Admin Marketing',
            'password' => 'Adminmarketing004', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000005',
            'nama' => 'Saris',
            'role' => 'Admin Marketing',
            'password' => 'Adminmarketing005', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000006',
            'nama' => 'Misi',
            'role' => 'Admin Marketing',
            'password' => 'Adminmarketing006', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000007',
            'nama' => 'Delvi',
            'role' => 'Admin Pembelian',
            'password' => 'Adminpembelian007', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000008',
            'nama' => 'Zila',
            'role' => 'Admin Pembelian',
            'password' => 'Adminpembelian008', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000009',
            'nama' => 'Haniya',
            'role' => 'Admin Sale',
            'password' => 'Adminpembelian009', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000010',
            'nama' => 'Tata',
            'role' => 'Admin Pembelian',
            'password' => 'Adminpembelian010', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '000000011',
            'nama' => 'Mala',
            'role' => 'Admin Sale',
            'password' => 'Adminsale011', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000012',
            'nama' => 'Agung',
            'role' => 'Manajemen', //
            'password' => 'Adminmanajemen012', //Password tidak di hashing
        ]);


        Karyawan::create([
            'id_karyawan' => '00000016',
            'nama' => 'Rohmah',
            'role' => 'Admin Marketing',
            'password' => 'Adminmarketing016', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000017',
            'nama' => 'Siti',
            'role' => 'Admin Sale',
            'password' => 'Adminsale017', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000018',
            'nama' => 'Risda',
            'role' => 'Admin Marketing',
            'password' => 'Adminmarketing018', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000020',
            'nama' => 'Susan',
            'role' => 'Admin Pembelian',
            'password' => 'Adminpembelian020', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000022',
            'nama' => 'Dian',
            'role' => 'Toko Tani Makmur',
            'password' => 'Tokotanimakmur022', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000023',
            'nama' => 'Adhi',
            'role' => 'Designer',
            'password' => 'Designer023', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000024',
            'nama' => 'Wani',
            'role' => 'Admin Marketing',
            'password' => 'Adminmarketing024', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000025',
            'nama' => 'Tiya',
            'role' => 'Manajemen',
            'password' => 'Manajemen025', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000028',
            'nama' => 'Trinanda',
            'role' => 'IT Support',
            'password' => 'Itsupport028', //Password tidak di hashing
        ]);

        Karyawan::create([
            'id_karyawan' => '00000029',
            'nama' => 'Jhonny',
            'role' => 'IT Support',
            'password' => 'Mja029', //Password tidak di hashing
        ]);
    }
}
