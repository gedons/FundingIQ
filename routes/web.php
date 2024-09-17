<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PopupController;
use App\Http\Controllers\Trader\DashboardController;
use App\Http\Controllers\Trader\FundingController;
use App\Http\Controllers\Trader\TraderController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminTransactionController;
use App\Http\Controllers\Trader\WithdrawalController;

// Authentication routes
Auth::routes();

// Frontend routes
Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('front');
Route::get('/about-us', [App\Http\Controllers\FrontController::class, 'about'])->name('front.about');
Route::get('/plans', [App\Http\Controllers\FrontController::class, 'plans'])->name('front.plans');
Route::get('/faq', [App\Http\Controllers\FrontController::class, 'faq'])->name('front.faq');
Route::get('/legal', [App\Http\Controllers\FrontController::class, 'legal'])->name('front.legal');
Route::get('/contact-us', [App\Http\Controllers\FrontController::class, 'contact'])->name('front.contact');
Route::get('/random-popup', [PopupController::class, 'randomPopup']);

// User role-based redirection routes
Route::middleware('auth')->group(function () {


    // traders route
    Route::get('/trader/dashboard', [DashboardController::class, 'dashboard'])->name('trader.dashboard')->middleware('role:trader');
    Route::get('/trader/profile', [DashboardController::class, 'profile'])->name('trader.profile')->middleware('role:trader');

    Route::post('/trader/profile/update-details', [TraderController::class, 'updateDetails'])->name('trader.profile.update.details')->middleware('role:trader');
    Route::post('/trader/profile/update-password', [TraderController::class, 'updatePassword'])->name('trader.profile.update.password')->middleware('role:trader');

    Route::get('/trader/withdraw', [DashboardController::class, 'withdraw'])->name('trader.withdraw')->middleware('role:trader');
    Route::post('/trader/withdraw', [WithdrawalController::class, 'store'])->name('withdrawal.store')->middleware('role:trader');
    Route::get('/trader/upload', [DashboardController::class, 'upload'])->name('trader.upload')->middleware('role:trader');
    Route::post('/trader/upload/upload-kyc', [TraderController::class, 'uploadKyc'])->name('trader.profile.upload.kyc')->middleware('role:trader');

    Route::get('/trader/trade', [DashboardController::class, 'trade'])->name('trader.trade')->middleware('role:trader');

    Route::get('/trader/fund', [DashboardController::class, 'fund'])->name('trader.fund')->middleware('role:trader');
    Route::post('/trader/fund', [FundingController::class, 'store'])->name('trader.fund.store')->middleware('role:trader');
    Route::get('/trader/fund/confirm/{id}', [FundingController::class, 'confirm'])->name('trader.fund.confirm')->middleware('role:trader');
    Route::post('/trader/fund/confirm/{id}/upload', [FundingController::class, 'uploadProofOfPayment'])->name('trader.fund.upload_proof')->middleware('role:trader');


    //admin route
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard')->middleware('role:admin');
    Route::get('/admin/users', [AdminDashboardController::class, 'users'])->name('admin.users')->middleware('role:admin');
    Route::get('/admin/users/{id}', [AdminDashboardController::class, 'show'])->name('admin.users.show')->middleware('role:admin');
    Route::put('/admin/user/{id}/investment', [AdminDashboardController::class, 'updateInvestment'])->name('admin.user.update_investment')->middleware('role:admin');
    Route::get('/admin/transactions', [AdminDashboardController::class, 'transactions'])->name('admin.transactions')->middleware('role:admin');
    Route::get('/admin/trades', [AdminDashboardController::class, 'trades'])->name('admin.trades')->middleware('role:admin');


    Route::get('/admin/kyc', [AdminDashboardController::class, 'kyc'])->name('admin.kyc')->middleware('role:admin');
    // Route::get('/admin/kyc-requests', [AdminController::class, 'kycRequests'])->name('admin.kyc.requests')->middleware('role:admin');
    Route::post('/admin/kyc/approve/{id}', [AdminDashboardController::class, 'approveKyc'])->name('admin.kyc.approve')->middleware('role:admin');
    Route::post('/admin/kyc/reject/{id}', [AdminDashboardController::class, 'rejectKyc'])->name('admin.kyc.reject')->middleware('role:admin');

    Route::post('/admin/transactions/approve/{id}', [AdminTransactionController::class, 'approveTransaction'])->name('admin.transactions.approve')->middleware('role:admin');
    Route::put('/admin/withdrawals/{id}/approve', [AdminTransactionController::class, 'approveWithdrawal'])->name('admin.withdrawals.approve')->middleware('role:admin');
    Route::put('/admin/withdrawals/{id}/reject', [AdminTransactionController::class, 'rejectWithdrawal'])->name('admin.withdrawals.reject')->middleware('role:admin');


});
