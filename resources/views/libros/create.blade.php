@extends('layouts.main')
@section('subtitulo','Nuevo Libro')
@section('boton-crear')
    <a href="{{ route('libros.index') }}" class="bg-red-700 text-white px-4 py-2 rounded hover:bg-red-500">
        <i class="fa-solid fa-arrow-left"></i> Regresar
    </a>
@endsection
@section('contenido')
    <form action="{{ route('libros.store') }}" method="post" class="grid grid-cols-2 gap-4">
        @csrf
        <div class="flex flex-col">
            <label>Titulo</label>
            <input type="text" name="titulo" class="border border-gray-300 rounded px-2 py-1" value="{{ old('titulo') }}"/>
            @error('titulo')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col">
            <label>Precio</label>
            <input type="text" name="precio" class="border border-gray-300 rounded px-2 py-1" value="{{ old('precio') }}"/>
            @error('precio')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col">
            <label>Codigo SBN</label>
            <input type="text" name="codigo_sbn" class="border border-gray-300 rounded px-2 py-1" value="{{ old('codigo_sbn') }}"/>
            @error('codigo_sbn')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col">
            <label>Fecha Publicación</label>
            <input type="date" name="fecha_publicacion" class="border border-gray-300 rounded px-2 py-1" value="{{ old('fecha_publicacion') }}"/>
            @error('fecha_publicacion')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col">
            <label>Categoria</label>
            <select name="categoria_id" class="border border-gray-300 rounded px-2 py-1">
                <option value="">Seleccione una categoria</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" @if(old('categoria_id') == $categoria->id) selected @endif>{{ $categoria->nombre }}</option>
                @endforeach
            </select>
            @error('categoria_id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col">
            <label>Autor</label>
            <select name="autore_id" class="border border-gray-300 rounded px-2 py-1">
                <option value="">Seleccione un autor</option>
                @foreach($autores as $autore)
                    <option value="{{ $autore->id }}" @if(old('autore_id') == $autore->id) selected @endif>{{ $autore->nombre }}</option>
                @endforeach
            </select>
            @error('autore_id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-500">
                Guardar
            </button>
        </div>
    </form>
@endsection
