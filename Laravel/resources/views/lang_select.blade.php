@extends('base')

@section('title')
{{ __('Language Selection') }}
@stop

@section('content')
<div class="container lang">
    <div class="row mb-5">
        <h1 class="text-center">Select your language / Selecciona tu idioma</h1>
    </div>
    <div class="row p-2">
        <div class="col w-auto">
            <a class="w-auto" href="">
                <img src="img/uk_flag_g.gif" class="img-fluid mx-auto d-block">
                <?php
                    \App::setLocale('en');
                ?>
            </a>
        </div>
        <div class="col w-auto ">
            <a class="w-auto" href="">
                <img src="img/mx_flag_g.webp" class="img-fluid mx-auto d-block">
                <?php
                    \App::setLocale('es');
                ?>
            </a>
        </div>
    </div>
    <?php
    // PHP program to pop an alert
    // message box on the screen
    
    // Display the alert box 
    #echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    
    ?>
    <!--
    <div class="row mt-5">
        <button type="button" class="btn btn-danger mx-auto w-auto " id="liveToastBtn"><b>Important / Importante</b></button>
    </div>

    <div class="toast-container top-50 start-50 translate-middle P-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto"><b>Important / Importante</b></strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Las siguientes encuestas forman parte de la investigación 
                asociada a la vacuna contra COVID19, Alteración en el ciclo menstrual el 
                cual tiene como objetivo conocer si existe una asociación entre las vacunas 
                contra la COVID19 y las alteraciones en el ciclo menstrual de las mujeres.
                <b>NOTA: ESTA INVESTIGACION NO INCITA A LAS PERSONAS A NO VACUNARSE CONTRA LA 
                    COVID, RECUERDA QUE LA VACUNACION ES ESCENCIAL PARA LA PREVENCION CONTRA EL COVID19.
                </b>
            </div>
        </div>
    </div>
    -->
</div>
<script>

</script>
@stop