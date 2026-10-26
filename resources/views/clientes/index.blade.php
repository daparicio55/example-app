@extends('layouts.main')
@section('subtitulo','Clientes')
@section('contenido')
    <div class="p-6">
        <h1>Lista de Clientes</h1>
        <div class="w-full">
            <table class="table-auto w-full">
                <thead>
                    <th>DNI</th>
                    <th>Apellidos</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Telefono</th>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->dni }}</td>
                            <td>{{ $cliente->apellido }}</td>
                            <td>{{ $cliente->nombre }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->telefono }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>  
@endsection