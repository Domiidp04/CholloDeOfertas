@extends('plantilla')

@section('crear')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <!-- Muestra los mensajes de error en la parte superior de la página -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Formulario para crear un nuevo chollo -->
            <form action="/" method="POST">
                @csrf
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="url" class="form-control" id="url" name="url" required>
                </div>
                <div class="form-group">
                    <label for="categoria">Categoría</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" required>
                </div>
                <div class="form-group">
                    <label for="puntuacion">Puntuación</label>
                    <input type="number" class="form-control" id="puntuacion" name="puntuacion" required>
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
                </div>
                <div class="form-group">
                    <label for="precio_descuento">Precio con descuento</label>
                    <input type="number" step="0.01" class="form-control" id="precio_descuento" name="precio_descuento" required>
                </div>
                <button type="submit" class="btn btn-primary">Crear Chollo</button>
            </form>
        </div>
    </div>
</div>
@endsection
