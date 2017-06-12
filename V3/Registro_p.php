
<?php

session_start();
if(!isset($_SESSION["user"])){
 echo $_SESSION["user"];
  header("location:login.php");
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<link rel="stylesheet" href="css/predio.css">

<script src="js/jquery-1.12.3.min.js"></script>
<script>
	$(document).ready(function(){
$('#Registro').click(function(){

		});
	});

		

</script>
</head>
<body>
		<nav >
<img src="imagenes/Asociasion.jpg" style="width: 100px;
height: 100%;
float:left;
border-right:  1px solid red;">	
	
		<ul>

		
			<li><a href="index.php">Inicio</a></li>
			<li class="drop">
				<a href="#">Registro</a>
				
				<div class="dropdownContain">
					<div class="dropOut">
						<div class="triangle"></div>
						<ul>
							<li><a href="Registro_u.php" style="color:black">Usuarios</a ></li>
									<li><a href="Registro_p.php" style="color:black">Predio</a></li>
						</ul>
					</div>
				</div>
			
			</li>
			<li><a href="#">Pagos</a></li>
			<li><a href="padron.php">Padron</a></li>
			<li style="float: right;"><a href="">Cerrar sesión</a></li>

			</ul>
			</nav>
	
<div id="contenedor">

<div id="formu"><label for="">Buscar</label> <input type="text" name ="caja" class="d"   id="caja" placeholder="Buscar por Clave/Nombre"></div>
<div id="datos"></div>
</div>
<script src="js/jquery-1.12.3.min.js"></script>
<script src="js/main.js"></script>
<footer id="foot">
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