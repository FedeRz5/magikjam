<?php

include_once("../componentes/header.php");
require_once("../componentes/conexion.php");



if ($con != NULL) {

    print "
   

    <main>
    <h1 class=text-center>  </h1>
    ";

   
    

    $consulta = "SELECT id, short, precio, imagen FROM shorts";

    $respuesta = mysqli_query($con, $consulta);


    print "<table class='table contenedor-tabla'>
    <thead>
      <tr>
        
        <th scope='col'> Short </th>
        <th scope='col'> Precio </th>
        <th scope='col'> Modificar </th>
        <th scope='col'> Eliminar </th>
      </tr>
    </thead>
    <tbody>
            ";

    while ($fila = mysqli_fetch_array($respuesta)) {
        print "
        <tr>
        
        
        <td>$fila[short]</td>
        <td>$$fila[precio]</td>
        <td><a href=modificar.php?id=$fila[id]>Modificar</a></td>
        <td><a href=eliminar.php?id=$fila[id]>Eliminar</a></td>
      </tr>
                
    ";
    }

    
  
   

    print "
    </tbody>
    </table>
                    </main>";

} else {
    print "
        <h1>Algo salió mal</h1>
        ";
}


?>
    




<form action="agregar.php" method="post" enctype="multipart/form-data" class="admin-form">

  <div class="mb-3">
    <label for="short" class="form-label"> Short: </label>
    <input type="text" class="form-control" id="short"   name="short" required> 
</div>
  <div class="mb-3">
    <label for="pre" class="form-label"> Precio: </label>
    <input type="number" class="form-control" id="pre" name="pre" required>
  </div>
  <div class="mb-3">
    <label for="arch" class="form-label"> Cargar Imagen: </label>
    <input type="file" class="form-control" id="arch" name="arch" required>
  </div>
 
  <button type="submit" class="btn btn-primary"> Enviar </button>
</form>

<a class="volver" href="../index.php">Ir al inicio</a>


<?php
require_once("../componentes/footer.php");
?>