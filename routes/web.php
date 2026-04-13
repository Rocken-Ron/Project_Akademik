<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// // Route Mahasiswa
// Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa.index');
// Route::get('/mahasiswa/create', [App\Http\Controllers\MahasiswaController::class, 'create'])->name('mahasiswa.create');
// Route::post('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'store'])->name('mahasiswa.store');
// Route::get('/mahasiswa/{nim}', [App\Http\Controllers\MahasiswaController::class, 'show'])->name('mahasiswa.show');
// Route::get('/mahasiswa/{nim}/edit', [App\Http\Controllers\MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
// Route::put('/mahasiswa/{nim}', [App\Http\Controllers\MahasiswaController::class, 'update'])->name('mahasiswa.update');
// Route::delete('/mahasiswa/{nim}', [App\Http\Controllers\MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

// Route resource untuk Mahasiswa
Route::resource('mahasiswa', App\Http\Controllers\MahasiswaController::class);
