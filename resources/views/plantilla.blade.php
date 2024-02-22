<!DOCTYPE html>
<html>
<head>
    <title>Chollo Ofertas</title>
    <!-- Asegúrate de incluir Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            padding-top: 100px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center fixed-top">
        <!-- Aquí está tu logo -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('resources/logo-letras.png') }}" width="250" height="40" alt="Logo">
        </a>
        <!-- Aquí está tu barra de navegación -->
        <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nuevos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Destacados</a>
                </li>
            </ul>
        </div>
        <!-- Aquí está tu botón para crear un nuevo chollo -->
        <div class="navbar-nav">
            <a class="nav-link btn btn-success" href="/chollos/create">Crear Chollo</a>
        </div>
    </nav>

    @yield('landing')

    @yield('chollo')

    @yield('crear')

    @yield('editar')


    <footer class="footer">
        <div class="container text-center">
            <p>Domingo Dominguez Peinado © CholloOfertas {{ date('Y') }}.</p>
        </div>
    </footer>


<!-- Asegúrate de incluir jQuery y Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
