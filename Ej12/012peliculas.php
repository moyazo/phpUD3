<?php
// Recuperamos la información de la sesión
if (!isset($_SESSION)) {
    session_start();
}
// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario'])) {
    die("Error - debe <a href='index.php'>identificarse</a>.<br />");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.css">
    <title>012peliculas</title>
</head>

<body>
    <form action="../Ej13/013logout.php">
        <button>LOG OUT</button>
    </form>
    
    <div class="table-responsive">
        <table class="table table-striped-columns
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <caption>PÉLICULAS</caption>
                <tr>
                    <th colspan="3"><h2>Listado de productos<i class="bi bi-cart2"></i></h2></th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr class="table-primary" >
                        <td scope="row"><p>Los Vengadores: Infinity War</p></td>
                        <td><p>Los Vengadores: End-Game</p></td>
                        <td><p>Thor: Ragnarok</p></td>
                    </tr>
                </tbody>
                <tfoot>
                    
                </tfoot>
        </table>
    </div>
    
</body>

</html>