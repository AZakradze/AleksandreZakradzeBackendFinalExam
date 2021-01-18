<?php

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


Auth::routes();
Route::post('/category/add', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.add');
Route::post('/product/add', [App\Http\Controllers\ProductController::class, 'store'])->name('product.add');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'indexa'])->name('main');
Route::get('product/show/{product}',  [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
Route::post('like/add/{product}',  [App\Http\Controllers\ProductController::class, 'addlike'])->name('like.add');
