<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GrafikController;
use App\Http\Controllers\RefleksiController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('layouts.landing');
});

Route::get('/auth', function () {
    return view('auth.auth');
})->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Google OAuth Routes
Route::get('/auth/google', [App\Http\Controllers\Auth\GoogleController::class, 'redirect']);
Route::get('/auth/google/callback', [App\Http\Controllers\Auth\GoogleController::class, 'callback']);

Route::middleware('auth')->group(function () {
    Route::get('/refleksi', [RefleksiController::class, 'create'])->name('refleksi.create');
    Route::post('/refleksi/store', [RefleksiController::class, 'store'])->name('refleksi.store');
    Route::get('/riwayat', [RefleksiController::class, 'index'])->name('refleksi.index');
    Route::get('/refleksi/{id}/edit', [RefleksiController::class, 'edit'])->name('refleksi.edit');
    Route::put('/refleksi/{id}', [RefleksiController::class, 'update'])->name('refleksi.update');
    Route::delete('/refleksi/{id}', [RefleksiController::class, 'destroy'])->name('refleksi.destroy');
});

Route::get('/grafik', [GrafikController::class, 'index'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
