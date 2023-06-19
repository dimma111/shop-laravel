<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/catalog', [MainController::class, 'catalog'])->name('catalog');
Route::get('/catalog/{category}', [MainController::class, 'category'])->name('category');
Route::get('/catalog/{category}/{product?}', [MainController::class, 'product'])->name('product');


Route::get('/basket', [MainController::class, 'basket'])->name('basket');
Route::get('/basket/place', [MainController::class, 'basketPlace'])->name('basket-place');







