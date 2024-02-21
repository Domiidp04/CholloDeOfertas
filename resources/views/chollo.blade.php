@extends('plantilla')

@section('chollo')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card text-center">
                <!-- Asegúrate de que 'ruta_de_la_imagen' apunta a la ubicación correcta de la imagen del chollo -->
                <img class="card-img-top mx-auto d-block" src="{{ asset('imagenes/' . $chollo->id . '-chollo-ofertas.jpg') }}" alt="Imagen del chollo" style="max-width: 200px; height: auto;">
                <div class="card-body">
                    <h5 class="card-title">{{ $chollo->titulo }}</h5>
                    <p class="card-text">{{ $chollo->descripcion }}</p>
                    <p class="card-text">Categoría: {{ $chollo->categoria }}</p>
                    <p class="card-text">Puntuación: {{ $chollo->puntuacion }}</p>
                    <p class="card-text">Precio: <del>{{ $chollo->precio }}</del></p>
                    <p class="card-text">Precio con descuento: {{ $chollo->precio_descuento }}</p>
                    <a href="{{ $chollo->url }}" class="btn btn-primary">Ir al chollo</a>
                    <a href="/chollos/{{ $chollo->id }}/edit" class="btn btn-warning">Editar</a>
                    <form action="/chollos/{{ $chollo->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
