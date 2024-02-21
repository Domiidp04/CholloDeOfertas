@extends('plantilla')

@section('landing')
<div class="container">
    <div class="row">
        @foreach($chollos as $chollo)
        <div class="col-sm-4">
            <div class="card">
                <!-- Asegúrate de que 'ruta_de_la_imagen' apunta a la ubicación correcta de la imagen del chollo -->
                <a href="/chollos/{{ $chollo->id }}">
                    <img class="card-img-top" src="{{ asset('imagenes/' . $chollo->id . '-chollo-ofertas.jpg') }}" alt="Imagen del chollo">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $chollo->titulo }}</h5>
                    <p class="card-text">{{ $chollo->descripcion }}</p>
                    <a href="{{ $chollo->url }}" class="btn btn-primary">Ir al chollo</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
