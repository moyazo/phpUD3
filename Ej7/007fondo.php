<?php

if(isset($_POST["color"])){
    $color = $_POST["color"];
    
    setcookie("color",$color,time()+3600);
    
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
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script defer src="../script.js"></script>
    <script defer src="../js/bootstrap.bundle.js"></script>
    <title>005subidaImagen</title>
</head>
<body <?php echo "style= 'background-color: $color;'" ?>>
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

