<!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
        <style>
            body {
                font-family: sans-serif;
                background: aquamarine;
            }

            h1 {
                text-align: center;
            }

            .error {
                color: red;
            }
        </style>
    </head>

    <body>
        <h1>Datos Personales 3(Formulario)</h1>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>
                        Sexo:
                        <input type="radio" name="sexo" value="Hombre">Hombre
                        <input type="radio" name="sexo" value="Mujer">Mujer
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Enviar" name="enviar">
                        <input type="reset" value="Borrar">
                    </td>
                </tr>
            </table>
        </form>
    </body>

    </html>