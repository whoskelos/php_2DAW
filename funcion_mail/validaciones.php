<?php
    function letrasEspacios($dato) {
        $regex = "/^[a-z ]+$/i";
        if (preg_match($regex,$dato)) {
            return $dato;
        }
    }

    function validaEmail($dato) {
        if (filter_var($dato, FILTER_VALIDATE_EMAIL)) {
            return $dato;
        }
    }
?>