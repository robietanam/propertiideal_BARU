<?php

use App\Http\Controllers\User\Auth\AuthUserController;
use App\Http\Controllers\User\ProfileUserController;
use App\Http\Controllers\User\WishlistUserController;
use Illuminate\Support\Facades\Route;

Route::get('customer/login', [AuthUserController::class, 'index'])->name('pages.customer.login');
Route::post('customer/login/store', [AuthUserController::class, 'login'])->name('pages.customer.login.store');
Route::get('customer/register', [AuthUserController::class, 'register'])->name('pages.customer.register');
Route::get('customer/logout', [AuthUserController::class, 'logout'])->name('pages.customer.logout');

Route::middleware(['auth', 'role:Customer'])->group(function () {
    Route::get('/profile/user', [ProfileUserController::class,'index'])->name('profile.customer');
    Route::get('/profile/user/wishlist', [WishlistUserController::class,'index'])->name('profile.customer.wishlist');
    Route::put('/customer/update/foto', [ProfileUserController::class,'update_foto'])->name('customer.update.foto');
    Route::put('/customer/update/email', [ProfileUserController::class,'update_email'])->name('customer.update.email');
    Route::put('/customer/update/password', [ProfileUserController::class,'update_password'])->name('customer.update.password');
    Route::put('/customer/update/nama', [ProfileUserController::class,'update_nama'])->name('customer.update.nama');
});
