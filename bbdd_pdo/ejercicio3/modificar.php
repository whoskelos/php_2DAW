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
    <title>Listado de la Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row p-3">
            <div class="col">
                <h1 class="text-center">Listado agenda</h1>
            </div>
            <div>
                <a href="index.php" class="btn btn-danger">Volver</a>
            </div>
        </div>
        <div class="row p-3">
            <div class="col">
                <?php
                if ($result->rowCount() == 0) {
                    echo "<p class=fs-4>No hay registros para eliminar</p>";
                } else {
                    $registros = $db->query("SELECT * FROM `personas`")->fetchAll(PDO::FETCH_OBJ);
                    echo "<form method='POST'><table class='table'>
                    <thead class='bg-dark text-white'>
                        <tr>
                            <th scope='col'>Borrar</th>
                            <th scope='col'>Nombre</th>
                            <th scope='col'>Apellidos</th>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($registros as $persona) : ?>
                        <tr>
                            <td><input type="checkbox" name="borrados[]" id="<?php echo $persona->id_persona ?>" value="<?php echo $persona->id_persona ?>"></td>
                            <td><?php echo $persona->nombre ?></td>
                            <td><?php echo $persona->apellidos ?></td>
                        </tr>
                <?php
                    endforeach;
                    echo "</tbody>
                    </table><button type='submit' class='btn btn-warning' name='enviar'>Borrar Registro</button></form>";
                } ?>
            </div>
            <div class="col">
                <?php include "borrar-registro.php"; ?> 
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>