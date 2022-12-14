<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location:index.php");
}
?>
<?php
include "crearBDAgenda.php";
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row p-3">
            <div class="col-4">
                <h1 class="text-center">Login</h1>
                <div class="formulario">
                    <?php include "accion-login.php"; ?>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="txtUsuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="txtPassword" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="txtPassword" name="txtPassword">
                        </div>
                        <button type="submit" class="btn btn-primary" name="enviar">Iniciar Sesion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>