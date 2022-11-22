
<!-- No tengo ni idea de hacerlo -->



<?php
  
  if(!empty($_FILES['archivo'])){
    $errors= array();
    $file_name = $_FILES['archivo']['name'];
    $file_size = $_FILES['archivo']['size'];
    $width = $_POST["size1"];
    $height = $_POST["size2"];
    imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
    $file_tmp = $_FILES['archivo']['tmp_name'];
    $file_type = $_FILES['archivo']['type'];
    $file_ext=strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $extensions= array("jpeg","jpg","png");
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="Estensión no permitida. Prueba con imágenes jpeg,jpng o png.";
    }
    if($file_size > 2097152) {
       $errors[]='El archivo no puede pesar más de 2MB';
    }
    if(empty($errors)==true) {
       move_uploaded_file($file_tmp,"../images/".$file_name);
       echo "La imagen se ha guardado correctamente";
    }else{
       print_r($errors);
    }
 }
  ?>

  