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
	<header class="header">
		<div class="icon">
           	<i class="fas fa-bars"></i>
       	</div>
		<div class="header__caja-logo">
            <img class="header__caja-logotipo" src="../../img/LOGO.png" alt="Logotipo de electrónica telecolor">
            <img class="header__caja-logotipoCelular" src="../../img/LOGO2.png" alt="Logotipo de electrónica telecolor">
        </div>
        <div class="header__content">
            <div class="header__content-info">
            </div>
            <nav class="nav">
                <ul class="nav__listas">
                    <div class="close">
                        <div class="close__items">
                            <span>
                                Cerrar
                                <i class="fas fa-times"></i>
                            </span>
                        </div>
                    </div>
                    <li class="inicio">
                        <a href="#">
                            <i class="fas fa-home"></i>
                            <span>INICIO</span>
                        </a>
                    </li>
                </ul>

            </nav>

        </div>
	</header>
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