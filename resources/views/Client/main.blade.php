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

</div>

@endsection