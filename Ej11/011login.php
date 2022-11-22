<?php
if (isset($_POST['enviar'])) { // si $_POST['enviar'] no está vacio recibimos parametros
    $usuario = $_POST['inputUsuario']; // GUARDAMOS CON POST
    $password = $_POST['inputPassword'];

    // Comprobamos que no están vacios
    if (empty($usuario) || empty($password)) {
        $error = "Debes introducir un usuario y contraseña";
        include "../Ej10/010index.php"; // Volvemos al formulario para que lo vuelva a introducir
    } else {
        if ($usuario == "admin" && $password == "admin") {
            //Guardamos datos en la sesión iniciada
            session_start();
            $_SESSION['usuario'] = $usuario;
            include "../Ej12/012peliculas.php"; // Mostramos la página de inicio
        } else {
            // Si datos no son válidas, se vuelven a pedir
            $error = "Usuario o contraseña no válidos!";
            include "../Ej10/010index.php";
        }
    }
}
?>