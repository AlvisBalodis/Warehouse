<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::controller(ProductController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/products', 'index');
    Route::get('/products/create', 'create');
    Route::post('/products', 'store');
    Route::get('/products/{product}', 'show');
    Route::delete('/products/{product}', 'destroy');
});

Route::controller(CustomerController::class)->group(function () {
    Route::get('/customers', 'index');
    Route::get('/customers/create', 'create');
    Route::post('/customers', 'store');
    Route::get('/customers/{customer}', 'edit');
    Route::put('/customers/{customer}', 'update');
});
