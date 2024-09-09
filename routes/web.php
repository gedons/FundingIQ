<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('front');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
