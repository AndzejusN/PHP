<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/v1')->name('api.')->group(function(){
    Route::prefix('/products')->name('products.')->group(function(){
Route::get('/',[Controllers\Api\V1\Products\ProductController::class, 'index']);
Route::post('/create',[Controllers\Api\V1\Products\ProductController::class, 'create']);
Route::get('/categories',[Controllers\Api\V1\Products\ProductCategoryController::class, 'index']);
    });
});
