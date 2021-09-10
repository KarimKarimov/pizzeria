<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ToppingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class,'index']);

// Route::get('/products',[ProductController::class,'index']);
// Route::get('/product/create',[ProductController::class,'create']);

Route::resource('products',ProductController::class);
Route::resource('toppings',ToppingController::class);
Route::resource('categories',CategoryController::class);
Route::resource('orders',OrderController::class);