<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return redirect()->route('admin.dashboard');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang-kami', [HomeController::class, 'tentang'])->name('tentang');
Route::get('/pengumuman', [HomeController::class, 'pengumuman'])->name('pengumuman');
Route::get('/agenda', [HomeController::class, 'agenda'])->name('agenda');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/jadwal', [HomeController::class, 'jadwal'])->name('jadwal');


Auth::routes();



require_once 'admin.php';
