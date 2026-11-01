<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AdminProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/profile', [MahasiswaController::class, 'index']);
Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');

Route::get('/about', function () {
    return view('page.about');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('home');

    Route::get('/projects', [AdminProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [AdminProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects', [AdminProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/{id}/edit', [AdminProjectController::class, 'edit'])->name('projects.edit');
    Route::post('/projects/{id}', [AdminProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{id}', [AdminProjectController::class, 'destroy'])->name('projects.destroy');
});