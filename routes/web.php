<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', [UsuarioController::class, 'formulario']);
Route::post('/usuarios/nuevo', [UsuarioController::class, 'registrar']);
Route::get('/usuarios', [UsuarioController::class, 'listar']);
Route::get('/usuarios/buscar/{campo}/{valor}', [UsuarioController::class, 'buscar']);
