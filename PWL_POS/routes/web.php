<?php

use App\Http\Controllers\LevelController;
use Illuminate\Support\Facades\Route;
use Monolog\Level;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
