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
            <a class="w-auto" onClick="changeLanguage('en');" href="#">
                <img src="img/uk_flag_g.gif" class="img-fluid mx-auto d-block">
            </a>
        </div>
        <div class="col w-auto ">
            <a class="w-auto" onClick="changeLanguage('es');" href="#">
                <img src="img/mx_flag_g.webp" class="img-fluid mx-auto d-block">
            </a>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/lang.js"></script>
@stop