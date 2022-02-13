<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="../../styles/paginas/retroalimentacion.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
	<script src="../../js/slider.js"></script>
	<?php require('../layouts/head.php') ?>	
	<title>Retroalimentacion</title>
</head>
<body>
	<?php require('../layouts/menu.php') ?>
	<div class="container">	
		<div class="title text-center py-4">
			<h2 class="">RETROALIMENTACIÓN</h2>
		</div>

		<form>
			<div class="container_row">
				
				<div class="container_row-group">
					<h6>Querido usuario su opinion es importante, deje su comentario para ayudarnos a mejorar.</h6>
				</div>
				<div class="container_row-group">
					<h6>Nombre: </h6>
					<input  id="name" name="name" type="text" class="container_row-input" placeholder="Ingrese su Nombre" required>
				</div>
				<div class="container_row-group">
					<h6>E-mail: </h6>
					<input id="email" name="email" type="text" class="container_row-input" placeholder="Ingrese su Correo Electronico" required>
				</div>
				<div class="container_row-group">
					<h6>Comentario: </h6>
					<textarea class="container_row-textarea" placeholder="Ingrese su Comentario" required></textarea>
				</div>
				<br>
				<div class="container_row-conbuton">
					<button class="container_row-buton"> Enviar Comentario</button>
				</div>
				<div class="container_row-conbuton">
					<button class="container_row-buton"> Cancelar</button>
				</div>
			</div>
			<br>
		</form>
	</div>
	<?php require('../layouts/footer.php') ?>
	</body>
</html>