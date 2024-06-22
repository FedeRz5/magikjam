<?php

require_once("../componentes/conexion.php");

if ($con != NULL) {
    if(isset($_POST['short']) and isset($_POST['pre'])){
       $auto = $_POST['short'];
       $precio = $_POST['pre'];
       // $_FILES
       $hora = time();
       $foto = $hora.'.jpg';

       move_uploaded_file($_FILES ['arch']['tmp_name'], "../img/$foto");
        
       
       
       $consulta = "INSERT INTO shorts(short, precio, imagen) VALUES ('$auto','$precio','$foto')";
        
        $respuesta = mysqli_query($con, $consulta);
    

        header("Location: index.php");
    
    }
   

   
   

} else {
    print "
            <h1>Algo salió mal</h1>
        ";
}


?>

