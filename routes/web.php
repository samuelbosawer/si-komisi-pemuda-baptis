<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});



Auth::routes();



require_once 'admin.php';
