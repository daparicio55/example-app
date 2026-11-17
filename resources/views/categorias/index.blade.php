@extends('layouts.main')
@section('subtitulo','categorias')
@section('boton-crear')
<a href="{{ route('categorias.create') }}" class="bg-cyan-700 text-white px-4 py-2 rounded hover:bg-cyan-500">Crear categoria</a>
@endsection
@section('contenido')
<h1>Lista de categorias</h1>
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
            <th class="py-2 text-left px-2 ">Nombre</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
            <tr>
                <td class="px-2 border-b border-gray-300 border-l border-r">{{ $categoria->nombre }}</td>
                <td class="px-2 py-2 flex space-x-1">
                    <a href="{{ route('categorias.edit',$categoria->id) }}" class="px-4 py-1 bg-green-600 text-white rounded">
                        Editar
                    </a>
                    <button type="button" class="rounded px-4 py-1 bg-red-600 text-white" 
                        onclick="document.getElementById('modal-delete-{{ $categoria->id }}').classList.remove('hidden')">
                        Eliminar
                    </button>
                    <div class="fixed inset-0 bg-black/30 z-50 flex items-center justify-center hidden" id="modal-delete-{{ $categoria->id }}"> <!--CONFIRMAR ELIMINAR -->
                        <div class="bg-white p-5 rounded shadow-lg"><!-- Contenido del MOdal -->
                            <h1 class="bg-red-400 p-2 rounded">Confirmar Eliminación</h1>
                            <p class="px-2 mt-4 mb-4">
                                ¿Estás seguro de que deseas eliminar la categoria "{{ $categoria->nombre }}"?
                            </p>
                            <div class="bg-gray-200 p-2 rounded flex justify-end space-x-2">
                                <button class="px-4 py-1 bg-gray-400 text-white rounded" onclick="document.getElementById('modal-delete-{{ $categoria->id }}').classList.add('hidden')">Cancelar</button>
                                <form action="{{ route('categorias.destroy',$categoria->id) }}" method="post">
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