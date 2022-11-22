<?php
             
              if(filter_var($name,FILTER_VALIDATE_INT)){
                    $name = $_GET['name']; 
                }else{
                    echo "Es texto";    
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
    <title>003validacion</title>
</head>
<body>
    
<div class="container-fluid w-25 d-flex align-items-center justify-content-center">
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
        <section id="n">
            <div class="mb-3">
              <label for="nombre" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="nombre" aria-describedby="helpId" placeholder="" required value=" <?php $name ?>">
              
            </div>
        </section>

        <section id="sn">
            <div class="mb-3">
                <label for="apellido" class="form-label">Surname</label>
                <input type="text" class="form-control" name="surname" id="apellido" aria-describedby="helpId" placeholder="" required>
            </div>
        </section>

        
        <section id="e">
            <div class="mb-3">
                <label for="correo" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="correo" aria-describedby="helpId" placeholder="" required>
            </div>
        </section>

        <section id="url">
            <div class="mb-3">
                <label for="web" class="form-label">Web Url</label>
                <input type="url" class="form-control" name="url" id="web" aria-describedby="helpId" placeholder="" required>
            </div>
        </section>

        <section id="sx">
            
                <div class="container-fluid d-flex align-items-center justify-content-center">
                    <label for="sexo" class="form-label">MASCULINO</label>
                    <input type="radio" class="form-check-input m-4" name="sexo[]" id="sexo1" aria-describedby="helpId" value="MASCULINO" >
                    <label for="sexo" class="form-label">FEMENINO</label>
                    <input type="radio" class="form-check-input m-4" name="sexo[]" id="sexo2" aria-describedby="helpId" value="FEMENINO">
                    <label for="sexo" class="form-label">OTRO</label>
                    <input type="radio" class="form-check-input m-4" name="sexo[]" id="sexo3" aria-describedby="helpId" value="OTRO">
                </div>
                
            
        </section>
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

