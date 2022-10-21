<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <style>
        .contenedor {
            width: 80%;
            display: flex;
        }
        .dado1,.dado2, .respuesta {
            font-weight: bold;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .dado1 {
            border: 5px solid red;
        }

        .dado2 {
            border: 5px solid blue;
        }
    </style>
</head>

<body>
    <h1>Juego: Dado más alto</h1>
    <p>Actualice la página para mostrar un nueva tirada</p>
    <?php
    $dado1 = rand(1, 6);
    $dado2 = rand(1, 6);

    ?>
    <div class="contenedor">
        <div class="dado1">
            Jugador 1
            <?php
            echo "<img src='img/$dado1.svg'></img>";
            ?>
        </div>
        <div class="dado2">
            Jugador 2
            <?php
            echo "<img src='img/$dado2.svg'></img>";
            ?>
        </div>
        <div class="respuesta">
            Respuesta
            <?php
                if ($dado1 > $dado2) {
                    echo "<p>El jugador 1 ha ganado</p>";
                }elseif ($dado2 > $dado1) {
                    echo "<p>El jugador 2 ha ganado</p>";
                }elseif ($dado1 == $dado2) {
                    echo "<p>Ha habido un empate</p>";
                }
            ?>
        </div>
    </div>
</body>

</html>