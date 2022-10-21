<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
    <h1>Tres Dados</h1>
    <p>Actualice la pagina para ver una nueva tirada</p>
    <?php
    //VARIABLES:
    $dadoUno = rand(1, 6);
    $dadoDos = rand(1, 6);
    $dadoTres = rand(1, 6);

    echo
    "<div style='display:flex;align-items: center;'>
        <div style='margin: 15px;'>
        <img src='img/{$dadoUno}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
        <img src='img/{$dadoDos}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
        <img src='img/{$dadoTres}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
        </div>
    </div>";
    if ($dadoUno == $dadoDos && $dadoDos == $dadoTres && $dadoUno == $dadoTres) {
        echo "<p><b>Ha sacado un trio<b></p>";
    } elseif ($dadoUno == $dadoDos) {
        echo "<p><b>Ha sacado pareja de $dadoUno<b></p>";
    } elseif ($dadoUno == $dadoTres) {
        echo "<p><b>Ha sacado pareja de $dadoUno<b></p>";
    } elseif ($dadoDos == $dadoTres) {
        echo "<p><b>Ha sacado pareja de $dadoDos<b></p>";
    } elseif ($dadoUno > $dadoDos && $dadoUno > $dadoTres) {
        echo "<p><b>El dado: $dadoUno es el de mayor valor<b></p>";
    } elseif ($dadoDos > $dadoUno && $dadoDos > $dadoTres) {
        echo "<p><b>El dado: $dadoDos es el de mayor valor<b></p>";
    } elseif ($dadoTres > $dadoUno && $dadoTres > $dadoDos) {
        echo "<p><b>El dado: $dadoTres es el de mayor valor<b></p>";
    }
    ?>
</body>

</html>