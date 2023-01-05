<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location:login.php");
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row p-3">
            <div class="col">
                <h1 class="text-center">Bienvenido <?php echo $_SESSION['login'] ?></h1>
                <a class="btn btn-danger" href="cerrar-sesion.php" role="button">Cerrar Sesion</a>
            </div>
        </div>
        <div class="row p-3">
            <div class="col">
                <div class="list-group">
                    <a href="insertarCampos.php" class="list-group-item list-group-item-action">Añadir campos a la tabla</a>
                    <a href="buscar.php" class="list-group-item list-group-item-action">Buscar</a>
                    <a href="modificar.php" class="list-group-item list-group-item-action">Modificar</a>
                    <a href="insertar.php" class="list-group-item list-group-item-action">Insertar Registros</a>
                    <a href="listar.php" class="list-group-item list-group-item-action">Listado</a>
                    <a href="borrar.php" class="list-group-item list-group-item-action">Borrar un registro</a>
                    <a href="borrar-todo.php" class="list-group-item list-group-item-action">Borrar base de datos</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>