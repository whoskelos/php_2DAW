<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Juego: Tres dados mas altos</h1>
    <p>Actualice la pagina para mostrar una nueva tirada</p>

    <?php
    //VARIABLES:
    $ganador = "blue";
    $perdedor = "red";
    //DADOS JUGADOR UNO
    $dadoUno = rand(1,6);
    $dadoDos = rand(1,6);
    $dadoTres = rand(1,6);

    //DADOS JUGADOR DOS
    $dadoCuatro = rand(1,6);
    $dadoCinco = rand(1,6);
    $dadoSeis = rand(1,6);

    echo "$dadoUno , $dadoDos , $dadoTres";
    echo "<br>";
    echo "$dadoCuatro , $dadoCinco , $dadoSeis";


    if ($dadoUno == $dadoDos && $dadoUno == $dadoTres && $dadoTres == $dadoDos && $dadoCuatro == $dadoCinco && $dadoCuatro == $dadoSeis && $dadoCinco == $dadoSeis) {
        if ($dadoUno + $dadoDos + $dadoTres > $dadoCuatro + $dadoCinco + $dadoSeis) { //GANA EL TRIO DE MAYOR VALOR
            echo "<div style='display:flex;align-items: center;flex-direction:column;'>
            <p>Jugador 1</p>
            <div style='margin: 15px;border: 3px solid $ganador'>
                <img src='./img/$dadoUno.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='./img/$dadoDos.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='./img/$dadoTres.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
            </div>
            <p>Jugador 2</p>
            <div style='margin: 15px;border: 3px solid $perdedor'>
                <img src='./img/$dadoCuatro.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='./img/$dadoCinco.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='./img/$dadoSeis.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
            </div>
            <p><b>EL GANADOR ES JUGADOR 1 POR TRIO DE UN VALOR MAYOR<b></p>
        </div>";
        }else {
            echo "<div style='display:flex;align-items: center;flex-direction:column;'>
            <p>Jugador 1</p>
            <div style='margin: 15px;border: 3px solid $perdedor'>
                <img src='./img/$dadoUno.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='./img/$dadoDos.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='./img/$dadoTres.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
            </div>
            <p>Jugador 2</p>
            <div style='margin: 15px;border: 3px solid $ganador'>
                <img src='./img/$dadoCuatro.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='./img/$dadoCinco.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='./img/$dadoSeis.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
            </div>
            <p><b>EL GANADOR ES JUGADOR 2 POR TRIO DE UN VALOR MAYOR<b></p>
        </div>";
        }//2: GANA EL QUE TENGA UN TRIO Y EL OTRO NO
    }elseif ($dadoUno == $dadoDos && $dadoUno == $dadoTres && $dadoTres == $dadoDos) {
        if ($dadoCuatro != $dadoCinco  || $dadoCuatro != $dadoSeis || $dadoCinco != $dadoSeis) {
            echo "<div style='display:flex;align-items: center;flex-direction:column;'>
            <p>Jugador 1</p>
            <div style='margin: 15px;border: 3px solid $ganador'>
                <img src='./img/$dadoUno.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='./img/$dadoDos.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='./img/$dadoTres.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
            </div>
            <p>Jugador 2</p>
            <div style='margin: 15px;border: 3px solid $perdedor'>
                <img src='./img/$dadoCuatro.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='./img/$dadoCinco.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='./img/$dadoSeis.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
            </div>
            <p><b>EL GANADOR ES JUGADOR 1 POR OBTENER UN TRIO <b></p>
        </div>";
        }
    }elseif ($dadoCuatro == $dadoCinco && $dadoCuatro == $dadoSeis && $dadoCinco == $dadoSeis) {
        if ($dadoUno != $dadoDos || $dadoUno != $dadoTres || $dadoDos != $dadoTres) {
            echo "<div style='display:flex;align-items: center;flex-direction:column;'>
            <p>Jugador 1</p>
            <div style='margin: 15px;border: 3px solid $perdedor'>
                <img src='./img/$dadoUno.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='./img/$dadoDos.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='./img/$dadoTres.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
            </div>
            <p>Jugador 2</p>
            <div style='margin: 15px;border: 3px solid $ganador'>
                <img src='./img/$dadoCuatro.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='./img/$dadoCinco.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                <img src='./img/$dadoSeis.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
            </div>
            <p><b>EL GANADOR ES JUGADOR 2 POR OBTENER UN TRIO <b></p>
        </div>";
        }
    }//3: GANA EL QUE SAQUE PAREJA DE MAYOR VALOR

    if ($dadoUno == $dadoDos || $dadoDos == $dadoTres || $dadoUno == $dadoTres) {
        if ($dadoCuatro == $dadoCinco || $dadoCinco == $dadoSeis || $dadoSeis == $dadoCuatro) {
            if ($dadoUno + $dadoDos + $dadoTres > $dadoCuatro + $dadoCinco + $dadoSeis) {
                echo "<div style='display:flex;align-items: center;flex-direction:column;'>
                <p>Jugador 1</p>
                <div style='margin: 15px;border: 3px solid $ganador'>
                    <img src='./img/$dadoUno.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                    <img src='./img/$dadoDos.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                    <img src='./img/$dadoTres.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
                <p>Jugador 2</p>
                <div style='margin: 15px;border: 3px solid $perdedor'>
                    <img src='./img/$dadoCuatro.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                    <img src='./img/$dadoCinco.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                    <img src='./img/$dadoSeis.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
                <p><b>EL GANADOR ES JUGADOR 1 POR OBTENER PAREJA DE MAYOR VALOR <b></p>
            </div>";
            }
        }
    }elseif ($dadoCuatro == $dadoCinco || $dadoCinco == $dadoSeis || $dadoSeis == $dadoCuatro) {
        if ($dadoUno == $dadoDos || $dadoDos == $dadoTres || $dadoUno == $dadoTres) {
            if ($dadoCuatro + $dadoCinco + $dadoSeis > $dadoUno + $dadoDos + $dadoTres) {
                echo "<div style='display:flex;align-items: center;flex-direction:column;'>
                <p>Jugador 1</p>
                <div style='margin: 15px;border: 3px solid $perdedor'>
                    <img src='./img/$dadoUno.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                    <img src='./img/$dadoDos.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                    <img src='./img/$dadoTres.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
                <p>Jugador 2</p>
                <div style='margin: 15px;border: 3px solid $ganador'>
                    <img src='./img/$dadoCuatro.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                    <img src='./img/$dadoCinco.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                    <img src='./img/$dadoSeis.svg' style='width: 100px;height: 100px;justify-content: start;'></img>
                </div>
                <p><b>EL GANADOR ES JUGADOR 2 POR OBTENER UN TRIO <b></p>
            </div>";
            }
        }
    }
    ?>
</body>
</html>