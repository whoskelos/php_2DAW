<?php
if (isset($_POST['enviar'])) {
    // include "conexion.php";
    include "sanear.php";
    include "validar.php";
    $errores = [];

    if ($_POST['nombre'] && $_POST['nombre'] != "") {
        $nombre = sanear("nombre");
        if (!validarSoloLetras($nombre)) {
            $errores[] = "Formato nombre no válido";
        }
    }else {
        $errores[] = "Campo nombre vacío";
    }

    if ($_POST['apellidos'] && $_POST['apellidos'] != "") {
        $apellidos = sanear("apellidos");
        if (!validarSoloLetras($apellidos)) {
            $errores[] = "Formato apellido no válido";
        }
    }else {
        $errores[] = "Campo apellido vacío";
    }

    if ($_POST['direccion'] && $_POST['direccion'] != "") {
        $direccion = sanear("direccion");
        if (!validarDireccion($direccion)) {
            $errores[] = "Formato dirección no válido";
        }
    }else {
        $errores[] = "Campo dirección vacío";
    }

    if ($_POST['telefono'] && $_POST['telefono'] != "") {
        $telefono = sanear("telefono");
        if (!validarTlf($telefono)) {
            $errores[] = "Formato teléfono no válido";
        }
    }else {
        $errores[] = "Campo teléfono vacío";
    }

    if (empty($errores)) {
        
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