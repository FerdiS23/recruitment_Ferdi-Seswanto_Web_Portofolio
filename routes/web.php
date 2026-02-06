<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes (Akses Pengunjung)
|--------------------------------------------------------------------------
*/
Route::get('/', [ProjectController::class, 'indexUser'])->name('users.index');
Route::get('/project/{slug}', [ProjectController::class, 'show'])->name('users.show');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Admin Routes (Hanya untuk User yang Login)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    // Dashboard Utama
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Manajemen Proyek (Resource meliputi: index, create, store, edit, update, destroy)
    Route::resource('project', AdminController::class)->except(['show']);
    
});