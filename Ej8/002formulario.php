<?php 

// DATOS RECIBIDOS por POST

$name = $_GET["name"];
$surname = $_GET["surname"];
$email = $_GET["email"];
$url = $_GET["url"];
$favorito = $_GET["fav"];
$sexo = $_GET["sexo"];

$size = $_GET["size"];

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

session_start(); // inicializamos
$_SESSION["sesion"] = $name; // asignación
$sesion = $_SESSION["daw"]; // recuperación
header("Location:008fondoSesion1.php");
?>


