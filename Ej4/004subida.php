<?php
  
  if(!empty($_FILES['archivo'])){ // si $_FILES['archivo'] no está vacio recoge los datos de $_FILES['archivo']
    $errors= array();
    $file_name = $_FILES['archivo']['name'];
    $file_size = $_FILES['archivo']['size'];
    $file_tmp = $_FILES['archivo']['tmp_name'];
    $file_type = $_FILES['archivo']['type'];
    $file_ext=strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $extensions= array("jpeg","jpg","png"); // Metemos los tipos de extensiones de los files en un array
    if(in_array($file_ext,$extensions)=== false){ // utilizando el método in_array(comprueba si existe el valor del array)
       $errors[]="Estensión no permitida. Prueba con imágenes jpeg,jpng o png.";
    }
    if($file_size > 2097152) { // Controlamos el tamaño del file
       $errors[]='El archivo no puede pesar más de 2MB';
    }
    if(empty($errors)==true) { //El archivo elegido será guardado en la ruta especificada si no hay fallos
       move_uploaded_file($file_tmp,"../images/".$file_name);
       echo "La imagen se ha guardado correctamente";
    }else{
       print_r($errors);  // Muestra todos los errores
    }
 }
  ?>