<?php
include ("sanear.php");

function sanear_arr($arr){
    $arrLimpio = [];
    foreach ($arr as $key => $value) {
        $indiceLimpio = sanear($key);
        $valorLimpio = sanear($value);
        $arrLimpio[$indiceLimpio] = $valorLimpio;
    }
    return $arrLimpio;
}
?>