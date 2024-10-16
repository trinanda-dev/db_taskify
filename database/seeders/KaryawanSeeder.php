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
    }
}
