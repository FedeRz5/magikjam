<?php

require_once("../componentes/conexion.php");
include_once("../componentes/header.php");



if ($con) {
    if (isset($_POST['short']) && isset($_POST['pre']) && isset($_POST['id'])) {
        $id = $_POST['id'];
        $short = $_POST['short'];
        $precio = $_POST['pre'];

        
        if (isset($_FILES['arch']) && $_FILES['arch']['error'] == 0) {
            $imagen_temporal = $_FILES['arch']['tmp_name'];
            $imagen_nombre = $_FILES['arch']['name'];


            
            $ruta_destino = "../img/$imagen_nombre";

            
            move_uploaded_file($imagen_temporal, $ruta_destino);

            
        }

        if (isset($_FILES['arch']) && $_FILES['arch']['error'] == 0) {
            $consulta = "UPDATE shorts SET short='$short', precio='$precio', imagen='$imagen_nombre' WHERE id='$id' ";

        } else {
            $consulta = "UPDATE shorts SET short='$short', precio='$precio' WHERE id='$id' ";

        }
        $resultado = mysqli_query($con, $consulta);

        if ($resultado) {
            print "<h1  class='titulo-modificar'>El Short fue modificado Exitosamente!  por $short <a href=index.php >Volver</a></h1>";
            
        } else {
            print "<p>Error al ejecutar la consulta: " . mysqli_error($con) . "</p>";
        }
    }
}

?>

<?php
require_once("../componentes/footer.php");
?>