<?php include ('templates/head.php'); ?>

	<body style="
        background-image: 
                url('http://localhost/WebMail/public/images/Men.jpg');">

	<div class="container spacing-top">
	<br><br><br><br>	
				<fieldset>
					<legend style="font-size: 35px; color: #045A8A">Formulario de Ingreso</legend>
						<form name="login" method="post" action="http://localhost/WebMail/app/Http/Controllers/Auth/AuthController.php">
							<br><br>
							<p>
								<input type="email" id="log" class="form-control button2" name="correo_log" placeholder="Correo electronico.." required>
							</p>
							<p>
								<input type="password" id="passlog" class="form-control button2" name="pass_log" placeholder="Contraseña.." required>
							</p>
							<p>
								<!-- Envio de datos ocultos -->
								<input type="hidden" name="genre" value="<?php echo $genre; ?>">
								<input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
								<input type="hidden" name="correo" value="<?php echo $correo; ?>">
								<input type="hidden" name="password" value="<?php echo $password; ?>">

								<input type="submit" class="button7" name="btn-login" value="Ingresar">
								<input type="reset" class="button7" value="Cancelar">
							</p>
						</form>
					</fieldset>
			</div>
		</div>
	</div>

<?php include ('templates/foot.php'); ?>