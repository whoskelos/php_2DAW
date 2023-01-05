<?php
if (isset($_POST['enviar'])) {
    include 'sanear.php';
    include 'validar.php';
    $errores = [];
    if (isset($_POST['txtNombre']) && $_POST['txtNombre'] != "") {
        $txtNombre = sanear("txtNombre");
        if (!validarSoloLetras($txtNombre)) {
            $errores[] = "El formato del nombre no es correcto"; 
        }
    } else {
        $errores[] = "El campo nombre esta vacio";
    }

    if (isset($_POST['txtApellidos']) && $_POST['txtApellidos'] != "") {
        $txtApellidos = sanear("txtApellidos");
        if (!validarSoloLetras($txtApellidos)) {
            $errores[] = "El formato del apellido no es correcto"; 
        }
    } else {
        $errores[] = "El campo apellidos esta vacio";
    }

    if (empty($errores)) {
        //include 'conexion.php';
        $db = conectaDB();
        $db->query("USE agenda");
        //preparamos la consulta
        $query = $db->prepare("SELECT * FROM personas WHERE nombre = ? AND apellidos = ?");
        $resultado = $query->execute(array($txtNombre,$txtApellidos));
        if ($resultado == true) {
            if ($query->rowCount() > 0) {
                //mostramos a la persona encontrada
                $persona = $query->fetch(PDO::FETCH_OBJ);
                echo "<table class='table'>
                    <thead class='bg-dark text-white'>
                        <tr>
                            <th scope='col'>Nombre</th>
                            <th scope='col'>Apellidos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>". $persona->nombre ."</td>
                            <td>". $persona->apellidos ."</td>
                        </tr>
                    </tbody></table>";
            } else {
                echo "<div class='alert alert-danger'>No se han encontrado resultados</div>";
            }
        }
    } else {
        echo "<div class='mb-3 fw-bold'>Hay que rellenar al menos uno de los campos:</div>";
        foreach ($errores as $error) {
            echo "<div class='alert alert-danger'>" . $error . "</div>";
        }
    }
}
?>