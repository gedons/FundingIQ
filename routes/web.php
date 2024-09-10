<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PopupController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('front');
Route::get('/random-popup', [PopupController::class, 'randomPopup']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
