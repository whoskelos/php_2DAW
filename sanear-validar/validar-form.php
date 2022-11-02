<?php
if (isset($_POST['enviar'])) {
    $patron = "/^[a-z]+$/i";
    $patron2 = "/^[6|7]{1}[0-9]{8}/";
    if (!empty($nombre)) { 
        if (!preg_match($patron,$nombre)) {
            echo "<p class='error'>El formato del nombre es incorrecto (Solo letras)</p>";
        }
    }else {
        echo "<p class='error'>El campo nombre está vacío</p>";
    }
    if (!empty($tlf)) {
        if (!preg_match($patron2,$tlf)) {
            echo "<p class='error'>El formato del teléfono es incorrecto (9 números empieza por 6 o 7)</p>";
        }
    }else {
        echo "<p class='error'>El campo teléfono está vacío</p>";
    }
    
    if (!empty($email)) {
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            echo "<p class='error'>El formato del email es incorrecto</p>";
        }
    }else {
        echo "<p class='error'>El campo email está vacío</p>";
    }
}
