<?php 

if(isset($_GET['inicio'])){

session_start();

}

//Encabezado de la pagina
include ('templates/head.php');

//validar errores
if(isset($_GET['error'])){
	include ('errors/errors.php');
}


?>

<div class="container spacing-top">
	<div class="row">
		<div class="col-4 color">

			<center>
				
				<figure>
					<?php include('partials/genre.php') ?>
				</figure>

			</center>

		</div>
		<div class="col-8 color bienvenido">
			<?php 
				if(isset($_SESSION['usuario'])){
					echo '<h2 style="color: #045A8A">Bienvenid@: <i>', $_SESSION['usuario']. '</i></h2>';
				}
				?>
		</div>
		<div class="col-12 color2">
			<?php include('forms/form_msg.php'); ?>
		</div>
	</div>
</div>

<?php include ('templates/foot.php'); ?>