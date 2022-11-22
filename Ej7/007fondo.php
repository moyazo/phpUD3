<?php

if(isset($_POST["color"])){ // Controlamos si $_POST["color"] esta vacio
    $color = $_POST["color"]; // Guardamos el color recibido por $_POST["color"]
    
    setcookie("color",$color,time()+3600); // creamos la COOKIE con setcookie()
    
}else{
    
    if(isset($_COOKIE["color"])){
        $color = $_COOKIE["color"];
    }else{
        $color = "white";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.css">
    <title>007fondo</title>
</head>
<body <?php echo "style= 'background-color: $color;'" ?>> <!-- No se poner el estilo de otra forma -->

<!-- Formulario para color -->
<div class="container-fluid w-25">
            <form action="007fondo.php" method="post">
                <label for="color">ELIGE COLOR</label>
                <select name="color">
                    <option value="red">Rojo</option>
                    <option value="yellow">Amarillo</option>
                    <option value="green">Verde</option>
                    <option value="blue">Azul</option>
                    <option value="black">Negro</option>
                    <option value="orange">Naranja</option>
                    <option value="pink">Rosa</option>
                </select>
                <input type="submit" value="Cambiar Color">
            </form>
    </div>
</body>
</html>

