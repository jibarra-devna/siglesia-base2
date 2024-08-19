<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicio\InicioController;
use App\Http\Controllers\configuracion\SacerdoteController;
use App\Http\Controllers\configuracion\UsuariosController;

Route::apiResource('/', InicioController::class);
Route::apiResource('/sacerdotes', SacerdoteController::class);
Route::apiResource('/usuarios', UsuariosController::class);
