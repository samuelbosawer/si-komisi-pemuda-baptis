<?php

use App\Http\Controllers\Admin\GaleriController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:admin']], function () {

    Route::controller(GaleriController::class)->group(function(){
        Route::get('galeri', [GaleriController::class, 'index'])->name('galeri');
        Route::get('galeri/tambah', [GaleriController::class, 'create'])->name('galeri.tambah');
        Route::get('galeri/detail/{id}', [GaleriController::class, 'show'])->name('galeri.detail');
        Route::delete('galeri/{id}', [GaleriController::class, 'destroy'])->name('galeri.hapus');
        Route::post('galeri/store', [GaleriController::class, 'store'])->name('galeri.store');
        Route::get('galeri/{id}/ubah', [GaleriController::class, 'edit'])->name('galeri.ubah');
        Route::put('galeri/{id}', [GaleriController::class, 'update'])->name('galeri.update');
        Route::get('galeri/excel', [GaleriController::class, 'excel'])->name('galeri.excel');
        Route::get('galeri/pdf', [GaleriController::class, 'pdf'])->name('galeri.pdf');
    });
});
