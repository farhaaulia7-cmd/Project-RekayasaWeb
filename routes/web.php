<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/profile', [MahasiswaController::class, 'index']);

Route::get('/about', function () {
    return view('page.about');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);