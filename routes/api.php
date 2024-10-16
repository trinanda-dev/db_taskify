<?php

use App\Http\Controllers\Api\LoginController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware(Authenticate::using('sanctum'));

//login
Route::post('/login', [LoginController::class, 'login']);