<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController as ComicController;
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
    return view('home');
})->name("home");

Route::get('/products', [ComicController::class, 'index'])->name('products.index');
Route::get('/products/create', [ComicController::class, 'create'])->name('products.create');
Route::get('/products/{id}', [ComicController::class, 'show'])->name('products.show');
