<?php

require_once("conexion.php");

if($con != NULL){
    if(isset($_POST['usuario']) and isset($_POST['pass'])){
        $usuario = $_POST['usuario'];
        $pass = $_POST['pass'];


        $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' and pass='$pass'";

        $resultado = mysqli_query($con,$consulta);


        $fila = mysqli_fetch_array($resultado);

        $_SESSION = $fila;

        if($_SESSION['tipo'] == 'Admin' ){
            header("Location: ../admin/index.php");
        }else{
            
            header("Location: ../index.php");
        }

        if($fila == NULL){
            header("Location: ../paginas/login.php?error=ok");
        }

        if($fila['estado'] == 'banneado'){
            header("Location: ../paginas/login.php?ban=ok");
        }
    }
}

?>