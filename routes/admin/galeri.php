<?php

use App\Http\Controllers\Admin\GaleriController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:admin|gereja|wilayah']], function () {

    Route::controller(GaleriController::class)->group(function(){
        Route::get('galeri', [GaleriController::class, 'index'])->name('galeri');
        Route::get('galeri/tambah', [GaleriController::class, 'create'])->name('galeri.tambah')->middleware(['role:admin|wilayah']);
        Route::get('galeri/detail/{id}', [GaleriController::class, 'show'])->name('galeri.detail');
        Route::delete('galeri/{id}', [GaleriController::class, 'destroy'])->name('galeri.hapus')->middleware(['role:admin|wilayah']);
        Route::post('galeri/store', [GaleriController::class, 'store'])->name('galeri.store')->middleware(['role:admin|wilayah']);
        Route::get('galeri/{id}/ubah', [GaleriController::class, 'edit'])->name('galeri.ubah')->middleware(['role:admin|wilayah']);
        Route::put('galeri/{id}', [GaleriController::class, 'update'])->name('galeri.update')->middleware(['role:admin|wilayah']);
        Route::get('galeri/excel', [GaleriController::class, 'excel'])->name('galeri.excel');
        Route::get('galeri/pdf', [GaleriController::class, 'pdf'])->name('galeri.pdf');
    });
});
