@extends('base')

@section('title')
Encuestas
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="w-50">
            <h1 class="text-center">Etapa </h1>
            <br>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center mt-3">
        <div class="list-group mx-auto w-auto">
            <label class="list-group-item d-flex gap-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled>
                <span class="w-50">
                    Encuesta
                    <small class="d-block text-muted">Encuesta de la etapa</small>
                </span>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end w-50">
                    <button type="button" class="btn btn-success me-md-2 disabled" id="urlSurvey">Ir a Encuesta</button>
                </div>
            </label>
            <br>
            <label class="list-group-item d-flex gap-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled>
                <span class="w-50">
                    Seguimiento 1
                    <small class="d-block text-muted">Primer seguimiento de la etapa</small>
                </span>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end w-50">
                    <button type="button" class="btn btn-success me-md-2 disabled" id="urlSurveySeg1">Ir a Encuesta</button>
                </div>
            </label>
            <br>
            <label class="list-group-item d-flex gap-2">
                <input class="form-check-input flex-shrink-0" type="checkbox" value="" disabled>
                <span class="w-50">
                    Seguimiento 2
                    <small class="d-block text-muted">Segundo seguimiento de la etapa</small>
                </span>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end w-50">
                    <button type="button" class="btn btn-success me-md-2" id="urlSurveySeg2">Ir a Encuesta</button>
                </div>
            </label>
        </div>
    </div>
</div>
<script type="text/javascript">
        var urlSurvey1 = 'http://www.regresoseguro.org/survey/index.php/822217?lang=es-MX';
        var urlSurveySeguimiento1 = 'http://www.regresoseguro.org/survey/index.php/227626?lang=es-MX';
        var urlSurveySeguimiento2 = 'http://www.regresoseguro.org/survey/index.php/227626?lang=es-MX';
        //var url = new URL("/encuesta1",urlSurvey);
        //alert(url);
        document.getElementById("urlSurvey1").onclick = function (){
            location.href = urlSurvey1;
        };

        document.getElementById("urlSurveySeg1").onclick = function (){
            location.href = urlSurveySeguimiento1;
        };

        document.getElementById("urlSurveySeg2").onclick = function (){
            location.href = urlSurveySeguimiento2;
        };
        
</script>
@stop
