<?php
$para ='kelvinmiguel.guerreromite@educa.madrid.org';
$asunto = 'prueba1';
$descripcion = 'Voy a mandar un correo desde el localhost de apache';
$de = 'from: kelvinguerrero2daw@gmail.com';
if (mail($para, $asunto, $descripcion, $de))
 {
echo "Correo enviado satisfactoriamente por función mail DE PHP ver";
}
else{echo "Correo enviado ha tenido problemas";}
?>