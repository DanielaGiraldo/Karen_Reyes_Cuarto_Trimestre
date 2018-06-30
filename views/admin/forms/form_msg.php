<fieldset>
	<body style="background-image: 
                url('http://localhost/WebMail/public/images/Men.jpg');">

					<legend style="font-size: 30px; color: #045A8A">Redactar nuevo mensaje</legend>
						<form name="register" method="post" action="http://localhost/WebMail/app/Http/Controllers/Controller.php">
							<p>
								<input type="email" class="form-control button2" name="dest_msg" placeholder="Para: " required>
							</p>
							<p>
								<input type="text" class="form-control button2" name="asunto_msg" placeholder="Asunto: " required>
							</p>
							<p>
								<textarea name="msg" class="form-control button2" rows="5" cols="100" required></textarea>
							</p>
							<p>
								<!-- Envio de datos ocultos -->
								<input type="hidden" name="genre" value="<?php echo $genre; ?>">
								<input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
								<input type="hidden" name="correo" value="<?php echo $correo; ?>">

								<input type="submit" class="button7" name="btn-msg" value="Enviar mensaje">
								<input type="reset"  class="button7" value="Limpiar datos">
							</p>
						</form>
					</fieldset>