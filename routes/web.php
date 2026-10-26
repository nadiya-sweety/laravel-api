<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('products', ProductController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'Nama: Nurul Hidayati | NIM: 2455201063';
});

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');