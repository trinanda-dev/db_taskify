<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Carbon\Carbon; // Pastikan untuk mengimpor Carbon

class TaskController extends Controller
{
    // Mendapatkan semua tugas untuk hari ini
    public function index() 
    {
        // Mendapatkan tanggal hari ini
        $today = Carbon::today()->format('Y-m-d');

        // Mengambil tugas dari sistem dan user yang hanya untuk hari ini
        $systemTask = Task::where('from_system', true)
            ->whereDate('date', $today)
            ->orderBy('completed', 'asc') // Tugas belum selesai dulu
            ->get();

        $userTask = Task::where('from_system', false)
            ->whereDate('date', $today)
            ->orderBy('completed', 'asc') // Tugas belum selesai dulu
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => [
                'system_task' => $systemTask,
                'user_task' => $userTask,
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

        // Tugas dari user, jadi from_system false
        $validated['from_system'] = false;

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

        // Jika tugas dari sistem, hanya bisa mengubah status completed
        if ($task->from_system) {
            // Hanya izinkan perubahan pada field 'completed'
            if (isset($validated['completed'])) {
                $task->update(['completed' => $validated['completed']]);
                return response()->json($task, 200);
            } else {
                return response()->json(['error' => 'Hanya status completed yang bisa diubah untuk tugas dari sistem'], 403);
            }
        }

        // Jika tugas dari user, izinkan semua field diupdate
        if (!empty($validated)) {
            $task->update($validated);
            return response()->json($task, 200);
        } else {
            return response()->json(['error' => 'Tidak ada data yang diubah'], 400); // Perbaiki pesan error
        }
    }

    // Menghapus tugas
    public function destroy(Task $task)
    {
        // Cek apakah tugas dari sistem, jika ya, cegah penghapusan
        if ($task->from_system) {
            return response()->json([
                'error' => 'Tugas bawaan dari sistem tidak bisa dihapus'
            ], 403);
        }

        // Jika bukan dari sistem, lanjutkan penghapusan
        $task->delete();

        return response()->json(null, 204);
    }
}