<?php
session_name("usuarioLogueado");
session_start();
    if (isset($_SESSION['usuarioLogueado'])) {
        session_unset();
        session_destroy();
        header("Location: login.php");
    }
?>