<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../estilos/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MagiK Jam - Iniciar Sesion</title>
</head>
<?php
    if(isset($_GET['error']))
    print "<strong style=color:red> Tu usuario o contraseña esta incorrecto/a </strong>"

?>
<body class="body-log">
    <div class="wrapper">
        <form action="../componentes/log.php" method="post">
            <h1 style="color: white;">Administradores</h1>
            <div class="input-box">
                <input type="text" placeholder="Usuario" required id="usuario" name="usuario" >
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Contraseña" required id="pass" name="pass"> 
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div>
                <button type="submit" class="btn">Iniciar sesión</button>
            </div>
            
            <button class="back-home" onclick="window.location.href = '../index.php';">Back home</button>

            
        </form>
    </div>
</body>

</html>