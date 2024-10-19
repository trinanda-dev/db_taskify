<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return 'Login route is not neede for API, please authenticate using api routes.';
})->name('login');
