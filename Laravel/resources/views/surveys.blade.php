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
        <div class="list-group mx-auto w-50">
            <label class="list-group-item d-flex gap-2 w-100">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled>
                <span class="w-50">
                    Encuesta
                    <small class="d-block text-muted">Encuesta de la etapa</small>
                </span>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end w-50">
                    <button type="button" class="btn btn-success me-md-2 disabled">Ir a Encuesta</button>
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
                    <button type="button" class="btn btn-success me-md-2 disabled">Ir a Encuesta</button>
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
                    <button type="button" class="btn btn-success me-md-2">Ir a Encuesta</button>
                </div>
            </label>
        </div>
    </div>
</div>
@stop