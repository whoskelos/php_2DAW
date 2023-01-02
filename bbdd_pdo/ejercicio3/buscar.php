<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location:login.php");
}
include "conexion.php";
$db = conectaDB();
$db->query("use agenda");
$sql = "SELECT * FROM personas";
$result = $db->query($sql);
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buscar contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="header">
        <div class="row p-3 flex-column">
            <div class="col">
                <a name="" id="" class="btn btn-danger" href="index.php" role="button">Volver</a>
            </div>
            <div class="col">
                <h1 class="text-center">Buscar registro</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <?php
                if ($result->rowCount() == 0) {
                    echo "<p class=fs-4>No hay registros</p>";
                }else{?>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control" placeholder="kelvin" aria-describedby="helpId">
                    </div>
                    <div class="mb-3">
                        <label for="txtApellidos" class="form-label">Apellidos</label>
                        <input type="text" name="txtApellidos" id="txtApellidos" class="form-control" placeholder="guerrero" aria-describedby="helpId">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit" name="enviar">Buscar</button>
                        <button type="reset" class="btn btn-secondary">Reiniciar formulario</button>
                    </div>
                </form>
                <div class="mb-3">
                <?php } ?>
                    <?php include "accion-buscar.php"; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>