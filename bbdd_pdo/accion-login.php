<?php
if (isset($_POST['enviar'])) {
    $errores = [];
    if (isset($_POST['txtUser']) && $_POST['txtUser'] != "") {
        $txtUser = $_POST['txtUser'];
    }else {
        $errores = "Datos incorrectos";
        header("Location: login.php?error=0");
    }
    if(isset($_POST['txtPass']) && $_POST['txtPass'] != "") {
        $txtPass = $_POST['txtPass'];
    }else {
        $errores[]  = "Datos incorrectos";
        header("Location: login.php?error=0");
    }

    if (empty($errores)) {
        include 'crearBDUsuarios.php';
        $db = conectaDB();
        $db->query(("USE `usuarios`"));
        $consulta = "SELECT * from user where `login` = '$txtUser' AND `password` = '$txtPass';";
        if ($db->query($consulta)) {
            session_name('usuarioLogueado');
            session_start();
            $_SESSION['usuarioLogueado'] = $txtUser;
            $db = null;
            header("Location: index.php");
        }else {
            header("Location: login.php?error=0");
        }
        $db = null;
    }
}
