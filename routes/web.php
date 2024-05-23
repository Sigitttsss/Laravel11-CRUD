<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/penjualan', [PenjualanController::class, 'show'])->name('penjualan');
Route::get('/laporan', [LaporanController::class, 'show'])->name('laporan');

require __DIR__.'/auth.php';
