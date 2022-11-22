<?php 

// DATOS RECIBIDOS por POST

$size = $_POST["size"];
$fav = $_POST["fav"];

session_start();
$array = $_SESSION["form1"];

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
    <title>009formulario3</title>
</head>
<body>
    
    

<div class="table-responsive d-flex align-items-center justify-content-center">
    <table class="table table-striped-columns
    table-hover	
    table-borderless
    table-primary
    align-middle align-items-center justify-content-center">
        <thead class="table-light">
            <caption></caption>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>URL</th> 
                <th>Familia(Size)</th>
                <th>Sexo</th>
                <th>Comida Favorita</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            <tr class="table-primary" >
                    <td scope="row"><?php echo $array[0]; ?></td>
                    <td scope="row"><?php echo $array[1]; ?></td>
                    <td scope="row"><?php echo $array[2]; ?></td>
                    <td scope="row"><?php echo $array[3]; ?></td>
                    <td scope="row"><?php echo $size; ?></td>
                    <td scope="row">
                        <?php 
                                foreach($array[4] as $s)
                                    if(isset($s)){
                                        echo "<br>" . $s . "<br>";
                                    }
                            
                        ?>
                    </td>
                    <td scope="row">
                        <?php 
                            foreach($fav as $favorito){
                                echo "<br>" . $favorito ."<br>";
                            }
                        ?>
                    </td>

                </tr>
            </tbody>
            <tfoot>
                
            </tfoot>
    </table>
</div>

</body>
</html>
