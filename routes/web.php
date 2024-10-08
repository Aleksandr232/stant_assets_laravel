<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Pusher\Pusher;
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
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ChatAdminController;
use App\Http\Controllers\AddTextController;
use App\Http\Controllers\SitemapController;
use App\Models\Text;

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
Route::get('/filter', [HomePageController::class, 'get_filter'])->name('get_filter');
Route::get('/filter_platform', [HomePageController::class, 'get_filter_platform'])->name('get_filter_platform');
Route::get('/filter_service', [HomePageController::class, 'get_filter_service'])->name('get_filter_service');
Route::get('/all', [HomePageController::class, 'get_product'])->name('get_product');


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
    Route::resource('/platform', PlatformController::class);
    Route::resource('/chat', ChatAdminController::class);
    Route::post('/update-text', [AddTextController::class, 'storeText'])->name('storeText');
    Route::post('/send-message/{id}/{userId}', [ChatController::class, 'sendMessage'])->name('sendMessageAdmin');
    Route::get('/chat/{userId}/{recipientId}', [ChatController::class, 'getMessages'])->name('getMessagesAdmin');
    Route::get('/user/{id}/data', [DataUserController::class, 'data'])->name('data');
    Route::post('/user/{id}', [DataUserController::class, 'update_data'])->name('update_data');
    Route::post('/user/purchase/{id}', [DataUserController::class, 'update_purchases'])->name('update_purchases');
    Route::post('/create_category', [ProductController::class, 'category'])->name('category');
    Route::post('/create_platform', [PlatformController::class, 'create_platform'])->name('create_platform');
    Route::post('/create_product', [ProductController::class, 'product'])->name('product');
    Route::post('/update_product/{id}', [ProductController::class, 'update_product'])->name('update_product');
    Route::post('/create_filter', [ProductController::class, 'filter'])->name('filter');
    Route::post('/create_blog', [BlogController::class, 'create_blog'])->name('create_blog');
    Route::post('/create_politics', [PoliticsController::class, 'create_politics'])->name('create_politics');
    Route::delete('/delete_product/{id}', [ProductController::class, 'destroy'])->name('destroy');
    Route::get('/sitemap', [SitemapController::class, 'update_dev'])->name('update_dev');
});

Route::prefix('account')->middleware('profile')->group(function () {
    Route::get('/',  [AccountController::class, 'index'])->name('account');
    Route::post('/account/change-password', [AccountController::class, 'changePassword'])->name('changePassword');
    Route::post('/account/add-balance', [AccountController::class, 'addBalance'])->name('addBalance');
    Route::post('/account/add-avatar', [AccountController::class, 'addAvatar'])->name('addAvatar');
    Route::post('/product/{id}/rate', [RatingController::class, 'post_rate'])->name('post_rate');
    Route::post('/purchase/{id}', [PurchaseController::class, 'post_purchase'])->name('post_purchase');
    Route::post('/send-message/{id}/{userId}', [ChatController::class, 'sendMessage'])->name('sendMessage');
    Route::get('/all-users', [ChatController::class, 'getAllUsers'])->name('getAllUsers');
    Route::get('/chat/{userId}/{recipientId}', [ChatController::class, 'getMessages'])->name('getMessages');

});

Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/404', function () {

    $text = Text::all();

    return view('site.errors.404', compact('text'), ['scrollToError' => true]);

})->name('404');
