<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\ServicioController;
use Illuminate\Support\Facades\Route;

Route::resource('clientes', ClienteController::class);
Route::resource('marcas', MarcaController::class);
Route::resource('tecnicos', TecnicoController::class);
Route::resource('equipos', EquipoController::class);
Route::resource('servicios', ServicioController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
