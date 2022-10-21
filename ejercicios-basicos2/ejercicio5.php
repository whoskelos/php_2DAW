<?php
$dado1 = rand(1,6);
$dado2 = rand(1,6);
$resultado = $dado1 + $dado2;

echo "<table>";
echo "<tr>";
echo "<td><img src='./img/$dado1.svg'></img></td>";
echo "<td><img src='./img/$dado2.svg'></img></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h2>La suma es: $resultado </h2></td>";
echo "</tr>";
echo "</table>"
?>