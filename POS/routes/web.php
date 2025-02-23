<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/halo', function () {
    return 'hai';
});

Route::get('user/{id}/name/{name}', [App\Http\Controllers\UserController::class, 'index']);

Route::get('/payment', [App\Http\Controllers\PaymentController::class,'index']);

Route::prefix('category')->group(function () {
    Route::get('/baby-kid', [App\Http\Controllers\CategoryController::class, 'kids']);
    Route::get('/beauty-health', [App\Http\Controllers\CategoryController::class, 'beauty']);
    Route::get('/home-care', [App\Http\Controllers\CategoryController::class, 'home']);
    Route::get('/food-beverage', [App\Http\Controllers\CategoryController::class, 'food']);
});