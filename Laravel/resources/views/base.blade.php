<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Own CSS -->
    <link href="css/style.css" rel="stylesheet">
    
    <title>
        @yield('title')
    </title>
</head>
<body class="">
    @include('layouts.navigation')

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ __('Important') }}</strong> 
        {{ __('The following surveys are part of the research associated with the vaccine against COVID19,') }} 
        {{ __('which aims to find out if there is an association between')}}
        {{ __('vaccines against COVID19 and alterations in the menstrual cycle of women.')}}
        <b>
            {{ __('NOTE: THIS RESEARCH DOES NOT ENCOURAGE PEOPLE TO DO NOT GET VACCINATED AGAINST') }}
            {{ __('COVID, REMEMBER THAT VACCINATION IS ESSENTIAL FOR THE PREVENTION AGAINST COVID19.')}}
        </b>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @yield('content')

    @include('layouts.footer')

</body>

<!-- JavaScript Bundle with Popper -->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>-->

</html>