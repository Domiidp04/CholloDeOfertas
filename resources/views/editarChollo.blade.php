@extends('plantilla')

@section('editar')
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

            <!-- Formulario para editar un chollo -->
            <form action="{{ route('chollos.update', $chollo->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $chollo->titulo }}" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" required>{{ $chollo->descripcion }}</textarea>
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="url" class="form-control" id="url" name="url" value="{{ $chollo->url }}" required>
                </div>
                <div class="form-group">
                    <label for="categoria">Categoría</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" value="{{ $chollo->categoria }}" required>
                </div>
                <div class="form-group">
                    <label for="puntuacion">Puntuación</label>
                    <input type="number" class="form-control" id="puntuacion" name="puntuacion" value="{{ $chollo->puntuacion }}" required>
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ $chollo->precio }}" required>
                </div>
                <div class="form-group">
                    <label for="precio_descuento">Precio con descuento</label>
                    <input type="number" step="0.01" class="form-control" id="precio_descuento" name="precio_descuento" value="{{ $chollo->precio_descuento }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar Chollo</button>
            </form>
        </div>
    </div>
</div>
@endsection
