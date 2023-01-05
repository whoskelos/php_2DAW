<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insertar campo tabla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row p-3">
            <div class="col">
                <h1 class="text-center">Nuevo campo tabla</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="POST">
                    <div class="mb-3">
                        <label for="nombreCampo" class="form-label">Nombre columna</label>
                        <input type="text" class="form-control" id="nombreCampo" name="nombreCampo" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="tipoSizeDatos" class="form-label">Tipo de datos y tamaño</label>
                        <input type="text" class="form-control" id="tipoSizeDatos" name="tipoSizeDatos">
                    </div>
                    <button type="submit" class="btn btn-primary" name="enviar">Registrar</button>
                    <a class="btn btn-secondary" href="index.php" role="button">Página Principal</a>
                </form>
                <?php include "insertar-campo-tabla.php"; ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>