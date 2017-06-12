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

<script src="js/jquery-1.12.3.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="css/padron.css">

<link rel="stylesheet" type="text/css" href="css/pre.css">
<link rel="stylesheet" type="text/css" href="css/pag2.css">
<script>

	$(document).ready(function(){
$('#consul').click(function(){
var NOMBRE="<?php echo $_GET['Nombre'] ?>";
var ID="<?php echo $_GET['ID'] ?>";
var LOCALIZACION="<?php echo $_GET['Localizacion'] ?>";
var HECTAREAS="<?php echo $_GET['Hectareas'] ?>";
var ano=$('select[id=ejemplo2]').val();
	
	alert(NOMBRE+"-"+ID+"-"+LOCALIZACION+"-"+HECTAREAS+"-"+ano);
jQuery.post("regreso.php", {
						NOMBRE:NOMBRE,
						ID:ID,
						LOCALIZACION:LOCALIZACION,
						HECTAREAS:HECTAREAS,
						ano:ano
					}, function(data, textStatus){
					$('#resultado').html(data);
					});

});

	});

</script>
<script>
	function funcion(){
var NOMBRE="<?php echo $_GET['Nombre'] ?>";
var ID="<?php echo $_GET['ID'] ?>";
var LOCALIZACION="<?php echo $_GET['Localizacion'] ?>";
var HECTAREAS="<?php echo $_GET['Hectareas'] ?>";
var ano=$('select[id=ejemplo2]').val();
var pago=$('#PAGO').val();
jQuery.post("pagar.php", {
					
						ID:ID,
						NOMBRE:NOMBRE,
						ano:ano,
						LOCALIZACION:LOCALIZACION,
						HECTAREAS:HECTAREAS,
						ano:ano,
						pago:pago

					}, function(data, textStatus){
					$('#resultado').html(data);
					});


}

function Genera(){
var NOMBRE="<?php echo $_GET['Nombre'] ?>";
var ID="<?php echo $_GET['ID'] ?>";
var LOCALIZACION="<?php echo $_GET['Localizacion'] ?>";
var HECTAREAS="<?php echo $_GET['Hectareas'] ?>";
var ano=$('select[id=ejemplo2]').val();
var pago=$('#PAGO').val();
alert(NOMBRE);

jQuery.post("generar.php", {
						NOMBRE:NOMBRE,
						ID:ID,
						LOCALIZACION:LOCALIZACION,
						HECTAREAS:HECTAREAS,
						ano:ano,
						pago:pago

					}, function(data, textStatus){
					$('#resultado').html(data);
					});

}
</script>
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
<div id="consultas">

<h2>Usuario: <?php echo $_GET['Nombre'] ?></h2>
<h2>ID Predio: <?php echo $_GET['ID'] ?></h2>
<h2>Localizacion: <?php echo $_GET['Localizacion'] ?></h2>

<h2>Hectareas: <?php echo $_GET['Hectareas'] ?></h2>
<label for="">Consultar estatus de pago anual </label><select  name="Usos" id="ejemplo2" class="d" style="width: 200px;
    height: 30px;" >    
<option value="2015">2015</option>
<option value="2016">2016</option>    
<option value="2017">2017</option>    
</select> 

<input type="button" id="consul" class="btn" value="consultar" >

<div id="resultado">resultado</div>
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
