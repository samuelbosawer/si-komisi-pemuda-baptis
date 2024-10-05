<?php

use App\Http\Controllers\Admin\PengumumanController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:admin|gereja|wilayah']], function () {

    Route::controller(PengumumanController::class)->group(function(){
        Route::get('pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
        Route::get('pengumuman/tambah', [PengumumanController::class, 'create'])->name('pengumuman.tambah')->middleware(['role:admin|wilayah']);
        Route::get('pengumuman/detail/{id}', [PengumumanController::class, 'show'])->name('pengumuman.detail');
        Route::delete('pengumuman/{id}', [PengumumanController::class, 'destroy'])->name('pengumuman.hapus')->middleware(['role:admin|wilayah']);
        Route::post('pengumuman/store', [PengumumanController::class, 'store'])->name('pengumuman.store')->middleware(['role:admin|wilayah']);
        Route::get('pengumuman/{id}/ubah', [PengumumanController::class, 'edit'])->name('pengumuman.ubah')->middleware(['role:admin|wilayah']);
        Route::put('pengumuman/{id}', [PengumumanController::class, 'update'])->name('pengumuman.update')->middleware(['role:admin|wilayah']);;
        Route::get('pengumuman/excel', [PengumumanController::class, 'excel'])->name('pengumuman.excel');
        Route::get('pengumuman/pdf', [PengumumanController::class, 'pdf'])->name('pengumuman.pdf');
    });
});
