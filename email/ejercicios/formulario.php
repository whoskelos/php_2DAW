<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Mail</title>
</head>

<body>
    <div class="formulario">
        <form action="./ejer1.php" method="POST">
            Nombre: <br>
            <input type="text" name="nombre">
            <br>
            Apellidos: <br>
            <input type="text" name="apellidos">
            <br>
            Email: <br>
            <input type="mail" name="para">
            <br>
            Asunto: <br>
            <input type="text" name="asunto">
            <br>
            Mensaje: <br>
            <textarea name="descripcion" id="mensaje" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" value="Enviar" name="enviar">
        </form>
    </div>
</body>

</html>