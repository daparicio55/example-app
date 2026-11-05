<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LibroController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/clientes/create',[ClienteController::class,'create'])->name('clientes.create');

Route::get('/clientes',[ClienteController::class,'index'])->name('clientes');

Route::get('/libros/{id}/edit',[LibroController::class,'edit'])->name('libros.edit');

Route::put('/libros/{id}',[LibroController::class,'update'])->name('libros.update');

Route::get('/libros/create',[LibroController::class,'create'])->name('libros.create');

Route::get('/libros',[LibroController::class,'index'])->name('libros');

Route::post('/libros',[LibroController::class,'store'])->name('libros.store');

Route::delete('/libros/{id}',[LibroController::class,'destroy'])->name('libros.destroy');