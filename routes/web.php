<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::post('/products', [ProductController::class, 'store']);
Route::get('/', [ProductController::class, 'index']);
Route::get('/api-view', [ProductController::class, 'apiView']);