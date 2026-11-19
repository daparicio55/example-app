<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/clientes/create',[ClienteController::class,'create'])->name('clientes.create');

Route::get('/clientes',[ClienteController::class,'index'])->name('clientes.index');


Route::get('/libros/{id}/edit',[LibroController::class,'edit'])->name('libros.edit');

Route::put('/libros/{id}',[LibroController::class,'update'])->name('libros.update');

Route::get('/libros/create',[LibroController::class,'create'])->name('libros.create');

Route::get('/libros',[LibroController::class,'index'])->name('libros.index');

Route::post('/libros',[LibroController::class,'store'])->name('libros.store');

Route::delete('/libros/{id}',[LibroController::class,'destroy'])->name('libros.destroy');


Route::get('/categorias/{id}/edit',[CategoriaController::class,'edit'])->name('categorias.edit');

Route::put('/categorias/{id}',[CategoriaController::class,'update'])->name('categorias.update');

Route::get('/categorias/create',[CategoriaController::class,'create'])->name('categorias.create');

Route::get('/categorias',[CategoriaController::class,'index'])->name('categorias.index');

Route::post('/categorias',[CategoriaController::class,'store'])->name('categorias.store');

Route::delete('/categorias/{id}',[CategoriaController::class,'destroy'])->name('categorias.destroy');

