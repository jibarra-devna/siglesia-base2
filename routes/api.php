<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\configuracion\SacerdoteController;


Route::apiResource('/sacerdotes', SacerdoteController::class);
