@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Registro de Usuario</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('client.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Correo electrónico</label>
                            <input type="email" name="correo" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Número de teléfono</label>
                            <input type="tel" name="telefono" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Contraseña</label>
                            <input type="password" name="contraseña" class="form-control" required>
                        </div>

                        <input type="hidden" name="rol" value="0">

                        <button type="submit" class="btn btn-success w-100">
                            Registrarse
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection