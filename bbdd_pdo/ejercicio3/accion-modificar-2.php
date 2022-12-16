<?php
if (isset($_POST['enviar'])) {
    include "sanear.php";
    include "validar.php";
    $errores = [];

    if ($_POST['txtNombre'] && $_POST['txtNombre'] != "") {
        $txtNombre = sanear("txtNombre");
        if (!validarSoloLetras($txtNombre)) {
            $errores[] = "Formato nombre no válido";
        }
    } else {
        $errores[] = "Campo nombre vacío";
    }

    if ($_POST['txtApellidos'] && $_POST['txtApellidos'] != "") {
        $txtApellidos = sanear("txtApellidos");
        if (!validarSoloLetras($txtApellidos)) {
            $errores[] = "Formato apellido no válido";
        }
    } else {
        $errores[] = "Campo apellido vacío";
    }

    if ($_POST['txtDireccion'] && $_POST['txtDireccion'] != "") {
        $txtDireccion = sanear("txtDireccion");
        if (!validarDireccion($txtDireccion)) {
            $errores[] = "Formato dirección no válido";
        }
    } else {
        $errores[] = "Campo dirección vacío";
    }

    if ($_POST['txtTelefono'] && $_POST['txtTelefono'] != "") {
        $txtTelefono = sanear("txtTelefono");
        if (!validarTlf($txtTelefono)) {
            $errores[] = "Formato teléfono no válido";
        }
    } else {
        $errores[] = "Campo teléfono vacío";
    }

    //id_persona
    $id_persona = $_POST['id_persona'];

    if (empty($errores)) {
        include "conexion.php";
        $db = conectaDB();
        $db->query("use agenda");
        $consulta = $db->prepare("UPDATE `personas` set nombre = ?, apellidos = ?, direccion = ?, telefono = ?  WHERE id_persona = ? ");
        $result = $consulta->execute(array($txtNombre, $txtApellidos, $txtDireccion, $txtTelefono, $id_persona));
        if ($result == true) {
            echo "<p class='fw-bold'>El registro ". $txtNombre . $txtApellidos ." se ha actualizado correctamente</p>";
        }else {
            echo "<p class='fw-bold'>Los valores son los mismos a los anteriores y no se ha actualizado</p>";
        }
    } else {
        foreach ($errores as $error) {
            echo "<div class='alert alert-danger mt-2'>" . $error . "</div>";
            header("Refresh:2;url=accion-modificar.php");
        }
    }
}
