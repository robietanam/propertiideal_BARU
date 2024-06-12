<?php

use App\Http\Controllers\Pages\WebPagesController;
use App\Http\Controllers\Partner\DashboardPartnerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', [WebPagesController::class, 'about'])->name('pages.about');
Route::get('/jual', [WebPagesController::class, 'sell'])->name('pages.sell');
Route::get('/beli', [WebPagesController::class, 'buy'])->name('pages.buy');
Route::get('/properti/{slug}', [WebPagesController::class, 'detail_properties'])->name('pages.detail.properties');
Route::get('/kategori/properti', [WebPagesController::class, 'by_properties'])->name('pages.category.property');
Route::get('/kategori/solusi', [WebPagesController::class, 'by_solutions'])->name('pages.category.solution');
Route::get('/solusi/{slug}', [WebPagesController::class, 'detail_solutions'])->name('pages.detail.solution');
Route::get('/hak-cipta', [WebPagesController::class, 'copyright'])->name('pages.copyright');
Route::get('/keranjang', [WebPagesController::class, 'wishlist'])->name('pages.wishlist');

Route::get('/dashboard/partner', [DashboardPartnerController::class, 'index'])->name('pages.dashboard.partner');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
