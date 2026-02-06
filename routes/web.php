<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

// Halaman depan untuk Pengunjung (User)
Route::get('/', [ProjectController::class, 'indexUser'])->name('users.index');

// Grup Admin
Route::prefix('admin')->name('admin.')->group(function () {
    // Satu Resource ini sudah otomatis membuat rute:
    // admin.project.index, admin.project.create, admin.project.store, dll.
    Route::resource('project', ProjectController::class);
    
    // Dashboard utama admin (opsional jika ingin dipisah dari resource index)
    Route::get('/', [ProjectController::class, 'index'])->name('dashboard');
    Route::get('/project/create', [ProjectController::class, 'create'])
    ->name('project.create');

    
});