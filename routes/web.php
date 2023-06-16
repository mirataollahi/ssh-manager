<?php

use Illuminate\Support\Facades\Route;



Route::get('/' , [\App\Http\Controllers\Admin\Dashboard\DashboardController::class , 'index'] )->name('admin.dashboard');
