<?php
if (isset($_POST['enviar'])) {
    $patron = "/^[a-z]+/i";
    if (!empty($nombre)) { 
        if (!preg_match($patron,$nombre)) {
            echo "<p class='error'>El formato del nombre es incorrecto (Solo letras)</p>";
        }
    }else {
        echo "<p class='error'>El campo nombre está vacío</p>";
    }
}
?>