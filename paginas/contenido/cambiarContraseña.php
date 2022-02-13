<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="../../styles/paginas/cambiarContrasena.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

	<script src="../../js/slider.js"></script>

	<?php require('../layouts/head.php') ?>
	
	<title>Cambiar Contraseña</title>
</head>
<body>
<?php require('../layouts/menu.php') ?>

	<div class="container">
		
		<div class="title text-center py-4">
			<h2 class="">CAMBIAR CONTRASEÑA</h2>
		</div>

		<form>
			<div class="container_row">
				
				<div class="container_row-group">
					<h6>Una contraseña segura contribulle a evitar el acceso no autorizado a la cuenta.</h6>
				</div>
				<div class="container_row-group">
					<h6>Contraseña actual: </h6>
					<input type="text" class="container_row-input" placeholder="Ingrese la contraseña Actual" required>
					<li class="container_row-li"><a href="">¿Olvidaste tu contraseña?</a></li>
					
				</div>
				<div class="container_row-group">
					<h6>Nueva Contraseña: </h6>
					<input type="text" class="container_row-input" placeholder="Ingrese su Nueva Contraseña" required>
				</div>
				<div class="container_row-group">
					<h6>Vuelva a escribir la contraseña: </h6>
					<input type="text" class="container_row-input" placeholder="Vuelva a escribir su Nueva Contraseña" required>
				</div>
				<div class="container_row-group">
						<input type="checkbox" checked="checked">
						<span class="checkmark"> Recordarme Cambiar la Contraseña cada 72 días.</span>
				</div>
				<br>
				<div class="container_row-conbuton">
					<button class="container_row-buton"> Guardar Cambios</button>
				</div>
				<div class="container_row-conbuton">
					<button class="container_row-buton"> Canselar</button>
				</div>
			</div>
			<br>
		</form>
	</div>
	<?php require('../layouts/footer.php') ?>
	</body>
</html>