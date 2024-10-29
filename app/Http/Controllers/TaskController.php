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
        $karyawan = $request->user();

        // Mendapatkan tanggal, bulan, dan minggu saat ini
        $todayDate = Carbon::today()->format('d'); // Hanya tanggal
        $todayMonth = Carbon::today()->format('m'); // Hanya bulan
        $currentWeek = Carbon::now()->weekOfMonth; // Minggu dalam bulan

        // Mengambil semua tugas berdasarkan role karyawan yang login
        $tasks = Task::where('role', $karyawan->role)
                    ->where(function($query) use ($todayDate, $todayMonth, $currentWeek) {
                        // Tugas Harian: Berdasarkan hari tertentu
                        $query->where('day', Carbon::now()->format('l')); // Contoh: "Monday"

                        // Tugas Pertanggal: Berdasarkan `show_on_dates`
                        $query->orWhereJsonContains('show_on_dates', $todayDate);

                        // Tugas dengan Bulan Tertentu: Berdasarkan `show_on_dates` dan `show_on_months`
                        $query->orWhere(function($q) use ($todayDate, $todayMonth) {
                            $q->whereJsonContains('show_on_dates', $todayDate)
                            ->whereJsonContains('show_on_months', $todayMonth);
                        });

                        // Tugas pada Minggu Tertentu: Berdasarkan `show_on_weeks`
                        $query->orWhereJsonContains('show_on_weeks', $currentWeek);
                    })
                    ->get();

        // Iterasi setiap tugas untuk dimasukkan ke `task_assignments` jika belum ada
        foreach ($tasks as $task) {
            $existingAssignment = TaskAssignment::where('task_id', $task->id)
                                                ->where('id_karyawan', $karyawan->id_karyawan)
                                                ->first();
            if (!$existingAssignment) {
                TaskAssignment::create([
                    'task_id' => $task->id,
                    'id_karyawan' => $karyawan->id_karyawan,
                    'completed' => false, // Default belum selesai
                ]);
            }
        }

        // Mengambil tugas-tugas yang telah diassign ke karyawan dari tabel TaskAssignment
        $assignedTasks = TaskAssignment::where('id_karyawan', $karyawan->id_karyawan)
                                    ->with('task') // Mengambil detail tugas dari Task
                                    ->select('id', 'task_id', 'completed')
                                    ->get();

        // Pisahkan tugas berdasarkan sumber
        $systemTask = $assignedTasks->where('task.from_system', true);
        $userTask = $assignedTasks->where('task.from_system', false);

        // Kembalikan respons dengan struktur yang benar
        return response()->json([
            'status' => 'success',
            'data' => [
                'system_task' => $systemTask->values(),
                'user_task' => $userTask->values(),
            ]
        ], 200);
    }


    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'nullable|date', // Tanggal opsional
            'day' => 'nullable|string', // Untuk tugas harian
            'time' => 'required',
            'completed' => 'boolean',
            'show_on_dates' => 'nullable|array', // Harus berupa array jika diberikan
            'show_on_dates.*' => 'string', // Setiap item di dalam show_on_dates harus berupa string
            'show_on_months' => 'nullable|array', // Harus berupa array jika diberikan
            'show_on_months.*' => 'string' // Setiap item di dalam show_on_months harus berupa string
        ]);

        // Mendapatkan karyawan yang sedang login
        $karyawan = $request->user();

        // Set nilai `from_system` dan `role` sesuai dengan karyawan yang sedang login
        $validated['from_system'] = false;
        $validated['role'] = $karyawan->role;

        // Encode `show_on_dates` dan `show_on_months` jika disediakan
        if (isset($validated['show_on_dates'])) {
            $validated['show_on_dates'] = json_encode($validated['show_on_dates']);
        } else {
            $validated['show_on_dates'] = null;
        }

        if (isset($validated['show_on_months'])) {
            $validated['show_on_months'] = json_encode($validated['show_on_months']);
        } else {
            $validated['show_on_months'] = null;
        }

        // Buat tugas baru di tabel `tasks`
        $task = Task::create($validated);

        // Buat entri di `task_assignments` untuk karyawan yang menambah tugas ini
        TaskAssignment::create([
            'task_id' => $task->id,
            'id_karyawan' => $karyawan->id_karyawan,
            'completed' => false // Set default completed ke false
        ]);

        return response()->json($task, 201);
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
    public function updateTaskStatus(Request $request, Task $task) 
{
    // Mendapatkan user yang sedang login
    $karyawan = $request->user(); // Ambil karyawan yang login

    // Validasi input
    $validated = $request->validate([
        'completed' => 'required|boolean',
        'id_karyawan' => 'required|string|exists:karyawans,id_karyawan'
    ]);

    // Pastikan karyawan yang sedang login hanya bisa mengubah tugas miliknya
    if ($validated['id_karyawan'] != $karyawan->id_karyawan) {
        return response()->json([
            'status' => 'error',
            'message' => 'Anda tidak diizinkan untuk mengubah tugas orang lain.'
        ], 403); // 403 Forbidden
    }

    // Cari assignment tugas untuk karyawan yang sedang login
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
            'status' => 'success',
            'message' => 'Task status updated for karyawan ' . $validated['id_karyawan'],
            'task' => [
                'id' => $task->id,
                'title' => $task->title,
                'completed' => $new_assignment->completed, // Ambil status dari TaskAssignment
                'date' => $task->date,
                'time' => $task->time,
                'role' => $task->role,
            ]
        ], 200);
    } else {
        // Jika gagal, kembalikan pesan error
        return response()->json([
            'status' => 'error',
            'message' => 'Gagal menyimpan status completed ke dalam task_assignment',
        ], 500);
    }
}
    // Mendapatkan data dashboard untuk admin aplikasi
    public function getDashboardData()
    {
        // Ambil semua karyawan dari database
        $karyawans = Karyawan::all();

        $dashboardData = [];

        // Dapatkan tanggal hari ini
        $today = Carbon::today();

        foreach ($karyawans as $karyawan) {
            // Filter tugas berdasarkan role karyawan
            $completedTasks = TaskAssignment::where('id_karyawan', $karyawan->id_karyawan)
                                            ->where('completed', true)
                                            ->whereDate('updated_at', $today)
                                            ->count();

            $incompleteTasks = TaskAssignment::where('id_karyawan', $karyawan->id_karyawan)
                                            ->where('completed', false)
                                            ->whereDate('updated_at', $today)
                                            ->count();

            $dashboardData[] = [
                'nama' => $karyawan->nama,
                'role' => $karyawan->role,
                'tugas_selesai' => $completedTasks,
                'tugas_belum_selesai' => $incompleteTasks,
            ];
        }

        return response()->json([
            'status' => 'success',
            'data' => $dashboardData,
        ], 200);
    }


    // Mendapatkan data dashboard untuk karyawan per id
    public function getDashboardKaryawanById($id) 
    {
        $karyawan = Karyawan::where('id_karyawan', $id)->first();

        if(!$karyawan) {
            return response()-> json([
                'error' => 'Karyawan tidak ditemukan'
            ], 404);
        }

        // Dapatkan tanggal hari ini
        $today = Carbon::today();

        // Hitung tugas yang diselesaikan oleh karyawan ini
        $completedTasks = TaskAssignment::where('id_karyawan', $id)
                                    ->where('completed', true)
                                    ->whereDate('updated_at', $today)
                                    ->count();
        
        // Hitung tugas yang belum diselesaikan oleh karyawan ini
        $incompleteTasks = TaskAssignment::where('id_karyawan', $id)
                                    ->where('completed', false)
                                    ->whereDate('created_at', $today)
                                    ->count();
        
        return response()->json([
            'tugas_selesai' => $completedTasks,
            'tugas_belum_selesai' => $incompleteTasks

        ], 200);
    }
}