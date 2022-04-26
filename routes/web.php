<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BlogController;
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
// Home
Route::get('/', [MainController::class, 'home'])->name('home');

// Product
Route::get('/product/list/{product_category:slug}/{product_region:slug}/', [MainController::class, 'product'])->name('product');
Route::get('/product/detail/{id}/{product:slug}', [MainController::class, 'product_detail'])->name('product_detail');
Route::get('/product/jateng', [MainController::class, 'product_jateng'])->name('product_jateng');
Route::get('/product/jogja', [MainController::class, 'product_jogja'])->name('product_jogja');

// Blog
Route::get('/blog', [BlogController::class, 'blogList'])->name('blog_list');
Route::get('/blog/marmud', [BlogController::class, 'blogDetail'])->name('blog_detail');
