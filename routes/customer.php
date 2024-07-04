<?php

use App\Http\Controllers\User\ProfileUserController;
use App\Http\Controllers\User\WishlistUserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:Customer'])->group(function () {
    Route::get('/profile/user', [ProfileUserController::class,'index'])->name('profile.customer');
    Route::get('/profile/user/wishlist', [WishlistUserController::class,'index'])->name('profile.customer.wishlist');
    Route::put('/customer/update/foto', [ProfileUserController::class,'update_foto'])->name('customer.update.foto');
    Route::put('/customer/update/email', [ProfileUserController::class,'update_email'])->name('customer.update.email');
    Route::put('/customer/update/password', [ProfileUserController::class,'update_password'])->name('customer.update.password');
    Route::put('/customer/update/nama', [ProfileUserController::class,'update_nama'])->name('customer.update.nama');
});
