<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('products', ProductsController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'Nama: Nadiyatul Anjaly | NIM: 2455201056';
});

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');