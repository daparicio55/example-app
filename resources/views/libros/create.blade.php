@extends('layouts.main')
@section('subtitulo','Nuevo Libro')
@section('boton-crear')
    <a href="{{ route('libros') }}" class="bg-red-700 text-white px-4 py-2 rounded hover:bg-red-500">
        <i class="fa-solid fa-arrow-left"></i> Regresar
    </a>
@endsection
@section('contenido')
    <form action="{{ route('libros.store') }}" method="post" class="grid grid-cols-2 gap-4">
        @csrf
        <div class="flex flex-col">
            <label>Titulo</label>
            <input type="text" name="titulo" class="border border-gray-300 rounded px-2 py-1"/>
        </div>
        <div class="flex flex-col">
            <label>Precio</label>
            <input type="text" name="precio" class="border border-gray-300 rounded px-2 py-1"/>
        </div>
        <div class="flex flex-col">
            <label>Codigo SBN</label>
            <input type="text" name="codigo_sbn" class="border border-gray-300 rounded px-2 py-1"/>
        </div>
        <div class="flex flex-col">
            <label>Fecha Publicación</label>
            <input type="date" name="fecha_publicacion" class="border border-gray-300 rounded px-2 py-1"/>
        </div>
        <div>
            <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-500">
                Guardar
            </button>
        </div>
    </form>
@endsection
