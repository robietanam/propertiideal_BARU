<?php

use App\Http\Controllers\Partner\Auth\AuthPartnerController;
use App\Http\Controllers\Partner\DashboardPartnerController;
use App\Http\Controllers\Partner\ProductPartnerController;
use App\Http\Controllers\Partner\ProfilePartnerController;
use Illuminate\Support\Facades\Route;

Route::get('partner/login', [AuthPartnerController::class, 'index'])->name('pages.partner.login');
Route::post('partner/login', [AuthPartnerController::class, 'store'])->name('pages.partner.login.store');

Route::middleware(['auth', 'role:Partner'])->group(function () {
    Route::get('/dashboard/partner', [DashboardPartnerController::class, 'index'])->name('pages.dashboard.partner');
    Route::get('/dashboard/partner/profile', [ProfilePartnerController::class, 'index'])->name('pages.dashboard.partner.profile');
    Route::get('/dashboard/partner/produk', [ProductPartnerController::class, 'index'])->name('pages.dashboard.partner.product');
});
