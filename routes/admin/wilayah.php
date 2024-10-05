<?php

use App\Http\Controllers\Admin\WilayahController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:admin|gereja|wilayah']], function () {

    Route::controller(WilayahController::class)->group(function(){
        Route::get('wilayah', [WilayahController::class, 'index'])->name('wilayah');
        Route::get('wilayah/tambah', [WilayahController::class, 'create'])->name('wilayah.tambah')->middleware(['role:admin']);
        Route::get('wilayah/detail/{id}', [WilayahController::class, 'show'])->name('wilayah.detail');
        Route::delete('wilayah/{id}', [WilayahController::class, 'destroy'])->name('wilayah.hapus')->middleware(['role:admin']);
        Route::post('wilayah/store', [WilayahController::class, 'store'])->name('wilayah.store')->middleware(['role:admin']);
        Route::get('wilayah/{id}/ubah', [WilayahController::class, 'edit'])->name('wilayah.ubah')->middleware(['role:admin|wilayah']);
        Route::put('wilayah/{id}', [WilayahController::class, 'update'])->name('wilayah.update')->middleware(['role:admin|wilayah']);
        Route::get('wilayah/excel', [WilayahController::class, 'excel'])->name('wilayah.excel');
        Route::get('wilayah/pdf', [WilayahController::class, 'pdf'])->name('wilayah.pdf');
    });
});
