<?php 

// DATOS RECIBIDOS por POST

$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$url = $_POST["url"];
$sexo = $_POST["sexo"];

session_start();
$_SESSION["form1"] = [$name,$surname,$email,$url,$sexo];
$array = $_SESSION["form1"];



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.css">
    <title>009formulario2</title>
</head>
<body>
    
    

<div class="container-fluid w-25 d-flex align-items-center justify-content-center">
    <form action="009formulario3.php" method="post">
        <section id="con">
            
            <div class="container-fluid d-flex align-items-center justify-content-center">
                <div class="mb-3">
                  <label for="tamaño" class="form-label">Family Sizing</label>
                  <input type="text"
                    class="form-control" name="size" id="tamaño" aria-describedby="helpId" placeholder="">
                </div>
            </div>
            
        
    </section>
     <section id="fav">
            
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center p-5">
           <div class="form-check">
             <input class="form-check-input" type="checkbox" value="HAMBURGESA" id="f" name="fav[]">
             <label class="form-check-label" for="fav">
                HAMBURGESA
             </label>
           </div>
           <div class="form-check">
             <input class="form-check-input" type="checkbox" value="PIZZA" id="f" name="fav[]">
             <label class="form-check-label" for="fav">
                PIZZA
             </label>
           </div>
           <div class="form-check">
            <input class="form-check-input" type="checkbox" value="PASTA CARBONARA" id="f" name="fav[]">
            <label class="form-check-label" for="fav">
               PASTA CARBONARA
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="SOLOMILLO WISKY" id="f" name="fav[]">
            <label class="form-check-label" for="f">
               SOLOMILLO WISKY
            </label>
          </div>
        </div>
        
    
    </section>
        <section id="sb">
            <div class="mb-3">
                <input type="submit" class="form-control"  id="ps" aria-describedby="helpId" value="ENVIAR" name="submit">
            </div>
        </section>
    </form>
</div>
        

</body>
</html>







