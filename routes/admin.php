<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\JurusanController;
use App\Http\Controllers\DashboardController;

Route::group(['middleware' => ['role:admin', 'auth']], function () {
    Route::prefix('admin')->name('admin.')->group(function () {

        // Dashboard
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


        // Mahasiswa
        Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
        Route::get('mahasiswa/tambah', [MahasiswaController::class, 'create'])->name('mahasiswa.tambah');
        Route::get('mahasiswa/detail/{id}', [MahasiswaController::class, 'show'])->name('mahasiswa.detail');
        Route::delete('mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.hapus');
        Route::post('mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
        Route::get('mahasiswa/{id}/ubah', [MahasiswaController::class, 'edit'])->name('mahasiswa.ubah');
        Route::put('mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
        Route::get('mahasiswa/excel', [MahasiswaController::class, 'excel'])->name('mahasiswa.excel');



         // Jurusan
         Route::get('jurusan', [JurusanController::class, 'index'])->name('jurusan');
         Route::get('jurusan/tambah', [JurusanController::class, 'create'])->name('jurusan.tambah');
         Route::get('jurusan/detail/{id}', [JurusanController::class, 'show'])->name('jurusan.detail');
         Route::delete('jurusan/{id}', [JurusanController::class, 'destroy'])->name('jurusan.hapus');
         Route::post('jurusan/store', [JurusanController::class, 'store'])->name('jurusan.store');
         Route::get('jurusan/{id}/ubah', [JurusanController::class, 'edit'])->name('jurusan.ubah');
         Route::put('jurusan/{id}', [JurusanController::class, 'update'])->name('jurusan.update');
    });
});
