<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insertar registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row p-3">
            <div class="col">
                <h1 class="text-center">Nuevo Registro</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="POST" >
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="txtNombre" name="txtNombre" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="txtApellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="txtApellidos" name="txtApellidos">
                    </div>
                    <div class="mb-3">
                        <label for="txtDireccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="txtDireccion" name="txtDireccion">
                    </div>
                    <div class="mb-3">
                        <label for="txtTelefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="txtTelefono" name="txtTelefono">
                    </div>
                    <button type="submit" class="btn btn-primary" name="enviar">Registrar</button>
                    <a class="btn btn-secondary" href="index.php" role="button">Página Principal</a>
                </form>
                <?php include "insertar-registro.php"; ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>