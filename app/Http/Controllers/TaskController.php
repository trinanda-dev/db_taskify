<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TaskAssignment;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TaskController extends Controller
{
    // Mendapatkan semua tugas untuk hari ini
    public function index(Request $request) 
    {
        // Mendapatkan karyawan yang sedang login
        $karyawan = $request->user(); // Pastikan menggunakan Sanctum atau token untuk autentikasi

        // Mendapatkan tanggal hari ini
        $today = Carbon::today()->format('Y-m-d');

        // Mengambil semua tugas yang terkait dengan role "Manajemen" dan untuk hari ini
        $tasks = Task::where('role', 'Manajemen')
                    ->whereDate('date', $today)
                    ->get();
        
        // Pisahkan tugas berdasarkan sumber
        $systemTask = $tasks->where('from_system', true); // Tugas dari sistem
        $userTask = $tasks->where('from_system', false); // Tugas dari user

        // Periksa status penyelesaian tugas untuk karyawan yang sedang login
        foreach ($tasks as $task) {
            $assignment = TaskAssignment::where('task_id', $task->id)
                                        ->where('id_karyawan', $karyawan->id_karyawan)
                                        ->first();

            // Update status 'completed' berdasarkan assignment untuk karyawan ini
            $task->completed = $assignment ? $assignment->completed : false;
        }

        // Kembalikan respons dengan struktur yang benar, meskipun tugas kosong
        return response()->json([
            'status' => 'success',
            'data' => [
                'system_task' => $systemTask->values(), // Jika kosong, tetap dikembalikan
                'user_task' => $userTask->values(), //Jika kosong tetap dikembalikan
            ]
        ], 200);
    }

    // Menambah tugas baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'completed' => 'boolean',
        ]);

        // Set tugas dari sistem
        $validated['from_system'] = false;
        $validated['role'] = 'Manajemen'; // Atur role ke Manajemen

        $task = Task::create($validated);

        return response()->json($task, 201);
    }

    // Mengupdate tugas
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'date' => 'sometimes|date',
            'time' => 'sometimes|date_format:H:i',
            'completed' => 'sometimes|boolean',
        ]);

        // Jika tugas dari sistem, hanya bisa mengubah status 'completed'
        if ($task->from_system) {
            if (isset($validated['completed'])) {
                try {
                    $task->update(['completed' => $validated['completed']]);
                } catch (\Exception $e) {
                    return response()->json(['error' => 'Gagal mengupdate status tugas'], 500);
                }

                return response()->json($task, 200);
            } else {
                return response()->json(['error' => 'Hanya status completed yang bisa diubah untuk tugas dari sistem'], 403);
            }
        }

        // Jika tugas dari user, izinkan semua field diupdate
        if (!empty($validated)) {
            try {
                $task->update($validated);
            } catch (\Exception $e) {
                return response()->json(['error' => 'Gagal mengupdate tugas'], 500);
            }

            return response()->json($task, 200);
        } else {
            return response()->json(['error' => 'Tidak ada data yang diubah'], 400);
        }
    }

    // Menghapus tugas
    public function destroy(Task $task)
    {
        if ($task->from_system) {
            return response()->json(['error' => 'Tugas bawaan dari sistem tidak bisa dihapus'], 403);
        }

        $task->delete();

        return response()->json(null, 204);
    }

    // Mengupdate status task berdasarkan karyawan (dengan task_assignments)
    // Masih ada yang kurang
    // Masih ada yang kurang
    // Masih ada yang kurang
    public function updateTaskStatus(Request $request, Task $task) 
    {
        // Validasi input
        $validated = $request->validate([
            'completed' => 'required|boolean',
            'id_karyawan' => 'required|string|exists:karyawans,id_karyawan'
        ]);

        // Cari assignment tugas untuk karyawan ini
        $assignment = TaskAssignment::where('task_id', $task->id)
                                    ->where('id_karyawan', $validated['id_karyawan'])
                                    ->first();

        if ($assignment) {
            // Update status jika assignment sudah ada
            $assignment->update(['completed' => $validated['completed']]);
        } else {
            // Buat assignment baru jika belum ada
            TaskAssignment::create([
                'task_id' => $task->id,
                'id_karyawan' => $validated['id_karyawan'],
                'completed' => $validated['completed'],
            ]);
        }

        // Cek apakah entri task_assignment berhasil dibuat atau diperbaharui
        $new_assignment = TaskAssignment::where('task_id', $task->id)
                                        ->where('id_karyawan', $validated['id_karyawan'])
                                        ->first();
        
        // Jika assignment berhasil dibuat, kembalikan respons sukses
        if ($new_assignment) {
            return response()->json([
                'status' => 'succes',
                'message' => 'Task status updated by' .$validated['id_karyawan'],
                'task' => $task
            ], 200);
        } else {
            // Jika gagal. kembalikan pesan error
            return response()->json([
                'status' => 'error',
                'message' => 'Gagal menyimpan status completed ke dalam task_assignment',
            ], 500);
        }
    }

    // Mendapatkan data dashboard
    public function getDashboardData($id)
    {
        $karyawan = Karyawan::where('id_karyawan', $id)->first();

        // Hitung tugas yang selesai oleh karyawan ini
        $completedTasks = TaskAssignment::where('id_karyawan', $id)
                                        ->where('completed', true)
                                        ->count();

        // Hitung tugas yang belum selesai oleh karyawan ini
        $incompleteTasks = TaskAssignment::where('id_karyawan', $id)
                                         ->where('completed', false)
                                         ->count();

        return response()->json([
            'nama' => $karyawan->nama,
            'role' => $karyawan->role,
            'tugas_selesai' => $completedTasks,
            'tugas_belum_selesai' => $incompleteTasks
        ], 200);
    }
}