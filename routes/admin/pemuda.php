<?php

use App\Http\Controllers\Admin\PemudaController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:admin']], function () {

    Route::controller(PemudaController::class)->group(function(){
        Route::get('pemuda', [PemudaController::class, 'index'])->name('pemuda');
        Route::get('pemuda/tambah', [PemudaController::class, 'create'])->name('pemuda.tambah');
        Route::get('pemuda/detail/{id}', [PemudaController::class, 'show'])->name('pemuda.detail');
        Route::delete('pemuda/{id}', [PemudaController::class, 'destroy'])->name('pemuda.hapus');
        Route::post('pemuda/store', [PemudaController::class, 'store'])->name('pemuda.store');
        Route::get('pemuda/{id}/ubah', [PemudaController::class, 'edit'])->name('pemuda.ubah');
        Route::put('pemuda/{id}', [PemudaController::class, 'update'])->name('pemuda.update');
        Route::get('pemuda/excel', [PemudaController::class, 'excel'])->name('pemuda.excel');
        Route::get('pemuda/pdf', [PemudaController::class, 'pdf'])->name('pemuda.pdf');
    });
});
