<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <h1>DOS DADOS MAS ALTOS</h1>
    <p>Actualice la pagina para mostrar una nueva tirada</p>
    <?php
    //variables
    $ganador = "blue";
    $perdedor = "red";
    //JUGADOR UNO
    $dadoAa = rand(1, 6);
    $dadoAb = rand(1, 6);

    //JUGADOR DOS
    $dadoBa = rand(1, 6);
    $dadoBb = rand(1, 6);

    ?>

    <?php
    //CONDICIONES
    //1:ha obtenido una pareja de dados iguales de mayor valor, 
    //si los dos han obtenido parejas distintas
    echo "$dadoAa + ";
    echo "$dadoAb";
    echo "<br>";
    echo "$dadoBa + ";
    echo "$dadoBb";
    if ($dadoAa == $dadoAb && $dadoBa == $dadoBb) {
        if ($dadoAa + $dadoAb > $dadoBa + $dadoBb) {
            echo
            "<div style='display:flex;align-items: center;'>
                <p style='font-size:20px;margin-right: 10px;'>Jugador 1</p>
                <div style='margin: 15px;border: 2px solid $ganador'>
                <img src='img/{$dadoAa}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='img/{$dadoAb}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
                <p style='font-size:20px;margin-right: 10px;'>Jugador 2</p>
                <div style='margin: 15px;border: 2px solid $perdedor'>
                <img src='img/{$dadoBa}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='img/{$dadoBb}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
        
                <div>
                <p><b>El ganador es Jugador 1 por dados iguales de mayor valor<b></p>
                </div>
            </div>";
        } elseif ($dadoBa + $dadoBb > $dadoAa + $dadoAb) {
            echo
            "<div style='display:flex;align-items: center;'>
                <p style='font-size:20px;margin-right: 10px;'>Jugador 1</p>
                <div style='margin: 15px;border: 2px solid $perdedor'>
                <img src='img/{$dadoAa}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='img/{$dadoAb}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
                <p style='font-size:20px;margin-right: 10px;'>Jugador 2</p>
                <div style='margin: 15px;border: 2px solid $ganador'>
                <img src='img/{$dadoBa}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='img/{$dadoBb}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
        
                <div>
                <p><b>El ganador es Jugador 2 por dados iguales de mayor valor<b> </p>
                </div>
            </div>";
        } elseif ($dadoAa + $dadoAb == $dadoBa + $dadoBb) {
            echo
            "<div style='display:flex;align-items: center;'>
                <p style='font-size:20px;margin-right: 10px;'>Jugador 1</p>
                <div style='margin: 15px;border:2px solid green'>
                <img src='img/{$dadoAa}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='img/{$dadoAb}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
                <p style='font-size:20px;margin-right: 10px;'>Jugador 2</p>
                <div style='margin: 15px;border: 2px solid green'>
                <img src='img/{$dadoBa}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='img/{$dadoBb}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
        
                <div>
                <p>Ha habido un empate </p>
                </div>
            </div>";
        }
    }
    //     2:ha obtenido una pareja de dados iguales,
    //     si el otro jugador no ha obtenido pareja

    if ($dadoAa == $dadoAb) {
        if ($dadoBa != $dadoBb) {
            echo
            "<div style='display:flex;align-items: center;'>
                <p style='font-size:20px;margin-right: 10px;'>Jugador 1</p>
                <div style='margin: 15px;border: 2px solid $ganador'>
                <img src='img/{$dadoAa}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='img/{$dadoAb}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
                <p style='font-size:20px;margin-right: 10px;'>Jugador 2</p>
                <div style='margin: 15px;border: 2px solid $perdedor'>
                <img src='img/{$dadoBa}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='img/{$dadoBb}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
        
                <div>
                <p><b>El ganador es Jugador 1 por obtener pareja<b></p>
                </div>
            </div>";
        }
    } elseif ($dadoBa == $dadoBb) {
        if ($dadoAa != $dadoAb) {
            echo
            "<div style='display:flex;align-items: center;'>
                <p style='font-size:20px;margin-right: 10px;'>Jugador 1</p>
                <div style='margin: 15px;border: 2px solid $perdedor'>
                <img src='img/{$dadoAa}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='img/{$dadoAb}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
                <p style='font-size:20px;margin-right: 10px;'>Jugador 2</p>
                <div style='margin: 15px;border: 2px solid $ganador'>
                <img src='img/{$dadoBa}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='img/{$dadoBb}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
        
                <div>
                <p><b>El ganador es Jugador 2 por obtener pareja<b> </p>
                </div>
            </div>";
        }
    } else { //3: SI NINGUNO HA OBTENIDO PAREJA, PUES EL DE MAYOR VALOR
        if ($dadoAa + $dadoAb > $dadoBa + $dadoBb) {
            echo
            "<div style='display:flex;align-items: center;'>
                <p style='font-size:20px;margin-right: 10px;'>Jugador 1</p>
                <div style='margin: 15px;border: 2px solid $ganador'>
                <img src='img/{$dadoAa}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='img/{$dadoAb}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
                <p style='font-size:20px;margin-right: 10px;'>Jugador 2</p>
                <div style='margin: 15px;border: 2px solid $perdedor'>
                <img src='img/{$dadoBa}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='img/{$dadoBb}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
        
                <div>
                <p><b>El ganador es Jugador 1 por obtener mayor resultado<b></p>
                </div>
            </div>";
        } elseif ($dadoBa + $dadoBb > $dadoAa + $dadoAb) {
            echo
            "<div style='display:flex;align-items: center;'>
                <p style='font-size:20px;margin-right: 10px;'>Jugador 1</p>
                <div style='margin: 15px;border: 2px solid $perdedor'>
                <img src='img/{$dadoAa}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='img/{$dadoAb}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
                <p style='font-size:20px;margin-right: 10px;'>Jugador 2</p>
                <div style='margin: 15px;border: 2px solid $ganador'>
                <img src='img/{$dadoBa}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='img/{$dadoBb}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
        
                <div>
                <p><b>El ganador es Jugador 2 por obtener mayor resultado<b> </p>
                </div>
            </div>";
        } elseif ($dadoAa + $dadoAb == $dadoBa + $dadoBb) {
            echo
            "<div style='display:flex;align-items: center;'>
                <p style='font-size:20px;margin-right: 10px;'>Jugador 1</p>
                <div style='margin: 15px;border:2px solid green'>
                <img src='img/{$dadoAa}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='img/{$dadoAb}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
                <p style='font-size:20px;margin-right: 10px;'>Jugador 2</p>
                <div style='margin: 15px;border: 2px solid green'>
                <img src='img/{$dadoBa}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='img/{$dadoBb}.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
        
                <div>
                <p><b>Ha habido un empate<b> </p>
                </div>
            </div>";
        }
    }




    ?>
</body>

</html>