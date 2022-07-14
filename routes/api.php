<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;

// Route::get('/', function() {
//     return response('Product');
// });

// ROUTES PRODUCT
Route::get('product', [ProductController::class, 'index']);
Route::post('product/create', [ProductController::class, 'create']);
Route::put('product/update/{id}', [ProductController::class, 'update']);
Route::get('product/show/{id}', [ProductController::class, 'show']);
Route::delete('product/{id}/delete', [ProductController::class, 'delete']);

// ROUTES STORE
Route::get('store/{id}', [StoreController::class, 'index']);
Route::post('store/create', [StoreController::class, 'create']);
Route::put('store/update/{id}', [StoreController::class, 'update']);
Route::put('store/show/{id}', [StoreController::class, 'show']);
Route::delete('store/{id}/delete', [StoreController::class, 'delete']);
