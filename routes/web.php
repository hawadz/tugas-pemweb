<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;

Route::get('/', [CobaController::class, 'index']);
Route::get('/home', [DashboardController::class, 'home']);