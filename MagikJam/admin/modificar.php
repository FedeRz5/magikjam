<?php

require_once("../componentes/conexion.php");
include_once("../componentes/header.php");




if ($con) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

         $consulta = "SELECT * FROM shorts WHERE id='$id'";
        $resultado = mysqli_query($con, $consulta);

        if ($resultado) {
            $filas = mysqli_fetch_array($resultado);

            if ($filas) {  
                print "
                    <h1 class='Short'> Modificando el Short: $filas[short] </h1>
                    <form action='modificar2.php' method='post' enctype='multipart/form-data' class='admin-form'>
                    
                    <div class='mb-3'>
                        <label for='id' class='form-label'></label>
                        <input type='hidden' class='form-control' id='short' name='id' value='$filas[id]'> 
                    </div>
                    
                    <div class='mb-3'>
                        <label for='short' class='form-label'> Short: </label>
                        <input type='text' class='form-control' id='short'   name='short' value='$filas[short]' required> 
                    </div>

                    <div class='mb-3'>
                            <label for='pre' class='form-label'> Precio: </label>
                            <input type='number' class='form-control' id='pre' name='pre' value='$filas[precio]' required>
                    </div>

                    <div class='mb-3'>
                            <label for='arch' class='form-label'> Cargar Imagen: </label>
                            <input type='file' class='form-control' id='arch' name='arch' value='$filas[imagen]' required>
                    </div>

                    <div class='mb-3'>
                            <label for='imagen' class='form-label'>Imagen actual:</label>
                    </div>

                    <div class='mb-3'>
                            <img src='../img/$filas[imagen]' alt='Imagen actual' style='width: 200px; height: 200px;'/>
                    </div>
                    <button type='submit' class='btn btn-primary'> Modificar Short </button>
                    </form>
                ";
            } else {
                print "<p> No se encuentra id:  $id.</p>";
            }
        } else {
            print "<p> Algo salio mal </p>";
        }
    }
}
?>


<?php
require_once("../componentes/footer.php");
?>



    