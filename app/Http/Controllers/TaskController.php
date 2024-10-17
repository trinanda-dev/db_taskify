<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Mendapatkan semua tugas
    public function index()
    {
        // Memisahkan antara tugas sistem dan tugas user
        // Mengambil tugas dari sistem
        $systemTask = Task::where('from_system', true)->get();

        // Mengambil tugas dari pengguna
        $userTask = Task::where('from_system', false)->get();

        return response()->json([
            'system_task' => $systemTask,
            'user_task' => $userTask,  // Perbaikan dari 'uset_task'
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
            'title' => 'string|max:255',
            'date' => 'date',
            'time' => 'date_format:H:i',
            'completed' => 'boolean',
        ]);

        // Update hanya jika tugas bukan dari sistem
        if(!$task->from_system) {
            $task->update($validated);
            return response()->json($task, 200);
        } else {
            return response()->json(['error' => 'Tugas dari sistem tidak bisa diubah'], 403);
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