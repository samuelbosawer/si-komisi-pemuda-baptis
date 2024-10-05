<?php

use App\Http\Controllers\Admin\GerejaController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:admin|gereja|wilayah']], function () {

    Route::controller(GerejaController::class)->group(function(){
        Route::get('gereja', [GerejaController::class, 'index'])->name('gereja');
        Route::get('gereja/tambah', [GerejaController::class, 'create'])->name('gereja.tambah')->middleware(['role:admin|gereja']);
        Route::get('gereja/detail/{id}', [GerejaController::class, 'show'])->name('gereja.detail');
        Route::delete('gereja/{id}', [GerejaController::class, 'destroy'])->name('gereja.hapus')->middleware(['role:admin|gereja']);
        Route::post('gereja/store', [GerejaController::class, 'store'])->name('gereja.store')->middleware(['role:admin|gereja']);
        Route::get('gereja/{id}/ubah', [GerejaController::class, 'edit'])->name('gereja.ubah')->middleware(['role:admin|gereja']);
        Route::put('gereja/{id}', [GerejaController::class, 'update'])->name('gereja.update')->middleware(['role:admin|gereja']);
        Route::get('gereja/excel', [GerejaController::class, 'excel'])->name('gereja.excel');
        Route::get('gereja/pdf', [GerejaController::class, 'pdf'])->name('gereja.pdf');
    });
});
