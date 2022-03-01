<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Contacts;
use \App\Http\Controllers\Orders;
use \App\Http\Controllers\Products;
use \App\Http\Controllers\Login;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [Products::class, 'show'])->name('index');
Route::get('/products', [Products::class, 'show'])->name('products');
Route::get('/products/create', [Products::class, 'create'])->name('products.create');
Route::get('/products/{product}', [Products::class, 'visualisation'])->name('products.visualisation');
Route::get('/orders', [Orders::class, 'show'])->name('orders');
Route::get('/contacts', [Contacts::class, 'show'])->name('contacts');
Route::get('/login', [Login::class, 'show'])->name('login');
