<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\FooterController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.        ');
});

Route::resource('/products', ProductsController::class);
Route::resource('/banners', BannersController::class);
Route::resource('/abouts', AboutController::class);
Route::resource('/footers', FooterController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/detail', function () {
    return view('frontend.detail');
});

Route::get('/shop', function () {
    return view('frontend.shop');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/success', function () {
    return view('frontend.pembayaran_berhasil');
});

Route::get('/account', function () {
    return view('frontend.akun');
});

Route::get('/cart', function () {
    return view('frontend.keranjang');
});

Route::get('/login-admin', function () {
    return view('');
});
Route::get('/register-admin', function () {
    return view('');
});
require __DIR__ . '/auth.php';


// ->middleware(['auth', 'verified']);

// ->middleware(['auth', 'verified'])->name('dashboard');
