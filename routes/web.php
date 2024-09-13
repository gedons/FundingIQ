<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PopupController;
use App\Http\Controllers\Trader\DashboardController;
use App\Http\Controllers\Trader\FundingController;
use App\Http\Controllers\Admin\AdminDashboardController;

// Authentication routes
Auth::routes();

// Frontend routes
Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('front');
Route::get('/random-popup', [PopupController::class, 'randomPopup']);

// User role-based redirection routes
Route::middleware('auth')->group(function () {


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


    //admin route
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard')->middleware('role:admin');
    Route::get('/admin/users', [AdminDashboardController::class, 'users'])->name('admin.users')->middleware('role:admin');
    Route::get('/admin/transactions', [AdminDashboardController::class, 'transactions'])->name('admin.transactions')->middleware('role:admin');
    Route::get('/admin/withdrawals', [AdminDashboardController::class, 'withdrawals'])->name('admin.withdrawals')->middleware('role:admin');
    Route::get('/admin/trades', [AdminDashboardController::class, 'trades'])->name('admin.trades')->middleware('role:admin');
    Route::get('/admin/kyc', [AdminDashboardController::class, 'kyc'])->name('admin.kyc')->middleware('role:admin');

});
