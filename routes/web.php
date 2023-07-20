<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/post', [PostController::class,'index']);
Route::get('/post-detail/{id}', [PostController::class,'show']);
Route::get('/product', [ProductController::class,'index']);
Route::get('/product-category/{id}', [ProductController::class,'product_cate']);
Route::get('/product-detail/{id}', [ProductController::class,'show']);
Route::get('/cart', [CartController::class,'index']);
Route::post('/addCart', [CartController::class,'addCart']);
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
});

Route::middleware(['auth','authadmin'])->group(function () {
    Route::get('/a',[AuthenticatedSessionController::class,'store']);
});

require __DIR__.'/auth.php';
