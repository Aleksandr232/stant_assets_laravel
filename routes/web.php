<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PoliticsController;
use App\Http\Controllers\DataUserController;

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
Route::get('/product/{id}/{name}', [OrderController::class, 'order'])->name('order');
Route::get('/product_category/{id}/{name}', [ProductCategoryController::class, 'product_category'])->name('product_category');
Route::get('/blog/{id}/{name}', [BlogController::class, 'blog'])->name('blog');
Route::get('/politics/{id}', [PoliticsController::class, 'politics'])->name('politics');

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
    Route::resource('/blog', BlogController::class);
    Route::resource('/politics', PoliticsController::class);
    Route::resource('/users', DataUserController::class);
    Route::get('/user/{id}/data', [DataUserController::class, 'data'])->name('data');
    Route::post('/user/{id}', [DataUserController::class, 'update_data'])->name('update_data');
    Route::post('/create_category', [ProductController::class, 'category'])->name('category');
    Route::post('/create_product', [ProductController::class, 'product'])->name('product');
    Route::post('/create_filter', [ProductController::class, 'filter'])->name('filter');
    Route::post('/create_blog', [BlogController::class, 'create_blog'])->name('create_blog');
    Route::post('/create_politics', [PoliticsController::class, 'create_politics'])->name('create_politics');
    Route::delete('/delete_product/{id}', [ProductController::class, 'destroy'])->name('destroy');
});

Route::prefix('account')->middleware('profile')->group(function () {
    Route::get('/',  [AccountController::class, 'index'])->name('account');
    Route::post('/account/change-password', [AccountController::class, 'changePassword'])->name('changePassword');
    Route::post('/account/add-balance', [AccountController::class, 'addBalance'])->name('addBalance');
    Route::post('/chat/send-message', [AccountController::class, 'sendMessage']);
    Route::post('/product/{id}/rate', [RatingController::class, 'post_rate'])->name('post_rate');
    Route::post('/purchase/{id}', [PurchaseController::class, 'post_purchase'])->name('post_purchase');
});

Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/404', function () {
    return view('site.errors.404', ['scrollToError' => true]);
})->name('404');
