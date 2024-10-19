<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use App\Models\Task; // Pastikan Anda punya model Task
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    // Mendapatkan data karyawan berdasarkan ID
    public function getKaryawanData($id)
    {
        // Ambil data karyawan berdasarkan ID
        $karyawan = Karyawan::find($id);

        if (!$karyawan) {
            return response()->json([
                'status' => 'error',
                'message' => 'Karyawan tidak ditemukan'
            ], 404);
        }

        // Mengambil jumlah tugas yang selesai dan gagal
        $completedTasks = Task::where('id_karyawan', $id)->where('completed', true)->count();
        $failedTasks = Task::where('id_karyawan', $id)->where('completed', false)->count();

        return response()->json([
            'status' => 'success',
            'data' => [
                'id_karyawan' => $karyawan->id_karyawan,
                'nama' => $karyawan->nama,
                'role' => $karyawan->role,
                'completed_tasks' => $completedTasks,
                'failed_tasks' => $failedTasks
            ]
        ]);
    }
}