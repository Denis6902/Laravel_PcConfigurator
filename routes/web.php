<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PcConfiguratorController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;


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


Route::get('/', [PcConfiguratorController::class, 'read'])->name('pcConfigurator');
Route::get('switchTheme', [PcConfiguratorController::class, 'updateTheme'])->name('switchTheme');
Route::get('about', [AboutController::class, 'read'])->name('about');
Route::get('addProduct/{product}/{id}', [ProductController::class, 'create'])->name('addProduct');
Route::get('deleteProduct/{product}', [ProductController::class, 'delete'])->name('deleteProduct');
Route::get('brand/{id}', [BrandController::class, 'read'])->name('brand');
Route::get('products/{product}', [ProductController::class, 'readProducts'])->name('products');
Route::get('product/{product}/{id}', [ProductController::class, 'readProduct'])->name('product');

