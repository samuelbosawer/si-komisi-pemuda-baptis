<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:admin']], function () {

    Route::controller(UserController::class)->group(function(){
        Route::get('pengguna', [UserController::class, 'index'])->name('pengguna');
        Route::get('pengguna/tambah', [UserController::class, 'create'])->name('pengguna.tambah');
        Route::get('pengguna/detail/{id}', [UserController::class, 'show'])->name('pengguna.detail');
        Route::delete('pengguna/{id}', [UserController::class, 'destroy'])->name('pengguna.hapus');
        Route::post('pengguna/store', [UserController::class, 'store'])->name('pengguna.store');
        Route::get('pengguna/{id}/ubah', [UserController::class, 'edit'])->name('pengguna.ubah');
        Route::put('pengguna/{id}', [UserController::class, 'update'])->name('pengguna.update');
        Route::get('pengguna/excel', [UserController::class, 'excel'])->name('pengguna.excel');
        Route::get('pengguna/pdf', [UserController::class, 'pdf'])->name('pengguna.pdf');

        Route::get('pengguna/get-gereja-by-wilayah/', [UserController::class, 'getWIlayah'])->name('pengguna.getWIlayah');
        Route::get('pengguna/get-gereja-by-gereja/{id}', [UserController::class, 'getGerejas'])->name('pengguna.getGerejas');
    });
});
