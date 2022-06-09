@extends('base')

@section('title')
Language Selection
@stop

@section('content')
<div class="container lang">
    <div class="row mb-5">
        <h1 class="text-center">Select your language / Selecciona tu idioma</h1>
    </div>
    <div class="row">
        <div class="col w-auto">
            <a class="w-auto" href="">
                <img src="img/uk_flag_g.gif" class="img-fluid mx-auto d-block">
            </a>
        </div>
        <div class="col w-auto ">
            <a class="w-auto" href="">
                <img src="img/mx_flag_g.webp" class="img-fluid mx-auto d-block">
            </a>
        </div>
    </div>
    <?php
    // PHP program to pop an alert
    // message box on the screen
    
    // Display the alert box 
    #echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    
    ?>
</div>
@stop