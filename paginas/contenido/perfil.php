<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="../../styles/paginas/perfil.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

	<script src="../../js/slider.js"></script>

	<?php require('../layouts/head.php') ?>
	
	<title>Perfil</title>
</head>
<body>
	<?php require('../layouts/menu.php') ?>
	<div class="contra">
		<div class="edicion">
			<div class="edicion_perfil">
				<div class="edicion_perfil-logo">
					<i class="fas fa-user-cog"></i>
				</div>
				<div class="edicion_perfil-contenido">
					<h3>Editar Perfil</h3>
					<p>  Edita y completa tu perfil  </p>
				</div>
			</div>
			<div class="edicion_perfil">
				<div class="edicion_perfil-logo">
					<i class="fas fa-lock"></i>
				</div>
				<div class="edicion_perfil-contenido">
					<h3>Cambiar Contraseña</h3>
					<p>Cambia la contraseña para mejorar <br> la seguridad de la cuenta</p>
				</div>
				
			</div>
			<div class="edicion_perfil">
				<div class="edicion_perfil-logo">
					<i class="fas fa-edit" ></i>
				</div>
				<div class="edicion_perfil-contenido">
					<h3>Retroalimentaciòn</h3>
					<p>Deja tu sugerencia y comentario</p>
				</div>
				
			</div>
		</div>
		<div class="preguntas">
			<div class="preguntas_buscador">
				<div class="d-flex form-inputs">
					<input class="form-control" type="text" placeholder="Busca pregunta frecuente">
					<div class="logo-search">
						<i class="fas fa-search"></i>
					</div>
				</div>
			</div>
			<div class="preguntas_opciones">
				<div class="preguntas_opciones-uno">
					<div class="preguntas_opciones-dos">
						<h5>¿Qué son los créditos VIP?</h5>
					</div >
					<div class="preguntas_opciones-dos">
						<h5>¿Dónde puedo cambiar mi contraseña de inicio de sesión?</h5>
					</div>
					
				</div>
				<div class="preguntas_opciones-uno">
					<div class="preguntas_opciones-dos">
						<h5>Regalos para nuevos usuarios</h5>
					</div>
					<div class="preguntas_opciones-dos">
						<h5>¿Cuándo recibiré el cupón de envío urgente VIP?</h5>
					</div>
					
				</div>
				<div class="preguntas_opciones-uno">
					<div class="preguntas_opciones-dos">
						<h5>¿Cómo puedo consultar el saldo de mis créditos de EDTelecolor?</h5>
					</div>
					<div class="preguntas_opciones-dos">
						<h5>¿Qué puedo hacer cuando tengo problemas para iniciar sesión en mi cuenta?</h5>
					</div>
					
				</div>
			</div>
		</div>
		<section class="garantia">
            <div class="garantia__informacion">
                <div class="garantia__informacion-logo">
                    <i class="fas fa-piggy-bank"></i>
                </div>
                <div class="garantia__informacion-titulo">
                    <p>Calidad y Ahorro</p>
                </div>
                <div class="garantia__informacion-descripcion">
                    <p>Entrega rápida y conveniente puerta a puerta</p>
                </div>
            </div>
            <div class="garantia__informacion">
                <div class="garantia__informacion-logo">
                    <i class="fas fa-truck"></i>
                </div>
                <div class="garantia__informacion-titulo">
                    <p>Logística rápida y Conveniente</p>
                </div>
                <div class="garantia__informacion-descripcion">
                    <p>Entrega rápida y conveniente puerta a puerta</p>
                </div>

            </div>
            <div class="garantia__informacion">
                <div class="garantia__informacion-logo">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="garantia__informacion-titulo">
                    <p>Seguridad de Pago</p>
                </div>
                <div class="garantia__informacion-descripcion">
                    <p>Entrega rápida y conveniente puerta a puerta</p>
                </div>

            </div>
            <div class="garantia__informacion">
                <div class="garantia__informacion-logo">
                    <i class="fas fa-headphones-alt"></i>
                </div>
                <div class="garantia__informacion-titulo">
                    <p>Servicio Profesional y Garantía de Producto</p>
                </div>
                <div class="garantia__informacion-descripcion">
                    <p>Entrega rápida y conveniente puerta a puerta</p>
                </div>
            </div>
        </section>
	</div>
	<?php require('../layouts/footer.php') ?>
	</body>
</html>