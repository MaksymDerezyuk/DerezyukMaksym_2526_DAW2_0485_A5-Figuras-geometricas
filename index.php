<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras Geométricas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h1 class="h4 mb-3">Seleccione una figura geométrica</h1>
                        <form action="select.php" method="post">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="figura" id="trianguloEquilatero" value="trianguloEquilatero">
                                <label class="form-check-label" for="trianguloEquilatero">Triángulo Equilátero</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="figura" id="trianguloIsoceles" value="trianguloIsoceles">
                                <label class="form-check-label" for="trianguloIsoceles">Triángulo Isósceles</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="figura" id="trianguloEscaleno" value="trianguloEscaleno">
                                <label class="form-check-label" for="trianguloEscaleno">Triángulo Escaleno</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="figura" id="rectangulo" value="rectangulo">
                                <label class="form-check-label" for="rectangulo">Rectángulo</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="figura" id="cuadrado" value="cuadrado">
                                <label class="form-check-label" for="cuadrado">Cuadrado</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="figura" id="circulo" value="circulo">
                                <label class="form-check-label" for="circulo">Círculo</label>
                            </div>
                            <div class="mt-4">
                                <button class="btn btn-primary" type="submit">Continuar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>