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
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
            <tr>
                <td class="px-2 border-b border-gray-300 border-l border-r">{{ $libro->titulo }}</td>
                <td class="px-2 border-b border-gray-300 border-r">{{ $libro->precio }}</td>
                <td class="px-2 border-b border-gray-300 border-r">{{ $libro->codigo_sbn }}</td>
                <td class="px-2 border-b border-gray-300 border-r">{{ $libro->fecha_publicacion }}</td>
                <td class="px-2 py-2 flex space-x-1">
                    <a href="{{ route('libros.edit',$libro->id) }}" class="px-4 py-1 bg-green-600 text-white rounded">
                        Editar
                    </a>
                    <button type="button" class="rounded px-4 py-1 bg-red-600 text-white" 
                        onclick="document.getElementById('modal-delete-{{ $libro->id }}').classList.remove('hidden')">
                        Eliminar
                    </button>
                    <div class="fixed inset-0 bg-black/30 z-50 flex items-center justify-center hidden" id="modal-delete-{{ $libro->id }}"> <!--CONFIRMAR ELIMINAR -->
                        <div class="bg-white p-5 rounded shadow-lg"><!-- Contenido del MOdal -->
                            <h1 class="bg-red-400 p-2 rounded">Confirmar Eliminación</h1>
                            <p class="px-2 mt-4 mb-4">
                                ¿Estás seguro de que deseas eliminar el libro"
                            </p>
                            <div class="bg-gray-200 p-2 rounded flex justify-end space-x-2">
                                <button class="px-4 py-1 bg-gray-400 text-white rounded" onclick="document.getElementById('modal-delete-{{ $libro->id }}').classList.add('hidden')">Cancelar</button>
                                <form action="{{ route('libros.destroy',$libro->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-1 bg-red-600 text-white rounded">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection