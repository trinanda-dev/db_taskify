<?php

use App\Http\Controllers\Api\LoginController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware(Authenticate::using('sanctum'));

//login
Route::post('/login', [LoginController::class, 'login']);

//tasks
Route::get('/tasks', [TaskController::class, 'index']); // Mendapatkan semua tugas
Route::post('/tasks', [TaskController::class, 'store']); // Menambah tugas baru
Route::put('/tasks/{task}', [TaskController::class, 'update']); // Update tugas
Route::delete('/tasks/{task}', [TaskController::class, 'destroy']); // Hapus tugas