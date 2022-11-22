<?php
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script defer src="../script.js"></script>
    <script defer src="../js/bootstrap.bundle.js"></script>
    <title>002formulario</title>
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
                    <td scope="row"><?php echo $name; ?></td>
                    <td scope="row"><?php echo $surname; ?></td>
                    <td scope="row"><?php echo $email; ?></td>
                    <td scope="row"><?php echo $url; ?></td>
                    <td scope="row"><?php echo $size; ?></td>
                    <td scope="row">
                        <?php 
                            foreach($sexo as $s){
                                    if(isset($s)){
                                        echo "<br>" . $s . "<br>";
                                    }
                            }
                        ?>
                    </td>
                    <td scope="row">
                        <?php 
                            foreach($favorito as $fav){
                                echo "<br>" . $fav ."<br>";
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
</body>
</html>

