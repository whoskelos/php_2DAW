<?php
function sendMail($to,$subject,$message) {
    //envio html
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=utf8\r\n";
    $headers .= "Content-Transfer-Encoding:8bit\r\n";
    $headers .= "From: kelvinguerrero2daw@gmail.com\r\n";
    //$miEmail = "From: kelvinguerrero2daw@gmail.com";
    $ok = mail($to,$subject,$message,$headers);
    if ($ok) {
        echo "<p class='good'>Correo enviado con exito</p>";
    } else {
        echo "<p class='err'>Error al enviar el correo</p>";
    }
}
?>