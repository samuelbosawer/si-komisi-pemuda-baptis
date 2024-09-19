<?php

use App\Http\Controllers\Admin\JadwalController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:admin']], function () {

    Route::controller(JadwalController::class)->group(function(){
        Route::get('jadwal', [JadwalController::class, 'index'])->name('jadwal');
        Route::get('jadwal/tambah', [JadwalController::class, 'create'])->name('jadwal.tambah');
        Route::get('jadwal/detail/{id}', [JadwalController::class, 'show'])->name('jadwal.detail');
        Route::delete('jadwal/{id}', [JadwalController::class, 'destroy'])->name('jadwal.hapus');
        Route::post('jadwal/store', [JadwalController::class, 'store'])->name('jadwal.store');
        Route::get('jadwal/{id}/ubah', [JadwalController::class, 'edit'])->name('jadwal.ubah');
        Route::put('jadwal/{id}', [JadwalController::class, 'update'])->name('jadwal.update');
        Route::get('jadwal/excel', [JadwalController::class, 'excel'])->name('jadwal.excel');
        Route::get('jadwal/pdf', [JadwalController::class, 'pdf'])->name('jadwal.pdf');
    });
});
