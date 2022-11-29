<?php
    if (isset($_GET['enviar'])) {
        if (isset($_GET['txtUrl']) && $_GET['txtUrl'] != "") {
            $url = $_GET['txtUrl'];
            if (filter_var($url,FILTER_VALIDATE_URL)) {
                header("Location: $url");
            }else {
                header("Location: ejercicio1_a.php?error=1");
            }
        }else {
            header("Location: ejercicio1_a.php?error=1"); 
        }
    }
?>