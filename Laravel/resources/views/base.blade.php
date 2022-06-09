<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Own CSS -->
    <link href="css/style.css" rel="stylesheet">
    
    <title>
        @yield('title');
    </title>
</head>
<body>
    @include('layouts.navigation_noLog')
    @yield('content');

    <!--Footer-->
    <nav class="navbar fixed-bottom bg-light">
        <div class="container">
            <a class="navbar-brand h1">Creado en Colaboración</a>
            <a class="navbar-brand" href="#">
                <img src="img/escudo_uaz.gif" alt="UAZ" height="70">
            </a>
            <a class="navbar-brand" href="#">
                <img src="img/is.jpg" alt="" height="70">
            </a>
            <a class="navbar-brand" href="#">
                <img src="img/uaslp_logo.png" alt="" height="70">
            </a>
        </div>
    </nav>
</body>
</html>