<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('app');
});

//Lista de registros
Route::get('/clientes', [ClienteController::class,'index'])->name('clientes.index');

//Creación de registros
Route::get('/clientes/create', [ClienteController::class,'create'])->name('clientes.create');

//Insertar registros
Route::post('/clientes', [ClienteController::class,'store'])->name('clientes.store');

//Detalle de registros
Route::get('/clientes/{id}', [ClienteController::class,'show'])->name('clientes.show');

//Editar registros
Route::get('/clientes/edit/{id}', [ClienteController::class,'edit'])->name('clientes.edit');

//Actualizar registros
Route::put('/clientes/{id}', [ClienteController::class,'update'])->name('clientes.update');

//Borrar registros
Route::delete('/clientes/{id}', [ClienteController::class,'destroy'])->name('clientes.destroy');
