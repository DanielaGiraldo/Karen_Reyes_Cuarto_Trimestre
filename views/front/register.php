<?php include ('templates/head.php'); 

if(isset($_GET['error'])){
	include ('views/errors/errors.php');
}
?>
<body style="
        background-image: 
                url('http://localhost/WebMail/public/images/Men.jpg');">

	<div class="container spacing-top">
		<br><br>
				<fieldset>
					<legend style="font-size: 35px; color: #045A8A">Formulario de Registro</legend>
						<form name="register" method="post" action="http://localhost/WebMail/app/Http/Controllers/registroController.php">
							<br><br>
							<p>
								<select class="button7" name="genre" required>
									<option value="hombre">Hombre</option>
									<option value="mujer">Mujer</option>
									<option value="genero" selected>Genero</option>
								</select>
							</p>
							<p>
								<input type="text" id="name" class="form-control button2" name="nombre" placeholder="Nombre completo.." required>
							</p>
							<p>
								<input type="email" id="correo" class="form-control button2" name="correo" placeholder="Correo electronico.." required>
							</p>
							<p>
								<input type="password" class="form-control button2" name="password" id="password" placeholder="Ingresa Contraseña..."
			                    pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
			                    onchange="this.setCustomValidty(this.validity.patternMismatch ? 'Debe contener entre 8 y 16 caracteres:
			                    (Digitos, minusculas, mayusculas, y simbolos)' : ''); if
			                    (this.checkValidity()) form.confirm_password.pattern = this.value;" required>
							</p>
							<p>
							    <input type="password" class="form-control button2" name="conf_pass" id="confirm_password" placeholder="Confirma tu contraseña"
			                    pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$" onchange="this.setCustomValidity(this.validity.
			                    patternMismatch ? 'Por favor, ingresa la misma contraseña de arriba' : '');" required>
							</p>
							<p>
								<input type="submit" class="button7" name="btn-register" value="Registrar usuario">
								<input type="reset" class="button7" value="Limpiar datos">
							</p>
						</form>
					</fieldset>
                  <p><a href="http://localhost/WebMail/views/front/login.php" class="registrado">Ya estoy registrado!</a></p>
			</div>

		</div>
	</div>

<?php include ('templates/foot.php'); ?>

