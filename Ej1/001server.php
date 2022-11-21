<?php 

// DATOS DE $_SERVER

echo $_SERVER["PHP_SELF"]."<br><br>";  // A super global variable that returns the filename of the currently executing script
echo $_SERVER["SERVER_SOFTWARE"]."<br><br>";   // Server identification string, given in the headers when responding to requests.
echo $_SERVER["SERVER_NAME"]."<br><br>"; // The name of the server host under which the current script is executing.
echo $_SERVER["REQUEST_METHOD"]."<br><br>";  // Which request method was used to access the page; e.g. 'GET', 'HEAD', 'POST', 'PUT'.
echo $_SERVER["REQUEST_URI"]."<br><br>"; // The URI which was given in order to access this page; for instance, '/index.html'.
echo $_SERVER["QUERY_STRING"]."<br><br>"; // The query string, if any, via which the page was accessed.
echo $_SERVER["HTTP_USER_AGENT"]."<br><br>";  // This array value contains information about the operating system and browser that the user is using.


// PASAR PARAMETROS POR GET
 // $parametros = $_GET["parametro"];  // En nuestro html tendremos un name de referencia el cual podremos en $_GET["name"]. De esta manera obtendremos su valor
 // $parametros = $_GET[""];

 $nombre = $_POST["name"]; // En nuestro html tendremos un name de referencia el cual podremos en $_POST["name"]. De esta manera obtendremos su valor
 $apellido = $_POST["surname"];
 $año = $_POST["year"];
 $correo = $_POST["email"];
 $ps = $_POST["password"];


 echo $nombre."<br><br>";
 echo $apellido."<br><br>";
 echo $año."<br><br>";
 echo $correo."<br><br>";
 echo $ps."<br><br>";


 echo $_SERVER["HTTP_REFERER"]."<br><br>" // Returns the complete URL of the current page (not reliable because not all user-agents support it)

?>
