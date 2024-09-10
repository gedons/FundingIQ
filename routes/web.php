<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PopupController;

// Authentication routes
Auth::routes();

// Frontend routes
Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('front');
Route::get('/random-popup', [PopupController::class, 'randomPopup']);

// User role-based redirection routes
Route::middleware('auth')->group(function () {
    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard')->middleware('role:admin');

    Route::get('/trader/dashboard', function () {
        return view('trader.dashboard');
    })->name('trader.dashboard')->middleware('role:trader');
});
