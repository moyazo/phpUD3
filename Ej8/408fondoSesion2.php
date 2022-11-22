<?php
session_start(); //Volvemos a iniciar la sesión
if(isset($_POST["sesion"])){ // Si cerramos la sesión se establece a blanco
    session_destroy();
    unset($_SESSION["color"]);
    $color = "white";
}else{
    $color =  $_SESSION["color"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.css">
    <title>408fondoSesion2</title>
</head>
<body <?php echo "style= 'background-color: $color;'" ?>>
    <div class="container-fluid w-25">
           <a href="008fondoSesion1.php">VOLVER</a>
           <form action="408fondoSesion2.php" method="post">
            <input type="submit" value="cerrarSesión" name="sesion">
           </form>
    </div>
</body>
</html>
