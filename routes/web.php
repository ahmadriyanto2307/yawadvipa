<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/product/{product_category}/{product_name}', [MainController::class, 'product_list'])->name('product_list');
Route::get('/product/jateng', [MainController::class, 'product_jateng'])->name('product_jateng');
Route::get('/product/jogja', [MainController::class, 'product_jogja'])->name('product_jogja');
