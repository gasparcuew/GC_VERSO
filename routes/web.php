<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);