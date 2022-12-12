<?php
function validarSoloLetras($dato){
    $patronLetras = "/^[a-z ]+/i";
    if (preg_match($patronLetras,$dato)) {
        return $dato;
    }
}

function validarTlf($dato){
    $patronNum = "/^[6 || 7 || 9]{1}[0-9]{8}$/";
    if (preg_match($patronNum,$dato)) {
        return $dato;
    }
}

function validarDireccion($dato){
    $patronDir = "/^[A-Za-z0-9º ]+$/";
    if (preg_match($patronDir,$dato)) {
        return $dato;
    }
}
?>