<?php

//use Proyecto SIGLESIA
use App\Http\Controllers\inicio\InicioController;
use App\Http\Controllers\modulos\librosparroquiales\ResumenController;
use App\Http\Controllers\modulos\librosparroquiales\BautismosController;
use App\Http\Controllers\modulos\librosparroquiales\AgregarBautismoController;
use App\Http\Controllers\configuracion\SacerdoteController;
use App\Http\Controllers\configuracion\UsuariosController;

// rutas para el pdf
Route::get('/sacerdotes/pdf/{id}', [SacerdoteController::class, 'generatePdf']);

// Ruta Inicio
Route::get('/', [InicioController::class, 'index'])->name('inicio');

// Rutas Libros Parroquiales
Route::get('/librosparroquiales/resumen', [ResumenController::class, 'index'])->name('librosparroquiales-resumen');
Route::get('/librosparroquiales/bautismos', [BautismosController::class, 'index'])->name('librosparroquiales-bautismos');
Route::get('/librosparroquiales/bautismos/agregar', [AgregarBautismoController::class, 'index'])->name('librosparroquiales-agregarbautismo');

//Rutas Configuracion
//Route::get('/configuracion/sacerdotes', [SacerdoteController::class, 'index'])->name('configuracion-sacerdotes');
Route::get('/configuracion/sacerdotes', function () {
    return view('content.configuracion.sacerdotes'); // Vista principal que renderiza tu componente Vue.js
})->name('configuracion-sacerdotes');
Route::get('/configuracion/usuarios', [UsuariosController::class, 'index']);
Route::get('/configuracion/usuarios', function () {
    return view('content.configuracion.usuarios'); // Vista principal que renderiza tu componente Vue.js
})->name('configuracion-usuarios');