<?php
//crear sesion
session_start();
//vaciar sesion
$_SESSION = array();
//Destruir sesion
session_destroy();
//Redireccionar a login.php
header("location:http://localhost/WebMail/index.php");
?>