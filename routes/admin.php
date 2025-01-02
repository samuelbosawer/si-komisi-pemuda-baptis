<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\JurusanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImpersonateController;

Route::group(['middleware' => ['auth','impersonate']], function () {
    Route::prefix('admin')->name('admin.')->group(function () {

        // Dashboard
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');





            require_once 'admin/pemuda.php';
            require_once 'admin/galeri.php';
            require_once 'admin/gereja.php';
            require_once 'admin/jadwal.php';
            require_once 'admin/kegiatan.php';
            require_once 'admin/pengumuman.php';
            require_once 'admin/wilayah.php';
            require_once 'admin/pengguna.php';

















                Route::get('/impersonate/start/{id}', [ImpersonateController::class, 'start'])->name('impersonate.start');
                Route::get('/impersonate/stop', [ImpersonateController::class, 'stop'])->name('impersonate.stop');
    });
});
