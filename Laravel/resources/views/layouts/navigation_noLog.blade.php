<!--Main NavBar-->

<!-- Bootstrap CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg bg-light" >
    <div class="container-fluid">
        <a class="navbar-brand mb-0 h1" href="#">Encuesta Seguimiento Menstrual</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <!--
                @if (!Auth::guest())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Seleccionar Etapa
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Fase 1</a></li>
                            <li><a class="dropdown-item" href="#">Fase 2</a></li>
                            <li><a class="dropdown-item" href="#">Fase 3</a></li>
                        </ul>
                    </li>   
                @endif
                -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ver pantallas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ url ('language') }}">Seleccion de idioma</a></li>
                        <li><a class="dropdown-item" href="{{ url ('surveys') }}">Encuestas</a></li>
                        <li><a class="dropdown-item" href="{{ url ('register') }}">Registro</a></li>
                        <li><a class="dropdown-item" href="{{ url ('login') }}">Log In</a></li>
                    </ul>
                </li>   
            </ul>
        </div>
    </div>
</nav>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>