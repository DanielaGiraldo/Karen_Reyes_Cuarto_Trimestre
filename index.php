<?php 
//Encabezado de la pagina
include ('views/front/templates/head.php');
//validar errores
if(isset($_GET['error'])){
	include ('views/errors/errors.php');
}
?>

<body style="
        background-image: 
                url('http://localhost/WebMail/public/images/Men.jpg');">

<div class="container spacing-top">
	<br><br>

<center>
	<h1 style="color: #045A8A"> Bienvenidos a WebMail</h1>
	<br><br>
	<div id="img">
		<img src="http://localhost/WebMail/public/images/mail.png" width="40%">
  </div>
</center>
</div>
<br><br>

<?php include ('views/front/templates/foot.php'); ?>