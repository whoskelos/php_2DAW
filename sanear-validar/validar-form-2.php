<?php
if (isset($_POST['enviar'])) {
    $patron = "/^[a-z]+$/i";
    $patron2 = "/^[6|7]{1}[0-9]{8}/";
    $patron_pass = "/^([[:alnum:]+[*|$|-|_|#]]){5,}$/"; 
    if (!empty($nombre)) { 
        if (!preg_match($patron,$nombre)) {
            echo "<p class='error'>El formato del nombre es incorrecto (Solo letras)</p>";
        }
    }else {
        echo "<p class='error'>El campo nombre está vacío</p>";
    }
    
    if (!empty($password)) {
        if (!preg_match($patron_pass,$password)) {
            echo "<p class='error'>El formato de la contraseña es incorrecto</p>";
        }
    }else {
        echo "<p class='error'>El campo contraseña está vacío</p>";
    }

    if ($est == "Sin estudios") {
        echo "<p class='error'>No ha seleccionado estudios</p>";
    }

    if (!isset($nac)) {
        echo "<p class='error'>No ha seleccionado su nacionalidad</p>";
    }
    if (!isset($idiomas)) {
        echo "<p class='error'>No ha seleccionado idiomas</p>";
    }
    if (!empty($url)) {
        if (!filter_var($url,FILTER_VALIDATE_URL)) {
            echo "<p class='error'>Dirección web no válida</p>";
        }
    }else {
        echo "<p class='error'>No ha escrito dirección web</p>";
    }
}

