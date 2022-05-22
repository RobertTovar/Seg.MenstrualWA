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
    
    <title>Surveys</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="w-50">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="list-group mx-0 w-50">
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
</body>
</html>