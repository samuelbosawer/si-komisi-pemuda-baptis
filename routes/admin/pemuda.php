<?php

use App\Http\Controllers\Admin\PemudaController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:admin|gereja|wilayah']], function () {

    Route::controller(PemudaController::class)->group(function(){
        Route::get('pemuda', [PemudaController::class, 'index'])->name('pemuda');
        Route::get('pemuda/tambah', [PemudaController::class, 'create'])->name('pemuda.tambah')->middleware(['role:admin|gereja']);
        Route::get('pemuda/detail/{id}', [PemudaController::class, 'show'])->name('pemuda.detail');
        Route::delete('pemuda/{id}', [PemudaController::class, 'destroy'])->name('pemuda.hapus')->middleware(['role:admin|gereja']);;
        Route::post('pemuda/store', [PemudaController::class, 'store'])->name('pemuda.store')->middleware(['role:admin|gereja']);;
        Route::get('pemuda/{id}/ubah', [PemudaController::class, 'edit'])->name('pemuda.ubah')->middleware(['role:admin|gereja']);;
        Route::put('pemuda/{id}', [PemudaController::class, 'update'])->name('pemuda.update')->middleware(['role:admin|gereja']);;
        Route::get('pemuda/excel', [PemudaController::class, 'excel'])->name('pemuda.excel');
        Route::get('pemuda/pdf', [PemudaController::class, 'pdf'])->name('pemuda.pdf');
    });
});
