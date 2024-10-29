<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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

        // Periksa apakah password cocok dengan yang ada di database
        if (!Hash::check($request->password, $karyawan->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Password salah'
            ], 401);  // 401 = Unauthorized
        }

        // Membuat token untuk autentikasi setelah login
        $token = $karyawan->createToken('auth_token')->plainTextToken;

        // Jika login berhasil, kirim data karyawan beserta token
        return response()->json([
            'status' => 'success',
            'message' => 'Login berhasil',
            'id_karyawan' => $karyawan->id_karyawan,
            'role' => $karyawan->role,
            'token' => $token // Token ini akan digunakan untuk request selanjutnya
        ]);
    }

    public function logout(Request $request)
    {
        // Menghapus token user yang sedang login
        $request->user()->tokens()->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Logout berhasil'
        ]);
    }

    public function loginAdmin(Request $request) 
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

        // Periksa apakah password cocok dengan yang ada di database
        if (!Hash::check($request->password, $karyawan->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Password salah'
            ], 401);  // 401 = Unauthorized
        }

        // Periksa apakaj karyawan memiliki role "Admin"
        if ($karyawan->role !=="IT Support") {
            return response()->json([
                'status' => 'error',
                'message' => 'Anda Tidak Diautorisasi Untuk Masuk Ke Halaman ini'
            ], 403);
        }

        // Membuat token untuk autentikasi setelah login
        $token = $karyawan->createToken('auth_token')->plainTextToken;

        // Jika login berhasil, kirim data karyawan beserta token
        return response()->json([
            'status' => 'success',
            'message' => 'Login berhasil',
            'id_karyawan' => $karyawan->id_karyawan,
            'role' => $karyawan->role,
            'token' => $token // Token ini akan digunakan untuk request selanjutnya
        ]);
    }

    
}