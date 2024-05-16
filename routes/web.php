<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\FitController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('send');
Route::get('/men', [ProductController::class, 'index'])->name('men');
Route::get('/women', [ProductController::class, 'index'])->name('women');
Route::get('/kids', [ProductController::class, 'index'])->name('kids');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product');

Route::middleware('IsGuest')->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('doLogin');
    Route::get('/registration', [RegisterController::class, 'index'])->name('registration');
    Route::post('/registration', [RegisterController::class, 'register'])->name('register');
});

Route::middleware('IsUser')->group(function(){
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/cart/addToCart', [CartController::class, 'addToCart'])->name('addToCart');
    Route::get('/showCart', [CartController::class, 'showCart'])->name('showCart');
    Route::post('/cart/buy', [CartController::class, 'buy'])->name('buy');
    Route::delete('/cart/delete', [CartController::class, 'delete'])->name('cart.delete');
    Route::get('/cart/bought', [CartController::class, 'bought'])->name('bought');
});

Route::middleware('IsAdmin')->group(function(){

    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/create', [ProductController::class, 'create'])->name('admin.create');
    Route::post('/admin', [ProductController::class, 'store'])->name('admin.store');
    Route::get('/admin/{id}/edit', [ProductController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/{id}', [ProductController::class, 'update'])->name('admin.update');
    Route::delete('/product/delete', [ProductController::class, 'delete'])->name('product.delete');
    Route::get('/filterActivities', [AdminController::class, 'filterActivities'])->name('filterActivities');


    Route::post('/category/insert', [CategoryController::class, 'insert'])->name('category.insert');
    Route::delete('/category/delete', [CategoryController::class, 'delete'])->name('category.delete');
    Route::put('/category/update', [CategoryController::class, 'update'])->name('category.update');

    Route::post('/brand/insert', [BrandController::class, 'insert'])->name('brand.insert');
    Route::delete('/brand/delete', [BrandController::class, 'delete'])->name('brand.delete');
    Route::put('/brand/update', [BrandController::class, 'update'])->name('brand.update');

    Route::post('/fit/insert', [FitController::class, 'insert'])->name('fit.insert');
    Route::delete('/fit/delete', [FitController::class, 'delete'])->name('fit.delete');
    Route::put('/fit/update', [FitController::class, 'update'])->name('fit.update');
});
