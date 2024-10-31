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

        // Mendapatkan tanggal, bulan, hari, dan minggu saat ini
        $todayDate = Carbon::today()->format('d'); // Hanya tanggal, misalnya "31"
        $todayMonth = Carbon::today()->format('m'); // Hanya bulan, misalnya "10"
        $todayDay = Carbon::now()->format('l'); // Nama hari saat ini, misalnya "Thursday"
        $currentWeek = Carbon::now()->weekOfMonth; // Minggu dalam bulan, misalnya "5"

        // Debugging untuk memastikan variabel tanggal sesuai dengan harapan
        \Log::info("Tanggal Debug:", [
            'todayDate' => $todayDate,
            'todayMonth' => $todayMonth,
            'todayDay' => $todayDay,
            'currentWeek' => $currentWeek,
        ]);

        // Mengambil semua tugas berdasarkan role karyawan yang login, dan pastikan hanya tugas hari ini yang diambil
        $tasks = Task::where('role', $karyawan->role)
            ->where(function($query) use ($todayDate, $todayMonth, $todayDay, $currentWeek) {
                // Filter Tugas Harian berdasarkan hari ini
                $query->where('day', $todayDay)
                    // Atau filter Tugas Pertanggal yang sesuai dengan `show_on_dates`
                    ->orWhereJsonContains('show_on_dates', $todayDate)
                    // Atau filter Tugas yang sesuai dengan Bulan dan Tanggal tertentu
                    ->orWhere(function($q) use ($todayDate, $todayMonth) {
                        $q->whereJsonContains('show_on_dates', $todayDate)
                        ->whereJsonContains('show_on_months', $todayMonth);
                    })
                    // Atau filter Tugas berdasarkan minggu dalam bulan yang cocok dengan `show_on_weeks`
                    ->orWhereJsonContains('show_on_weeks', $currentWeek);
            })
            ->get();

        // Debugging untuk memastikan query mengembalikan data yang diharapkan
        \Log::info("Tasks Query Result", [
            'tasks' => $tasks->toArray(),
        ]);

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

        // Mengambil tugas-tugas yang telah diassign ke karyawan dari tabel TaskAssignment, dengan filter hari ini
        $assignedTasks = TaskAssignment::where('id_karyawan', $karyawan->id_karyawan)
            ->whereHas('task', function ($query) use ($todayDate, $todayDay) {
                $query->where('day', $todayDay)
                    ->orWhereJsonContains('show_on_dates', $todayDate);
            })
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

    public function getWeeklyTasks(Request $request, $id_karyawan)
    {
        // Validasi apakah karyawan dengan ID yang diberikan ada
        $karyawan = Karyawan::where('id_karyawan', $id_karyawan)->first();
        
        if (!$karyawan) {
            return response()->json([
                'status' => 'error',
                'message' => 'Karyawan tidak ditemukan'
            ], 404);
        }

        // Mendapatkan tanggal satu minggu yang lalu
        $oneWeekAgo = Carbon::now()->subDays(7);

        // Mengambil tugas-tugas yang diselesaikan oleh karyawan ini dalam seminggu terakhir
        $tasks = TaskAssignment::where('id_karyawan', $id_karyawan)
            ->where('updated_at', '>=', $oneWeekAgo) // Dalam rentang waktu satu minggu terakhir
            ->with(['task' => function($query) {
                $query->select('id', 'title', 'day'); // Mengambil judul dan hari tugas
            }])
            ->select('task_id', 'completed', 'updated_at') // Mengambil status dan tanggal selesai
            ->get();

        // Menyusun respons dengan data yang dibutuhkan
        $result = $tasks->map(function ($taskAssignment) {
            return [
                'title' => $taskAssignment->task->title,
                'status' => $taskAssignment->completed ? 'Selesai' : 'Tertunda',
                'day' => $taskAssignment->task->day,
                'completed_at' => $taskAssignment->updated_at->format('l, d M Y'), // Format tanggal
            ];
        });

        return response()->json([
            'status' => 'success',
            'data' => $result
        ], 200);
    }

}