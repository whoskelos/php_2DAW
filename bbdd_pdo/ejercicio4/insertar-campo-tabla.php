<?php
if (isset($_POST['enviar'])) {
    include "sanear.php";
    include "validar.php";
    $errores = [];

    if ($_POST['nombreCampo'] && $_POST['nombreCampo'] != "") {
        $nombreCampo = sanear("nombreCampo");
        if (!validarSoloLetras($nombreCampo)) {
            $errores[] = "Formato nombre columna no válido";
        }
    }else {
        $errores[] = "Campo nombre columna vacio";
    }

    if ($_POST['tipoSizeDatos'] && $_POST['tipoSizeDatos'] != "") {
        $tipoSizeDatos = sanear("tipoSizeDatos");
    }else {
        $errores[] = "Campo tipo/tamaño vacío";
    }

    if (empty($errores)) {
        $columna_nueva = $nombreCampo. " " .$tipoSizeDatos;
        include "conexion.php";
        $db = conectaDB();
        $db->query("use agenda");
        $query = "ALTER TABLE personas ADD $columna_nueva";
        $result = $db->query($query);
        if ($result == false) {
            echo "<div class='alert alert-danger mt-2'>Error al añadir la nueva columna</div>";
        } else {
            echo "<div class='alert alert-success mt-2'>Columna añadida correctamente</div>";
        }

    } else {
        foreach ($errores as $error ) {
            echo "<div class='alert alert-danger mt-2'>". $error ."</div>";
            header("Refresh:3;url=insertarCampos.php");
        }
    }

}
?>