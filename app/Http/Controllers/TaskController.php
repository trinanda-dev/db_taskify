<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Mendapatkan semua tugas
    public function index()
    {
        return response()->json(Task::all(), 200);
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

        $task->update($validated);

        return response()->json($task, 200);
    }

    // Menghapus tugas
    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json(null, 204);
    }
}

