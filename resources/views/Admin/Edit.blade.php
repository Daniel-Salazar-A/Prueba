@extends("layouts.app")

@section("content")

    <div class="container mt-5">
        <h1>Editar Producto</h1>
        <form action="{{ route('updateProduct', $producto->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" id="name" name="nombre" value="{{ $producto->nombre }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="descripcion" rows="3" required>{{ $producto->descripcion }}</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="number" step="0.01" class="form-control" id="price" name="precio" value="{{ $producto->precio }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Imagen del Producto</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" mt-3 class="btn btn-primary">Actualizar Producto</button>
        </form>
    </div>

@endsection