<?php
function sanear($var){
    $tmp = (isset($_REQUEST[$var]))
    ? trim(htmlspecialchars($_REQUEST[$var],ENT_QUOTES,"UTF-8"))
    :"";
    return $tmp;
}
?>