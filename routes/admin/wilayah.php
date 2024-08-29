<?php

use App\Http\Controllers\Admin\WilayahController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:admin']], function () {

    Route::controller(WilayahController::class)->group(function(){
        Route::get('wilayah', [WilayahController::class, 'index'])->name('wilayah');
        Route::get('wilayah/tambah', [WilayahController::class, 'create'])->name('wilayah.tambah');
        Route::get('wilayah/detail/{id}', [WilayahController::class, 'show'])->name('wilayah.detail');
        Route::delete('wilayah/{id}', [WilayahController::class, 'destroy'])->name('wilayah.hapus');
        Route::post('wilayah/store', [WilayahController::class, 'store'])->name('wilayah.store');
        Route::get('wilayah/{id}/ubah', [WilayahController::class, 'edit'])->name('wilayah.ubah');
        Route::put('wilayah/{id}', [WilayahController::class, 'update'])->name('wilayah.update');
        Route::get('wilayah/excel', [WilayahController::class, 'excel'])->name('wilayah.excel');
    });
});
