<?php

use App\Http\Controllers\Partner\Auth\AuthPartnerController;
use App\Http\Controllers\Partner\DashboardPartnerController;
use App\Http\Controllers\Partner\InformationPartnerController;
use App\Http\Controllers\Partner\ProductPartnerController;
use App\Http\Controllers\Partner\ProfilePartnerController;
use App\Http\Controllers\Partner\Properti\ApartementPartnerController;
use App\Http\Controllers\Partner\Properti\KosPartnerController;
use App\Http\Controllers\Partner\Properti\RukoPartnerController;
use App\Http\Controllers\Partner\Properti\RumahPartnerController;
use App\Http\Controllers\Partner\Properti\TanahPartnerController;
use Illuminate\Support\Facades\Route;

Route::get('partner/login', [AuthPartnerController::class, 'index'])->name('pages.partner.login');
Route::post('partner/login', [AuthPartnerController::class, 'store'])->name('pages.partner.login.store');
Route::get('partner/logout', [AuthPartnerController::class, 'logout'])->name('pages.partner.logout');

Route::middleware(['auth', 'role:Partner'])->group(function () {
    Route::get('/dashboard/partner', [DashboardPartnerController::class, 'index'])->name('pages.dashboard.partner');
    Route::get('/dashboard/partner/akun', [ProfilePartnerController::class, 'index'])->name('pages.dashboard.partner.profile');
    Route::get('/dashboard/partner/informasi', [InformationPartnerController::class, 'index'])->name('pages.dashboard.partner.information');
    Route::get('/dashboard/partner/produk', [ProductPartnerController::class, 'index'])->name('pages.dashboard.partner.product');

    Route::get('/dashboard/properti', [ProductPartnerController::class, 'index'])->name('pages.dashboard.properti');
    Route::get('/dashboard/properti/apartement', [ApartementPartnerController::class, 'index'])->name('pages.dashboard.properti.apartement');
    Route::get('/dashboard/properti/kos', [KosPartnerController::class, 'index'])->name('pages.dashboard.properti.kos');
    Route::get('/dashboard/properti/ruko', [RukoPartnerController::class, 'index'])->name('pages.dashboard.properti.ruko');
    Route::get('/dashboard/properti/rumah', [RumahPartnerController::class, 'index'])->name('pages.dashboard.properti.rumah');
    Route::get('/dashboard/properti/tanah', [TanahPartnerController::class, 'index'])->name('pages.dashboard.properti.tanah');

    Route::get('/dashboard/properti/apartement/create', [ApartementPartnerController::class, 'create'])->name('pages.dashboard.properti.apartement.create');
    Route::get('/dashboard/properti/kos/create', [KosPartnerController::class, 'create'])->name('pages.dashboard.properti.kos.create');
    Route::get('/dashboard/properti/ruko/create', [RukoPartnerController::class, 'create'])->name('pages.dashboard.properti.ruko.create');
    Route::get('/dashboard/properti/rumah/create', [RumahPartnerController::class, 'create'])->name('pages.dashboard.properti.rumah.create');
    Route::get('/dashboard/properti/tanah/create', [TanahPartnerController::class, 'create'])->name('pages.dashboard.properti.tanah.create');

    Route::post('/dashboard/properti/apartement/store', [ApartementPartnerController::class, 'store'])->name('pages.dashboard.properti.apartement.store');
    Route::post('/dashboard/properti/kos/store', [KosPartnerController::class, 'store'])->name('pages.dashboard.properti.kos.store');
    Route::post('/dashboard/properti/ruko/store', [RukoPartnerController::class, 'store'])->name('pages.dashboard.properti.ruko.store');
    Route::post('/dashboard/properti/rumah/store', [RumahPartnerController::class, 'store'])->name('pages.dashboard.properti.rumah.store');
    Route::post('/dashboard/properti/tanah/store', [TanahPartnerController::class, 'store'])->name('pages.dashboard.properti.tanah.store');

    Route::get('/dashboard/properti/apartement/{slug}', [ApartementPartnerController::class, 'update'])->name('pages.dashboard.properti.apartement.update');
    Route::get('/dashboard/properti/kos/{slug}', [KosPartnerController::class, 'update'])->name('pages.dashboard.properti.kos.update');
    Route::get('/dashboard/properti/ruko/{slug}', [RukoPartnerController::class, 'update'])->name('pages.dashboard.properti.ruko.update');
    Route::get('/dashboard/properti/rumah/{slug}', [RumahPartnerController::class, 'update'])->name('pages.dashboard.properti.rumah.update');
    Route::get('/dashboard/properti/tanah/{slug}', [TanahPartnerController::class, 'update'])->name('pages.dashboard.properti.tanah.update');

    Route::put('/dashboard/properti/apartement/{slug}', [ApartementPartnerController::class, 'edit'])->name('pages.dashboard.properti.apartement.edit');
    Route::put('/dashboard/properti/kos/edit/{slug}', [KosPartnerController::class, 'edit'])->name('pages.dashboard.properti.kos.edit');
    Route::put('/dashboard/properti/ruko/edit/{slug}', [RukoPartnerController::class, 'edit'])->name('pages.dashboard.properti.ruko.edit');
    Route::put('/dashboard/properti/rumah/edit/{slug}', [RumahPartnerController::class, 'edit'])->name('pages.dashboard.properti.rumah.edit');
    Route::put('/dashboard/properti/tanah/edit/{slug}', [TanahPartnerController::class, 'edit'])->name('pages.dashboard.properti.tanah.edit');

    Route::delete('/dashboard/properti/apartement/{slug}', [ApartementPartnerController::class, 'destroy'])->name('pages.dashboard.properti.apartement.destroy');
    Route::delete('/dashboard/properti/kos/destroy/{slug}', [KosPartnerController::class, 'destory'])->name('pages.dashboard.properti.kos.destroy');
    Route::delete('/dashboard/properti/ruko/destroy/{slug}', [RukoPartnerController::class, 'destory'])->name('pages.dashboard.properti.ruko.destroy');
    Route::delete('/dashboard/properti/rumah/destroy/{slug}', [RumahPartnerController::class, 'destory'])->name('pages.dashboard.properti.rumah.destroy');
    Route::delete('/dashboard/properti/tanah/destroy/{slug}', [TanahPartnerController::class, 'destory'])->name('pages.dashboard.properti.tanah.destroy');
});
