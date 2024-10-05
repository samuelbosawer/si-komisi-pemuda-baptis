<?php

use App\Http\Controllers\Admin\JadwalController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:admin|gereja|wilayah']], function () {

    Route::controller(JadwalController::class)->group(function(){
        Route::get('jadwal', [JadwalController::class, 'index'])->name('jadwal');
        Route::get('jadwal/tambah', [JadwalController::class, 'create'])->name('jadwal.tambah')->middleware(['role:admin|wilayah']);
        Route::get('jadwal/detail/{id}', [JadwalController::class, 'show'])->name('jadwal.detail');
        Route::delete('jadwal/{id}', [JadwalController::class, 'destroy'])->name('jadwal.hapus')->middleware(['role:admin|wilayah']);
        Route::post('jadwal/store', [JadwalController::class, 'store'])->name('jadwal.store')->middleware(['role:admin|wilayah']);
        Route::get('jadwal/{id}/ubah', [JadwalController::class, 'edit'])->name('jadwal.ubah')->middleware(['role:admin|wilayah']);
        Route::put('jadwal/{id}', [JadwalController::class, 'update'])->name('jadwal.update')->middleware(['role:admin|wilayah']);
        Route::get('jadwal/excel', [JadwalController::class, 'excel'])->name('jadwal.excel');
        Route::get('jadwal/pdf', [JadwalController::class, 'pdf'])->name('jadwal.pdf');
    });
});
