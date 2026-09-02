<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BukuController;
use App\Http\Controllers\Admin\PeminjamanController;
use App\Http\Controllers\User\KatalogController;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard User (Siswa) - Syarat role:user udah dihapus sementara
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Dashboard / Katalog Buku untuk Siswa (User)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [KatalogController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/pinjam', [KatalogController::class, 'store'])->name('user.pinjam');
    
    // TAMBAHAN: Route biar tombol kembalikan di dashboard siswa bisa jalan
    Route::patch('/dashboard/kembali/{id}', [KatalogController::class, 'kembali'])->name('user.kembali');
});

// Dashboard Admin
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/dashboard', function () {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Akses ditolak.');
        }
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Route CRUD Buku
    Route::resource('/admin/buku', BukuController::class, ['as' => 'admin']);
});

// Route CRUD Peminjaman
Route::resource('/admin/peminjaman', PeminjamanController::class, ['as' => 'admin']);
Route::patch('/admin/peminjaman/{peminjaman}/kembali', [PeminjamanController::class, 'updateStatus'])->name('admin.peminjaman.kembali');

// Route Profile bawaan Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// INI YANG PALING PENTING BIAR LOGIN/REGISTER NYA MUNCUL
require __DIR__.'/auth.php';