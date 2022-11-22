<?php
session_start();

session_destroy();
header("Location: ../Ej10/010index.php");
?>