<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/clientes/create',[ClienteController::class,'create'])->name('clientes.create');
    Route::get('/clientes',[ClienteController::class,'index'])->name('clientes.index');

    Route::resource('libros',LibroController::class)->names('libros');
    Route::resource('categorias',CategoriaController::class)->names('categorias');
});