<?php

require_once("../componentes/conexion.php");
include_once("../componentes/header.php");



if ($con) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $consulta= "DELETE FROM shorts WHERE id='$id'"; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){
        print "<h1 class='titulo-eliminar'>El Short fue Eliminado exitosamente!   <a href=index.php >Volver</a> </h1>";
        

    }
}

?>


<?php
require_once("../componentes/footer.php");
?>