<?php
require_once("./componentes/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./estilos/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MagiK Jam</title>
</head>
<body class="body-abm">
    <header>
        <nav class="navbar navbar-light bg-light-gray">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./img/logo3.png" alt="Logo" width="300" height="200">
                </a>
                <span class="navbar-text mx-auto display-4 custom-font">Magik Jam</span>
                <a href="paginas/login.php"><i class="fa-solid fa-user fa-3x icon"></i> </a>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        
        
        <?php
      
       

        if ($con != NULL) {
            $consulta = "SELECT id, short, precio, imagen FROM shorts";
            $respuesta = mysqli_query($con, $consulta);

            echo "<div class='row'>";
            echo "<div class='container'>";
            echo "<section class='productos-index'>";
            echo "<div class='container text-center'>";
            echo "<div class='row align-items-start'>";

            while ($fila = mysqli_fetch_array($respuesta)) {
                echo "
                <div class='col-md-4'>
                    <div class='card mb-4'>
                        <img src='./img/{$fila['imagen']}' class='card-img-top' alt='{$fila['short']}'>
                        <div class='card-body'>
                            <h3 class='card-title'>{$fila['short']}</h3>
                            <a> M / L </a>
                            <a href='#' class='btn btn-primary'>\${$fila['precio']}</a>
                        </div>
                    </div>
                </div>";
            }

            echo "</div>"; 
            echo "</div>"; 
            echo "</section>";
            echo "</div>"; 
            echo "</div>"; 
        } else {
            echo "<h1>Algo salió mal</h1>";
        }

        
        ?>
    </div>

  
</body>
<?php
require_once("./componentes/footer.php");
?>
</html>
