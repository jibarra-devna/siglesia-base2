<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\SacerdoteController;

//Route::get('/users', [PruebaController::class, 'index']);
Route::apiResource('/sacerdotes', SacerdoteController::class);
//Route::get('/test', [PruebaController::class, 'index']);