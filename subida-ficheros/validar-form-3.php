<?php
if (isset($_POST['enviar'])) {
    include("sanear.php");
    $errores = [];

    $patronDirecion = "/^[A-Za-z0-9\s]+$/"; //letras,numeros y espacios
    $patronPrecio = "/^[0-9]+$/"; //solo numeros
    $patronTamano = "/^[0-9]+$/"; //solo numeros
    $patronObservaciones = "/^[A-Za-z0-9\s]+$/"; //letras,numeros y espacios

    /**Tipo vivienda */
    if (isset($_POST['tipoVivienda'])) {
        $tipoVivienda = sanear("tipoVivienda");
    } else {
        $errores[] = "No se ha seleccionado tipo de vivienda";
        echo "<p class='error'>No se ha seleccionado tipo de vivienda</p>";
    }

    /**Zona vivienda */
    if (isset($_POST['zonaVivienda'])) {
        $zonaVivienda = sanear("zonaVivienda");
    } else {
        $errores[] = "No se ha seleccionado zona de vivienda";
        echo "<p class='error'>No se ha seleccionado zona de vivienda</p>";
    }

    /**Direccion vivienda */
    if (isset($_POST['dirVivienda']) && $_POST['dirVivienda'] != "") {
        $dirVivienda = sanear("dirVivienda");
        if (!preg_match($patronDirecion, $dirVivienda)) {
            $errores[] = "Formato de direccion no valida";
            echo "<p class='error'>Formato de direccion no valida</p>";
        }
    } else {
        $errores[] = "Campo direccion esta vacio";
        echo "<p class='error'>Campo direccion esta vacio</p>";
    }

    /**Numero dormitorios */
    if (isset($_POST['numDormitorios']) && $_POST['numDormitorios'] != "") {
        $numDormitorios = sanear("numDormitorios");
    } else {
        $errores[] = "Seleccione un numero de dormitorios";
        echo "<p class='error'>Seleccione un numero de dormitorios</p>";
    }

    /**Precio vivienda */
    if (isset($_POST['precioVivienda']) && $_POST['precioVivienda'] != "") {
        $precioVivienda = sanear("precioVivienda");
        if (!preg_match($patronPrecio, $precioVivienda)) {
            $errores[] = "Formato de precio no valido";
            echo "<p class='error'>Formato de precio no valido</p>";
        }
    } else {
        $errores[] = "Campo precio esta vacio";
        echo "<p class='error'>Campo precio esta vacio</p>";
    }

    /**tamano vivienda */
    if (isset($_POST['tamanoVivienda']) && $_POST['tamanoVivienda'] != "") {
        $tamanoVivienda = sanear("tamanoVivienda");
        if (!preg_match($patronTamano, $tamanoVivienda)) {
            $errores[] = "Formato de tamano no valido";
            echo "<p class='error'>Formato de tamano no valido</p>";
        }
    } else {
        $errores[] = "Campo tamano esta vacio";
        echo "<p class='error'>Campo tamano esta vacio</p>";
    }

    /**Extras de la vivienda */
    if (isset($_POST['extras']) && $_POST['extras'] != "") {
        include("sanear_arr.php");
        $extras = sanear_arr("extras");
    } else {
        $errores[] = "No ha seleccionado extras";
        echo "<p class='error'>No ha seleccionado extras</p>";
    }

    /**Imagen vivienda */
    if (is_uploaded_file($_FILES['imgVivienda']['tmp_name'])) {
        $nombreDirectorio = "imagenes/";
        $nombreFichero = $_FILES['imgVivienda']['name'];
        $nombreCompleto = $nombreDirectorio . $nombreFichero;
        if (is_file($nombreCompleto)) {
            $idUnico = time();
            $nombreFichero = $idUnico . "-" . $nombreFichero;
            $nombreCompleto = $nombreDirectorio . $nombreFichero;
        }
        if (!move_uploaded_file($_FILES['imgVivienda']['tmp_name'], $nombreCompleto)) {
            $errores[] = "Error al subir la foto" . $_FILES['imgVivienda']['error'];
            echo "<p class='error'>Errpr al subir foto</p>";
        }
    }

    /**Observaciones vivienda */
    if (isset($_POST['obsVivienda']) && $_POST['obsVivienda'] != "") {
        $obsVivienda = sanear("obsVivienda");
        if (!preg_match($patronObservaciones, $obsVivienda)) {
            $errores[] = "Formato no valido";
            echo "<p class='error'>Formato no valida</p>";
        }
    } else {
        $errores[] = "Campo observacion esta vacio";
        echo "<p class='error'>Campo observacion esta vacio</p>";
    }

    /**Mostrar datos si todo okay */
    if (empty($errores)) {
        echo "
            <h1>Resultado</h1>
            <p>La <strong>direccion</strong> es: $dirVivienda</p>
            <p>El <strong>precio</strong> es: $precioVivienda</p>
            <p>La <strong>observacion</strong> es: $obsVivienda</p>
            <p>El <strong>tamano que solicta es</strong> es: $tamanoVivienda</p>
            <p>El <strong>tipo que solicta es</strong> es: $tipoVivienda m2</p>
            <p>La <strong>zona que solicita</strong> es: $zonaVivienda</p>
            <p>El <strong>numero de dormitorios que solicita</strong> es: $numDormitorios</p>
            <p>Los <strong>extras que solicita son:</strong></p>
            <ul>
        ";
        foreach ($extras as $key => $value) {
            echo "<li>$value</li>";
        }
        echo "</ul>";
        echo "
            <h3>El piso solictado seria:</h3>
            <img src='$nombreCompleto'></img>
        ";
    }
}
