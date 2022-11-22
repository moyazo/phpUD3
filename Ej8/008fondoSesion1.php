<?php
session_start(); //Iniciamos sesion con session_start()

    $_SESSION["color"] = $_POST["color"];
    $color = $_SESSION["color"];  //Guardamos el color en la sesión con $_SESSION["color"] por $_POST["color"]

    
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.css">
    <title>008fondoSesion1</title>
</head>
<body <?php echo "style= 'background-color: $color;'" ?>>
    <div class="container-fluid w-25">
            <form action="008fondoSesion1.php" method="post">
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
                <input type="submit" value="change">
                <a href="./408fondoSesion2.php">ENIVAR COLOR</a>
            </form>
    </div>
</body>
</html>

