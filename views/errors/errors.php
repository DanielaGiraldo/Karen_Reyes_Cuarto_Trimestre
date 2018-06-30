<?php
$error = $_GET['error'];
	if($error == 1){
		echo "
				<br>
				<h3 style='text-align: center;'>
				<figure>
	           <br><img src='http://localhost/WebMail/public/images/error1.png' style='width:5%;'>
				<span style='color: #5248A0  ;'>
				ERROR 1
				</span>
				: Las contraseñas no coinciden, prueba a registrarte nuevamente!
				</h3>
				</figure>
				<br>
			 ";
	}
	elseif($error == 2){
		echo "
				<br>
				<h3 style='text-align: center;'>
				<figure>
	           <br><img src='http://localhost/WebMail/public/images/error1.png' style='width:5%;'>
				<span style='color: #5248A0  ;'>
				ERROR 2
				</span>
				: Los datos de acceso no son correctos, intenta nuevamente!
				</h3>
				</figure>
				<br>
			 ";
	}
	elseif($error == 3){
		echo "
				<br>
				<h3 style='text-align: center;'>
				<figure>
	           <br><img src='http://localhost/WebMail/public/images/error1.png' style='width:5%;'><span style='color: #5248A0  ;'>
				ERROR 3
				</span>
	           : Debe seleccionar un genero!
				</h3>
	           </figure>
				
				<br>
			 ";
	}
?>