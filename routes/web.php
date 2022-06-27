<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\ProductController as UserProductController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products/recommend', [UserProductController::class, 'create'])->name('user.products.recommend');
Route::post('/products/recommend', [UserProductController::class, 'store'])->name('user.products.recommend.store');
Route::get('/products', [UserProductController::class, 'index'])->name('user.products');

Route::middleware('auth')
    ->as('admin.')
    ->prefix('admin')
    ->group(function () {
        // Route::view('about', 'about')->name('about');
        Route::resource('brands', BrandController::class);
        Route::resource('products', ProductController::class);
    });
