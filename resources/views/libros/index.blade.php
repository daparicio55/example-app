@extends('layouts.main')
@section('subtitulo','Libros')
@section('boton-crear')
    <a href="{{ route('libros.create') }}" class="bg-cyan-700 text-white px-4 py-2 rounded hover:bg-cyan-500">Crear Libro</a>
@endsection
@section('contenido')
    <h1>Lista de Libros</h1>
    @if(session('correcto'))
       <div class="bg-green-500 text-white px-4 py-2 rounded mb-4">
         {{ session('correcto') }}
       </div> 
    @endif
    @if(session('error'))
       <div class="bg-red-500 text-white px-4 py-2 rounded mb-4">
         {{ session('error') }}
       </div> 
    @endif
    <div class="w-full overflow-auto">
        <table class="min-w-full shadow-2xs bg-white rounded overflow-hidden">
            <thead class="bg-gray-200 border border-gray-300">
                <th class="py-2 text-left px-2  ">Título</th>
                <th class="py-2 text-left px-2">Precio</th>
                <th class="py-2 text-left px-2">Código SBN</th>
                <th class="py-2 text-left px-2">Fecha Publicación</th>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                    <tr>
                        <td class="px-2 border-b border-gray-300 border-l border-r">{{ $libro->titulo }}</td>
                        <td class="px-2 border-b border-gray-300 border-r">{{ $libro->precio }}</td>
                        <td class="px-2 border-b border-gray-300 border-r">{{ $libro->codigo_sbn }}</td>
                        <td class="px-2 border-b border-gray-300 border-r">{{ $libro->fecha_publicacion }}</td>
                    </tr>                    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection