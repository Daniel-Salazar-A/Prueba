@extends('layouts.app')
@section('content')

@if(session('success'))
    <div class="container mt-3">
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    </div>
@endif

<div class="container mt-4">

    <h2 class="text-center mb-4">Productos Disponibles</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->descripcion }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">
                        No hay registros
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

@endsection