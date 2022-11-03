<?php
if (isset($_POST['enviar'])) {
    if ($txtCancion != "") {
        if ($tipoBusqueda != "") {
            if ($genMusical != "") {
                echo "
                    <h1>Formulario Simple. Resulado del formualario</h1>
                    <p>Estos son los datos introducidos:</p>
                    <ul>
                        <li>Texto de busqueda: $txtCancion</li>
                        <li>Buscar en: $tipoBusqueda</li>
                        <li>Genero: $genMusical</li>
                    </ul>
                ";
            }else {
                echo "<p class='error'>No ha seleccionado genero musical</p>";
            }
        }else {
            echo "<p class='error'>No ha seleccionado tipo de busqueda</p>";
        }
    }else {
        echo "<p class='error'>No ha escrito nada para buscar</p>";
    }
}
?>