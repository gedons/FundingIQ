<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PopupController;
use App\Http\Controllers\Trader\DashboardController;
use App\Http\Controllers\Trader\FundingController;

// Authentication routes
Auth::routes();

// Frontend routes
Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('front');
Route::get('/random-popup', [PopupController::class, 'randomPopup']);

// User role-based redirection routes
Route::middleware('auth')->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard')->middleware('role:admin');


    // traders route
    Route::get('/trader/dashboard', [DashboardController::class, 'dashboard'])->name('trader.dashboard')->middleware('role:trader');
    Route::get('/trader/profile', [DashboardController::class, 'profile'])->name('trader.profile')->middleware('role:trader');

    Route::get('/trader/withdraw', [DashboardController::class, 'withdraw'])->name('trader.withdraw')->middleware('role:trader');
    Route::get('/trader/upload', [DashboardController::class, 'upload'])->name('trader.upload')->middleware('role:trader');
    Route::get('/trader/trade', [DashboardController::class, 'trade'])->name('trader.trade')->middleware('role:trader');

    Route::get('/trader/fund', [DashboardController::class, 'fund'])->name('trader.fund')->middleware('role:trader');
    Route::post('/trader/fund', [FundingController::class, 'store'])->name('trader.fund.store')->middleware('role:trader');
    Route::get('/trader/fund/confirm/{id}', [FundingController::class, 'confirm'])->name('trader.fund.confirm')->middleware('role:trader');
    Route::post('/trader/fund/confirm/{id}/upload', [FundingController::class, 'uploadProofOfPayment'])->name('trader.fund.upload_proof')->middleware('role:trader');






});
