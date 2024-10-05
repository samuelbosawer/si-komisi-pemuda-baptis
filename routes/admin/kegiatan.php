<?php

use App\Http\Controllers\Admin\AgendaController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['role:admin|gereja|wilayah']], function () {

    Route::controller(AgendaController::class)->group(function(){
        Route::get('agenda', [AgendaController::class, 'index'])->name('agenda');
        Route::get('agenda/tambah', [AgendaController::class, 'create'])->name('agenda.tambah')->middleware(['role:admin|wilayah']);
        Route::get('agenda/detail/{id}', [AgendaController::class, 'show'])->name('agenda.detail');
        Route::delete('agenda/{id}', [AgendaController::class, 'destroy'])->name('agenda.hapus')->middleware(['role:admin|wilayah']);
        Route::post('agenda/store', [AgendaController::class, 'store'])->name('agenda.store')->middleware(['role:admin|wilayah']);
        Route::get('agenda/{id}/ubah', [AgendaController::class, 'edit'])->name('agenda.ubah')->middleware(['role:admin|wilayah']);
        Route::put('agenda/{id}', [AgendaController::class, 'update'])->name('agenda.update')->middleware(['role:admin|wilayah']);
        Route::get('agenda/excel', [AgendaController::class, 'excel'])->name('agenda.excel');
        Route::get('agenda/pdf', [AgendaController::class, 'pdf'])->name('agenda.pdf');
    });
});
