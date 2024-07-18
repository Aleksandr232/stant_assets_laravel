<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProductController;
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


Route::get('/', [HomePageController::class, 'index'])->name('home');


Route::middleware('guest')->group(function () {
    Route::get('/auth', [AuthController::class, 'authorization'])->name('auth');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/login/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('/google/callback', [AuthController::class, 'handleGoogleCallback']);

});



Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/',  [AdminController::class, 'index'])->name('admin');
    Route::resource('/product', ProductController::class);
    Route::post('/create_category', [ProductController::class, 'category'])->name('category');
    Route::post('/create_product', [ProductController::class, 'product'])->name('product');
    Route::post('/create_filter', [ProductController::class, 'filter'])->name('filter');
});

Route::prefix('account')->middleware('profile')->group(function () {
    Route::get('/',  [AccountController::class, 'index'])->name('account');
    Route::post('/chat/send-message', [AccountController::class, 'sendMessage']);

});

Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/404', function () {
    return view('site.errors.404');
})->name('404');
