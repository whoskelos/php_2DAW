<?php
if (isset($_POST['enviar'])) {
    if (isset($_POST['borrados']) && $_POST['borrados'] != "") {
        $seleccionados = $_POST['borrados'];
        $db = conectaDB();
        $db->query("use agenda");
        $sql = "DELETE FROM personas WHERE id_persona = ?";
        $result = $db->prepare($sql);
        foreach ($seleccionados as $id) {
            $query = $result->execute(array($id));
        }
        if ($query == true) {
            header("Location:borrar.php");
        }
    } else {
        echo "<div class='alert alert-danger mt-2'>No ha seleccionado ningun registro para borrar</div>";
    }
}
?>