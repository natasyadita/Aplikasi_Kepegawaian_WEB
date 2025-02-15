<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);

// Rute untuk resource pegawai
Route::resource('pegawai', PegawaiController::class);

// Rute untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk dashboard, dilindungi oleh middleware auth dan verified
Route::get('/dashboard', [ProfileController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// Kelompokkan rute yang memerlukan autentikasi
Route::middleware('auth')->group(function () {
    // Rute untuk halaman profil
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile'); // Menampilkan halaman profil pengguna
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit'); // Menampilkan form untuk mengedit profil
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update'); // Memperbarui data profil pengguna
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); // Menghapus profil pengguna
});

// Rute untuk logout

require __DIR__.'/auth.php'; // Memuat rute autentikasi tambahan