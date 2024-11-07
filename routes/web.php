<?php

use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaplatoController;
use App\Http\Controllers\PlatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('usuario/index');
});

Route::resource("inscripcion", InscripcionController::class);
Route::resource("usuario", UsuarioController::class);
Route::resource("administrador_categoria", CategoriaplatoController::class);
Route::resource("plato", PlatoController::class);