<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="../../styles/paginas/editarPerfil.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

	<script src="../../js/slider.js"></script>

	<?php require('../layouts/head.php') ?>
	
	<title>Perfil de Usuario</title>
</head>
<body>
	<div>
		
	</div>
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
	
	<div class="conta">
		<div class="conta_user"  >
			<img class="conta_user-avatar" src="../../img/user.png" alt="">
			<h2 class="conta_user-username"> Usuario</h2>

			<div class="conta_user-conbuton2">
				<button class="conta_user-buton">Subir Foto</button>
			</div>
			<div class="conta_user-conbuton2">
				<button class="conta_user-buton">Borrar Foto</button>
			</div>
		</div>
		<div class="conta_date" >
			<div class="title text-center py-4">
				<h2 class="">PERFIL DE USUARIO</h2>
			</div>
			<div class="conta_date-namelast" >
				<div class="conta_date-bloque1">
					<h6>Nombre: </h6>
					<input class="contra_date-inputcor" type="text" id="name" name="name" placeholder="Ingrese sus Nombres" required> 
				</div>
				<div class="conta_date-bloque2"> 
					<h6>Apellido: </h6>
					<input class="contra_date-inputcor" type="text" id="lastName" name="lastName" placeholder="Ingrese sus Apellidos" required> 
				</div>
			</div>
			<div>
				<div class="conta_date-bloque">
					<h6>Numero de Telefono: </h6>
					<input class="contra_date-inputlar" type="text" id="phoneNumber" name="phoneNumber" placeholder="Ingrese su Numero Telefonico" required>
				</div>
				<div class="conta_date-bloque">
					<h6>Pais: </h6>
					<select class="contra_date-inputlar" name="pais" >
						<option value="AF">Afganistán</option>
						<option value="AL">Albania</option>
						<option value="DE">Alemania</option>
						<option value="AD">Andorra</option>
						<option value="AO">Angola</option>
						<option value="AI">Anguilla</option>
						<option value="AQ">Antártida</option>
						<option value="AG">Antigua y Barbuda</option>
						<option value="AN">Antillas Holandesas</option>
						<option value="SA">Arabia Saudí</option>
						<option value="DZ">Argelia</option>
						<option value="AR">Argentina</option>
						<option value="AM">Armenia</option>
						<option value="AW">Aruba</option>
						<option value="AU">Australia</option>
						<option value="AT">Austria</option>
						<option value="AZ">Azerbaiyán</option>
						<option value="BS">Bahamas</option>
						<option value="BH">Bahrein</option>
						<option value="BD">Bangladesh</option>
						<option value="BB">Barbados</option>
						<option value="BE">Bélgica</option>
						<option value="BZ">Belice</option>
						<option value="BJ">Benin</option>
						<option value="BM">Bermudas</option>
						<option value="BY">Bielorrusia</option>
						<option value="MM">Birmania</option>
						<option value="BO">Bolivia</option>
						<option value="BA">Bosnia y Herzegovina</option>
						<option value="BW">Botswana</option>
						<option value="BR">Brasil</option>
						<option value="BN">Brunei</option>
						<option value="BG">Bulgaria</option>
						<option value="BF">Burkina Faso</option>
						<option value="BI">Burundi</option>
						<option value="BT">Bután</option>
						<option value="CV">Cabo Verde</option>
						<option value="KH">Camboya</option>
						<option value="CM">Camerún</option>
						<option value="CA">Canadá</option>
						<option value="TD">Chad</option>
						<option value="CL">Chile</option>
						<option value="CN">China</option>
						<option value="CY">Chipre</option>
						<option value="VA">Ciudad del Vaticano (Santa Sede)</option>
						<option value="CO">Colombia</option>
						<option value="KM">Comores</option>
						<option value="CG">Congo</option>
						<option value="CD">Congo, República Democrática del</option>
						<option value="KR">Corea</option>
						<option value="KP">Corea del Norte</option>
						<option value="CI">Costa de Marfíl</option>
						<option value="CR">Costa Rica</option>
						<option value="HR">Croacia (Hrvatska)</option>
						<option value="CU">Cuba</option>
						<option value="DK">Dinamarca</option>
						<option value="DJ">Djibouti</option>
						<option value="DM">Dominica</option>
						<option value="EC" selected>Ecuador</option>
						<option value="EG">Egipto</option>
						<option value="SV">El Salvador</option>
						<option value="AE">Emiratos Árabes Unidos</option>
						<option value="ER">Eritrea</option>
						<option value="SI">Eslovenia</option>
						<option value="ES" >España</option>
						<option value="US">Estados Unidos</option>
						<option value="EE">Estonia</option>
						<option value="ET">Etiopía</option>
						<option value="FJ">Fiji</option>
						<option value="PH">Filipinas</option>
						<option value="FI">Finlandia</option>
						<option value="FR">Francia</option>
						<option value="GA">Gabón</option>
						<option value="GM">Gambia</option>
						<option value="GE">Georgia</option>
						<option value="GH">Ghana</option>
						<option value="GI">Gibraltar</option>
						<option value="GD">Granada</option>
						<option value="GR">Grecia</option>
						<option value="GL">Groenlandia</option>
						<option value="GP">Guadalupe</option>
						<option value="GU">Guam</option>
						<option value="GT">Guatemala</option>
						<option value="GY">Guayana</option>
						<option value="GF">Guayana Francesa</option>
						<option value="GN">Guinea</option>
						<option value="GQ">Guinea Ecuatorial</option>
						<option value="GW">Guinea-Bissau</option>
						<option value="HT">Haití</option>
						<option value="HN">Honduras</option>
						<option value="HU">Hungría</option>
						<option value="IN">India</option>
						<option value="ID">Indonesia</option>
						<option value="IQ">Irak</option>
						<option value="IR">Irán</option>
						<option value="IE">Irlanda</option>
						<option value="BV">Isla Bouvet</option>
						<option value="CX">Isla de Christmas</option>
						<option value="IS">Islandia</option>
						<option value="KY">Islas Caimán</option>
						<option value="CK">Islas Cook</option>
						<option value="CC">Islas de Cocos o Keeling</option>
						<option value="FO">Islas Faroe</option>
						<option value="HM">Islas Heard y McDonald</option>
						<option value="FK">Islas Malvinas</option>
						<option value="MP">Islas Marianas del Norte</option>
						<option value="MH">Islas Marshall</option>
						<option value="UM">Islas menores de Estados Unidos</option>
						<option value="PW">Islas Palau</option>
						<option value="SB">Islas Salomón</option>
						<option value="SJ">Islas Svalbard y Jan Mayen</option>
						<option value="TK">Islas Tokelau</option>
						<option value="TC">Islas Turks y Caicos</option>
						<option value="VI">Islas Vírgenes (EEUU)</option>
						<option value="VG">Islas Vírgenes (Reino Unido)</option>
						<option value="WF">Islas Wallis y Futuna</option>
						<option value="IL">Israel</option>
						<option value="IT">Italia</option>
						<option value="JM">Jamaica</option>
						<option value="JP">Japón</option>
						<option value="JO">Jordania</option>
						<option value="KZ">Kazajistán</option>
						<option value="KE">Kenia</option>
						<option value="KG">Kirguizistán</option>
						<option value="KI">Kiribati</option>
						<option value="KW">Kuwait</option>
						<option value="LA">Laos</option>
						<option value="LS">Lesotho</option>
						<option value="LV">Letonia</option>
						<option value="LB">Líbano</option>
						<option value="LR">Liberia</option>
						<option value="LY">Libia</option>
						<option value="LI">Liechtenstein</option>
						<option value="LT">Lituania</option>
						<option value="LU">Luxemburgo</option>
						<option value="MK">Macedonia, Ex-República Yugoslava de</option>
						<option value="MG">Madagascar</option>
						<option value="MY">Malasia</option>
						<option value="MW">Malawi</option>
						<option value="MV">Maldivas</option>
						<option value="ML">Malí</option>
						<option value="MT">Malta</option>
						<option value="MA">Marruecos</option>
						<option value="MQ">Martinica</option>
						<option value="MU">Mauricio</option>
						<option value="MR">Mauritania</option>
						<option value="YT">Mayotte</option>
						<option value="MX">México</option>
						<option value="FM">Micronesia</option>
						<option value="MD">Moldavia</option>
						<option value="MC">Mónaco</option>
						<option value="MN">Mongolia</option>
						<option value="MS">Montserrat</option>
						<option value="MZ">Mozambique</option>
						<option value="NA">Namibia</option>
						<option value="NR">Nauru</option>
						<option value="NP">Nepal</option>
						<option value="NI">Nicaragua</option>
						<option value="NE">Níger</option>
						<option value="NG">Nigeria</option>
						<option value="NU">Niue</option>
						<option value="NF">Norfolk</option>
						<option value="NO">Noruega</option>
						<option value="NC">Nueva Caledonia</option>
						<option value="NZ">Nueva Zelanda</option>
						<option value="OM">Omán</option>
						<option value="NL">Países Bajos</option>
						<option value="PA">Panamá</option>
						<option value="PG">Papúa Nueva Guinea</option>
						<option value="PK">Paquistán</option>
						<option value="PY">Paraguay</option>
						<option value="PE">Perú</option>
						<option value="PN">Pitcairn</option>
						<option value="PF">Polinesia Francesa</option>
						<option value="PL">Polonia</option>
						<option value="PT">Portugal</option>
						<option value="PR">Puerto Rico</option>
						<option value="QA">Qatar</option>
						<option value="UK">Reino Unido</option>
						<option value="CF">República Centroafricana</option>
						<option value="CZ">República Checa</option>
						<option value="ZA">República de Sudáfrica</option>
						<option value="DO">República Dominicana</option>
						<option value="SK">República Eslovaca</option>
						<option value="RE">Reunión</option>
						<option value="RW">Ruanda</option>
						<option value="RO">Rumania</option>
						<option value="RU">Rusia</option>
						<option value="EH">Sahara Occidental</option>
						<option value="KN">Saint Kitts y Nevis</option>
						<option value="WS">Samoa</option>
						<option value="AS">Samoa Americana</option>
						<option value="SM">San Marino</option>
						<option value="VC">San Vicente y Granadinas</option>
						<option value="SH">Santa Helena</option>
						<option value="LC">Santa Lucía</option>
						<option value="ST">Santo Tomé y Príncipe</option>
						<option value="SN">Senegal</option>
						<option value="SC">Seychelles</option>
						<option value="SL">Sierra Leona</option>
						<option value="SG">Singapur</option>
						<option value="SY">Siria</option>
						<option value="SO">Somalia</option>
						<option value="LK">Sri Lanka</option>
						<option value="PM">St Pierre y Miquelon</option>
						<option value="SZ">Suazilandia</option>
						<option value="SD">Sudán</option>
						<option value="SE">Suecia</option>
						<option value="CH">Suiza</option>
						<option value="SR">Surinam</option>
						<option value="TH">Tailandia</option>
						<option value="TW">Taiwán</option>
						<option value="TZ">Tanzania</option>
						<option value="TJ">Tayikistán</option>
						<option value="TF">Territorios franceses del Sur</option>
						<option value="TP">Timor Oriental</option>
						<option value="TG">Togo</option>
						<option value="TO">Tonga</option>
						<option value="TT">Trinidad y Tobago</option>
						<option value="TN">Túnez</option>
						<option value="TM">Turkmenistán</option>
						<option value="TR">Turquía</option>
						<option value="TV">Tuvalu</option>
						<option value="UA">Ucrania</option>
						<option value="UG">Uganda</option>
						<option value="UY">Uruguay</option>
						<option value="UZ">Uzbekistán</option>
						<option value="VU">Vanuatu</option>
						<option value="VE">Venezuela</option>
						<option value="VN">Vietnam</option>
						<option value="YE">Yemen</option>
						<option value="YU">Yugoslavia</option>
						<option value="ZM">Zambia</option>
						<option value="ZW">Zimbabue</option>
					</select>
				</div>
				
			</div>
			<div class="conta_date-bu">
				<div class="conta_user-conbuton2">
					<button class="conta_user-buton">Guardar</button>
				</div>
				<div class="conta_user-conbuton2">
					<button class="conta_user-buton">Cancelar</button>
				</div>
			</div>
			
		</div>
	</div>
	<?php require('../layouts/footer.php') ?>
</body>
</html>