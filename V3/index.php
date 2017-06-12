<?php

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Document</title>

<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body style="
background-image: url(./imagenes/tex4.jpg 
	);">
<nav >


<img src="imagenes/Asociasion.jpg" style="width: 100px;
height: 100%;
float:left;
border-right:  1px solid red;">	
	
		<ul>

		
			<li><a href="#">Inicio</a></li>
			<li class="drop">
				<a href="#">Registro</a>
				
				<div class="dropdownContain">
					<div class="dropOut">
						<div class="triangle"></div>
						<ul>
							<li><a href="registro_U.php" style="color:black">
							Usuarios</a ></li>
									<li><a href="Registro_p.php" style="color:black">Predio</a></li>
						</ul>
					</div>
				</div>
			
			</li>
			<li><a href="Pagos.php">Pagos</a></li>
			<li><a href="padron.php">Padron</a></li>
			<li style="float: right;"><a href="cierre.php">Cerrar sesión</a></li>

			</ul>


</nav>
<div id="bienvenido">

	<h1>Bienvenido al sistema de control de pagos y usuarios de la Asociacion de Usuarios Rio Tacámbaro</h1>
	<section style="font-family: sans-serif;
	letter-spacing: 1px; padding-top: 5px;">
			<img src="imagenes/logo1.png" alt="" style="width: 200px; height: 200px; float:right; margin-left: 30px;
			padding-top: 30px;">
	
	<h2 style=" font-size: 30px; font-weight: extra-bold">Misión</h2>
		<p class ="ps">
	Apoyar a las asociaciones civiles de usuarios de riego con gestión y asesoría para que, en su área de influencia, operen, conserven y administren infraestructura hidroagrícola y los volúmenes de agua concesionados, incrementando la eficiencia del uso de recurso hídrico y la productividad de los recursos tierra y agua.
		</p>
<h2 style=" font-size: 30px; font-weight: extra-bold" >Visión</h2>
<p >
Ser la organización de los usuarios de riego con capacidad de gestión y recursos que le permitan disponer de información para proponer alternativas tecnológicas y mecanismos de implementación de las mismas para, a través del incremento de la productividad de los recursos tierra y agua, alcanzar la autosuficiencia alimentaria del país y lograr ingresos económicos suficientes para alimentación, salud, educación y bienestar de los productores agrícolas.
</p>
</section>
	</div>
<footer>
	<img src="imagenes/Asociasion.jpg" alt="" id="imas">
	<img src="imagenes/logo1.png" alt=""
	style="float:right;">

	<h4> Distrito patzcuaro, michoacan </h4>
	<p>ASOCIACIÓN DE USUARIOS RIO TACÁMBARO A.C.
<ul>
	<li>Telefono :01-459-596-02-23 </li>
	<li>Correo: asuritariego@hotmail.com </li>
	<li>Direccion :melchor ocampo 449, col. los pinos </li>
</ul>
	</p>
	</footer>	
</body>
</html>
