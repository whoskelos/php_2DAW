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
    }else {
        $errores[] = "Campo nombre vacío";
    }

    if ($_POST['txtApellidos'] && $_POST['txtApellidos'] != "") {
        $txtApellidos = sanear("txtApellidos");
        if (!validarSoloLetras($txtApellidos)) {
            $errores[] = "Formato apellido no válido";
        }
    }else {
        $errores[] = "Campo apellido vacío";
    }

    if ($_POST['txtDireccion'] && $_POST['txtDireccion'] != "") {
        $txtDireccion = sanear("txtDireccion");
        if (!validarDireccion($txtDireccion)) {
            $errores[] = "Formato dirección no válido";
        }
    }else {
        $errores[] = "Campo dirección vacío";
    }

    if ($_POST['txtTelefono'] && $_POST['txtTelefono'] != "") {
        $txtTelefono = sanear("txtTelefono");
        if (!validarTlf($txtTelefono)) {
            $errores[] = "Formato teléfono no válido";
        }
    }else {
        $errores[] = "Campo teléfono vacío";
    }

    if (empty($errores)) {
        include "conexion.php";
        $db = conectaDB();
        $db->query("use agenda");
        $resultado = $db->query("SELECT * FROM `personas` WHERE telefono = $txtTelefono OR nombre = '$txtNombre'");
        if ($resultado->rowCount() > 0) {
            echo "<div class='alert alert-danger mt-2'>El registro ya existe</div>";
            header("Refresh:2;url=insertar.php");
        }else {
            $consulta = $db->prepare("INSERT INTO `personas` (nombre,apellidos,direccion,telefono) VALUES (?,?,?,?)");
            $result = $consulta->execute(array($txtNombre,$txtApellidos,$txtDireccion,$txtTelefono));
    
            if ($result == true) {
                echo "<div class='alert alert-success mt-2'>Registro: $txtNombre $txtApellidos creado correctamente</div>";
                header("Refresh:2;url=insertar.php");
            }
        }

    }else {
        foreach ($errores as $error ) {
            echo "<div class='alert alert-danger mt-2'>". $error ."</div>";
            header("Refresh:3;url=insertar.php");
        }
    }
}
?>