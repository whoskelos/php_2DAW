<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifcar registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="row p-3">
                <div class="col">
                    <h1 class="text-center">Modicar registro</h1>
                </div>
                <div>
                    <a href="modificar.php" class="btn btn-danger">Volver</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row p-3">
            <div class="col">
                <?php
                if (isset($_POST['enviar'])) {
                    if (isset($_POST['aModificar']) && $_POST['aModificar'] != "") {
                        include "conexion.php";
                        $id_persona = $_POST['aModificar'];
                        $db = conectaDB();
                        $db->query("USE agenda");
                        $query = $db->prepare("SELECT * FROM `personas` WHERE id_persona = ?");
                        $resultado = $query->execute(array($id_persona));
                        if ($resultado == true) {
                            $persona = $query->fetch(PDO::FETCH_OBJ);
                        } ?>
                        <form method="POST" action="accion-modificar-2.php">
                            <div class="mb-3">
                                <label for="txtNombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="txtNombre" name="txtNombre" aria-describedby="emailHelp" value="<?php echo $persona->nombre ?>">
                            </div>
                            <div class="mb-3">
                                <label for="txtApellidos" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="txtApellidos" name="txtApellidos" value="<?php echo $persona->apellidos ?>">
                            </div>
                            <div class="mb-3">
                                <label for="txtDireccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="txtDireccion" name="txtDireccion" value="<?php echo $persona->direccion ?>">
                            </div>
                            <div class="mb-3">
                                <label for="txtTelefono" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" value="<?php echo $persona->telefono ?>">
                            </div>
                            <input type="hidden" name="id_persona" value="<?php echo $persona->id_persona ?>">
                            <button type="submit" class="btn btn-primary" name="enviar">Modificar</button>
                            <button type="reset" class="btn btn-secondary" name="enviar">Reiniciar formulario</button>
                        </form>
                <?php } else {
                        echo "<p class='fw-bold text-danger'>No se ha marcado ningún registro para modificar</p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>