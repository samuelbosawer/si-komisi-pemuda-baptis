<?php

use App\Http\Controllers\Admin\GerejaController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:admin']], function () {

    Route::controller(GerejaController::class)->group(function(){
        Route::get('gereja', [GerejaController::class, 'index'])->name('gereja');
        Route::get('gereja/tambah', [GerejaController::class, 'create'])->name('gereja.tambah');
        Route::get('gereja/detail/{id}', [GerejaController::class, 'show'])->name('gereja.detail');
        Route::delete('gereja/{id}', [GerejaController::class, 'destroy'])->name('gereja.hapus');
        Route::post('gereja/store', [GerejaController::class, 'store'])->name('gereja.store');
        Route::get('gereja/{id}/ubah', [GerejaController::class, 'edit'])->name('gereja.ubah');
        Route::put('gereja/{id}', [GerejaController::class, 'update'])->name('gereja.update');
        Route::get('gereja/excel', [GerejaController::class, 'excel'])->name('gereja.excel');
    });
});
