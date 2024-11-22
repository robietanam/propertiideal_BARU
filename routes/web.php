<?php

use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\FotoSolutionController;
use App\Http\Controllers\Admin\KategoriSolutionController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PropertiController;
use App\Http\Controllers\Admin\PropertiSolutionController;
use App\Http\Controllers\Pages\WebPagesController;
use App\Http\Controllers\Partner\Auth\AuthPartnerController;
use App\Http\Controllers\Partner\DashboardPartnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\Auth\AuthUserController;
use App\Http\Controllers\User\Auth\SocialiteController;
use App\Http\Controllers\User\ProfileUserController;
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
Route::get('/sewa', [WebPagesController::class, 'rental'])->name('pages.rental');
Route::get('/properti/{slug}', [WebPagesController::class, 'detail_properties'])->name('pages.detail.properties');
Route::get('/kategori/properti', [WebPagesController::class, 'by_properties'])->name('pages.category.property');
Route::get('/kategori/solusi', [WebPagesController::class, 'by_solutions'])->name('pages.category.solution');
Route::get('/solusi/{slug}', [WebPagesController::class, 'detail_solutions'])->name('pages.detail.solution');
Route::get('/hak-cipta', [WebPagesController::class, 'copyright'])->name('pages.copyright');
Route::get('/keranjang', [WebPagesController::class, 'wishlist'])->name('pages.wishlist');
Route::get('/layanan', [WebPagesController::class, 'services'])->name('pages.services');
Route::get('/layanan/propertiideal', [WebPagesController::class, 'propertiideal'])->name('pages.services.propertiideal');
Route::get('/layanan/propertisolution', [WebPagesController::class, 'propertisolution'])->name('pages.services.propertisolution');
Route::get('/kontak', [WebPagesController::class, 'contact'])->name('pages.contact');

Route::get('daftar-partner', [WebPagesController::class, 'submission'])->name('pages.submission');

Route::get('/admin/login', [AuthAdminController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [AuthAdminController::class, 'store'])->name('admin.postlogin');

Route::get('/login/google', [SocialiteController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/login/google/callback', [SocialiteController::class, 'handleGoogleCallback']);

Route::middleware('auth')->group(function () {

    Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/profile', [DashboardAdminController::class, 'profile']);
    Route::post('/admin/profile/{id}', [DashboardAdminController::class, 'edit_profile']);

    Route::get('/admin/partner', [PartnerController::class, 'index']);
    Route::get('/admin/partner/verifikasi/{id}', [PartnerController::class, 'verifikasi']);
    Route::get('/admin/partner/nonaktif/{id}', [PartnerController::class, 'nonaktif']);
    Route::get('/admin/partner/aktif/{id}', [PartnerController::class, 'aktif']);
    Route::get('/admin/partner/detail/{id}', [PartnerController::class, 'show']);

    Route::get('/admin/jual/{slug}', [PropertiController::class, 'jual']);
    Route::get('/admin/jual/detail/{id}', [PropertiController::class, 'detailjual']);
    Route::get('/admin/sewa/{slug}', [PropertiController::class, 'sewa']);
    Route::get('/admin/sewa/detail/{id}', [PropertiController::class, 'detailsewa']);
    Route::get('/admin/setproperti/{status}/{id}', [PropertiController::class, 'setproperti']);

    Route::resource('/kategori-solution', KategoriSolutionController::class);
    Route::resource('/properti-solution', PropertiSolutionController::class);
    Route::get('/properti-solution/tersedia/{id}', [PropertiSolutionController::class, 'tersedia']);
    Route::get('/properti-solution/nonaktif/{id}', [PropertiSolutionController::class, 'nonaktif']);
    Route::get('/properti-solution/tidaktersedia/{id}', [PropertiSolutionController::class, 'tidaktersedia']);
    Route::get('/foto-solution/create/{id}', [FotoSolutionController::class, "create"]);
    Route::post('/foto-solution', [FotoSolutionController::class, "store"]);
    Route::get('/foto-solution/edit/{id}', [FotoSolutionController::class, "edit"]);
    Route::put('/foto-solution/{id}', [FotoSolutionController::class, "update"]);
    Route::post('/foto-solution/{id}', [FotoSolutionController::class, "destroy"]);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/customer.php';
require __DIR__.'/partner.php';
