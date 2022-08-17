<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PcConfiguratorController;
use App\Http\Controllers\ProductController;
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

// home
Route::get('/', [PcConfiguratorController::class, 'read'])->name('pcConfigurator');

// about
Route::get('old/about', [AboutController::class, 'oldRead'])->name('oldAbout');
Route::get('about', [AboutController::class, 'read'])->name('about');

// cart
Route::get('cart', [CartController::class, 'read'])->name('cart');

// brand
Route::get('brands', [BrandController::class, 'readBrands'])->name('brands');
Route::get('brand/{id}', [BrandController::class, 'readBrand'])->name('brand');


Route::get('products', [ProductController::class, 'readProductTypes'])->name('productTypes');
Route::get('products/{product}', [ProductController::class, 'readProducts'])->name('products');
Route::get('product/{product}/{id}', [ProductController::class, 'readProduct'])->name('product');

// Delete and Add
Route::get('addProduct/{product}/{id}', [ProductController::class, 'create'])->name('addProduct');
Route::get('deleteProduct/{product}', [ProductController::class, 'delete'])->name('deleteProduct');
