<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request) 
    {
        // Validasi input
        $request->validate([
            'id_karyawan' => 'required|string',
            'password' => 'required|string'
        ]);

        // Mencari karyawan berdasarkan ID karyawan
        $karyawan = Karyawan::where('id_karyawan', $request->id_karyawan)->first();

        // Cek apakah karyawan ditemukan
        if (!$karyawan) {
            return response()->json([
                'status' => 'error',
                'message' => 'ID Karyawan tidak ditemukan'
            ], 404);  // Mengembalikan response jika karyawan tidak ditemukan
        }

        // Debugging: Periksa apakah password yang dikirimkan cocok dengan yang ada di database
        if (!Hash::check($request->password, $karyawan->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Password salah',
                'debug' => [
                    'password_input' => $request->password,
                    'password_hash' => $karyawan->password,
                    'password_match' => Hash::check($request->password, $karyawan->password)
                ]
            ], 401);  // 401 = Unauthorized
        }

        // Jika login berhasil, kirim data karyawan (misal role)
        return response()->json([
            'status' => 'success',
            'message' => 'Login berhasil',
            'role' => $karyawan->role,
        ]);
    }


    // public function login(Request $request) 
    // {
    //     // Validasi input
    //     $request->validate([
    //         'id_karyawan' => 'required|string',
    //         'password' => 'required|string'
    //     ]);

    //     // Mencari karyawan berdasarkan ID karyawan
    //     $karyawan = Karyawan::where('id_karyawan', $request->id_karyawan)->first();

    //     // Cek apakah karyawan ditemukan
    //     if (!$karyawan) {
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'ID Karyawan tidak ditemukan'
    //         ], 404);
    //     }

    //     // Debugging: Periksa apakah password yang dikirimkan cocok dengan yang ada di database
    //     if (!Hash::check($request->password, $karyawan->password)) {
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'Password salah',
    //             'debug' => [
    //                 'password_input' => $request->password,
    //                 'password_hash' => $karyawan->password,
    //                 'password_match' => Hash::check($request->password, $karyawan->password)
    //             ]
    //         ], 401);
    //     }

    //     // Jika login berhasil, kirim data karyawan (misal role)
    //     return response()->json([
    //         'status' => 'success',
    //         'message' => 'Login berhasil',
    //         'role' => $karyawan->role,
    //     ]);
    // }
}