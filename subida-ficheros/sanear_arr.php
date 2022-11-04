<?php

function sanear_arr($tmp){
    $arr = $_POST[$tmp];
    $arrLimpio = [];
    foreach ($arr as $key => $value) {
        $indiceLimpio = trim(htmlspecialchars($key,ENT_QUOTES, "UTF-8"));
        $valorLimpio = trim(htmlspecialchars($value,ENT_QUOTES, "UTF-8"));
        $arrLimpio[$indiceLimpio] = $valorLimpio;
    }
    return $arrLimpio;
}
?>