<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PcConfiguratorController;
use App\Http\Controllers\AboutController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('pcconfigurator', [PcConfiguratorController::class, 'index'])->name('pc-configurator');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('products/{product}', [ProductController::class, 'index'])->name('product');

