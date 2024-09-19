<?php

use App\Http\Controllers\Admin\AgendaController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:admin']], function () {

    Route::controller(AgendaController::class)->group(function(){
        Route::get('agenda', [AgendaController::class, 'index'])->name('agenda');
        Route::get('agenda/tambah', [AgendaController::class, 'create'])->name('agenda.tambah');
        Route::get('agenda/detail/{id}', [AgendaController::class, 'show'])->name('agenda.detail');
        Route::delete('agenda/{id}', [AgendaController::class, 'destroy'])->name('agenda.hapus');
        Route::post('agenda/store', [AgendaController::class, 'store'])->name('agenda.store');
        Route::get('agenda/{id}/ubah', [AgendaController::class, 'edit'])->name('agenda.ubah');
        Route::put('agenda/{id}', [AgendaController::class, 'update'])->name('agenda.update');
        Route::get('agenda/excel', [AgendaController::class, 'excel'])->name('agenda.excel');
        Route::get('agenda/pdf', [AgendaController::class, 'pdf'])->name('agenda.pdf');
    });
});
