@extends('layouts.main')
@section('subtitulo','Nueva Categoria')
@section('boton-crear')
    <a href="{{ route('categorias.index') }}" class="bg-red-700 text-white px-4 py-2 rounded hover:bg-red-500">
        <i class="fa-solid fa-arrow-left"></i> Regresar
    </a>
@endsection
@section('contenido')
    <form action="{{ route('categorias.store') }}" method="post" class="grid grid-cols-2 gap-4">
        @csrf
        <div class="flex flex-col">
            <label>Nombre</label>
            <input type="text" name="nombre" class="border border-gray-300 rounded px-2 py-1"/>
        </div>
        
        <div class="col-span-2">
            <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-500">
                Guardar
            </button>
        </div>
    </form>
@endsection
