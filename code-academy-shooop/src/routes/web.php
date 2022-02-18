<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Contacts;
use \App\Http\Controllers\Orders;
use \App\Http\Controllers\Products;

Route::get('/', [Products::class, 'show'])->name('index');
Route::get('/products', [Products::class, 'show'])->name('products');
Route::get('/orders', [Orders::class, 'show'])->name('orders');
Route::get('/contacts', [Contacts::class, 'show'])->name('contacts');
