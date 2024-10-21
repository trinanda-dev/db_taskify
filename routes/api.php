<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Login dan Logout
Route::post('/login', [LoginController::class, 'login']); // Login user
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth:sanctum'); // Logout user, dilindungi dengan middleware

// Semua route yang membutuhkan autentikasi dengan Sanctum
Route::middleware('auth:sanctum')->group(function () {
    // Tasks
    Route::get('/tasks', [TaskController::class, 'index']); // Mendapatkan semua tugas
    Route::post('/tasks', [TaskController::class, 'store']); // Menambah tugas baru
    // Route::put('/tasks/{task}', [TaskController::class, 'update']); // Update tugas
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy']); // Hapus tugas

    // Update status task dan kirimkan id_karyawan
    Route::put('/tasks/{task}/update-status', [TaskController::class, 'updateTaskStatus']);

    // Get tasks yang sudah di update
    Route::get('/tasks-updated', [TaskController::class, 'getUpdatedTasks']);

    // Get dashboard data berdasarkan ID karyawan
    Route::get('/karyawan/dashboard', [TaskController::class, 'getDashboardData']);
});