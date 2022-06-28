<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\IngredientsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SkinController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::middleware('auth')
    ->as('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

        Route::resource('brands', BrandController::class);
        Route::resource('products', ProductController::class);

        Route::resource('products.skins', SkinController::class);
        Route::resource('products.purposes', IngredientsController::class)
            ->parameters([
                'purpose' => 'ingredient'
            ]);
    });
