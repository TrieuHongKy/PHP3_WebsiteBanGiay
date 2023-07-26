<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReceiptController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/post', [PostController::class,'index']);
Route::get('/post-detail/{slug}', [PostController::class,'show']);
Route::get('/product', [ProductController::class,'index']);
Route::get('/product/{slug}', [ProductController::class,'showProductByCate']);
Route::get('/product-detail/{slug}', [ProductController::class,'show']);
Route::post('/addCart', [CartController::class,'store']);
Route::get('/cart', [CartController::class,'show']);
Route::get('/receipt', [CartController::class,'receipt']);
Route::get('/about', function () {
    return view('client/pages/about');
});
Route::get('/contact', function () {
    return view('client/pages/contact');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('cart',CartController::class);
    Route::resource('/receipt',ReceiptController::class);
});

Route::middleware(['auth','authadmin'])->group(function () {
    Route::get('/a',[AuthenticatedSessionController::class,'store']);
});

require __DIR__.'/auth.php';
