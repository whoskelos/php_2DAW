<?php
if (isset($_POST['enviar'])) {
    include "sanear.php";
    include "validar.php";
    $errores = [];
    //valido usuario
    if (isset($_POST["txtUsuario"]) && $_POST["txtUsuario"] != "") {
        $txtUsuario = sanear("txtUsuario");
        if (!validarSoloLetras($txtUsuario)) {
            $errores[] = $txtUsuario;
        }
    }else {
        $errores[] = "Formato del campo nombre no válido";
    }
    //valido password
    if (isset($_POST["txtPassword"]) && $_POST["txtPassword"] != "") {
        $txtPassword = sanear("txtPassword");
        if (!validarSoloLetras($txtPassword)) {
            $errores[] = "Formato del campo password no válido";
        }
    }else {
        $errores[] = "Campo password vacío";
    }

    if (empty($errores)) {
        $db = conectaDB();
        $db->query("USE agenda");
        $query = $db->prepare("SELECT * FROM usuarios WHERE `username` = ? AND `password` = ?");
        $resultado = $query->execute(array($txtUsuario,$txtPassword));
        if ($query->rowCount() == 1) {
            session_start();
            $_SESSION['login'] = $txtUsuario;
            header("Location: index.php");
        } else {
            echo "<div class='alert alert-danger'>Datos incorrectos</div>";
        }
    } else {
        foreach ($errores as $error ) {
            echo "<div class='alert alert-danger'>". $error ."</div>";
        }
    }
}
?>