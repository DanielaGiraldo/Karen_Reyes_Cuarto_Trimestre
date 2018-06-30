<fieldset>
		    <body style="background-image: 
                url('http://localhost/WebMail/public/images/Men.jpg');">

					<legend style="font-size: 30px; color: #045A8A">Inbox: 

						<?php
						if(isset($_SESSION['email'])){
							echo $_SESSION['email'];
						} 
						?>
					</legend>
						<form name="register" method="post" action="http://localhost/WebMail/app/Http/Controllers/Controller.php">
							<p>
								<input type="email" class="form-control button2" value="<?php echo $asunto_msg; ?>" style="background-color:#fff;" readonly>
							</p>
							<p>
								<input type="text" class="form-control button2" value="<?php echo $dest_msg; ?>" style="background-color:#fff;" readonly>
							</p>
							<p>
								<textarea rows="5" class="form-control button2" style="background-color:#fff;" cols="100" readonly><?php echo $msg; ?></textarea>
							</p>
							
						</form>
					</fieldset>