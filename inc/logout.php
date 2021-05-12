<?php 
session_start(); /* Inicia la sesion */
unset($_SESSION["s_usuario"]);
session_destroy(); /* Destruye la sesion */
header("location:../index.php");
?>
