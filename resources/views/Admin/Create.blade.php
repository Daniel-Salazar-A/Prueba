@extends("layouts.app")

@section("content")
    div class="container mt-5">
        <h1>Crear Producto</h1>
        <form action="{{ route('storeProduct') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="name" class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" id="name" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="descripcion" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="number" step="0.01" class="form-control" id="price" name="precio" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Imagen del Producto</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" mt-3 class="btn btn-primary">Crear Producto</button>
        </form>
@endsection