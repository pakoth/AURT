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
<link rel="stylesheet" type="text/css" href="css/Padron.css">
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

		
			<li><a href="index.php">Inicio</a></li>
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
<?php
include("conexion.php");


$rows_for_page = 8;
if(isset($_GET['pagina'])){
if($_GET['pagina']==1){
	header("Location:padron.php");
}else{
	$pagina=$_GET['pagina'];
}}else{
	$pagina=1;
}
$consulta = mysql_query("SELECT * FROM  usuario", $conexion) or die(mysql_error());
$total_records = mysql_num_rows($consulta);

$empezar=($pagina-1)*$rows_for_page;
$pages = ceil($total_records / $rows_for_page);

$sql = "SELECT * FROM usuario  LIMIT ".$empezar.",".$rows_for_page;
//ejecuta el query
$result = @mysql_query($sql, $conexion);
//resultados de la consulta (total)
$rows = @mysql_num_rows($result);

?>


<div id="consultas">
<header><h1>Consultas padron</h1></header>

<div id="tabla">
	
			<table width="40%" border="2px">
            <tr>
				<td>CLAVE</td>
				<td>NOMBRE</td>
				<td>EDAD</td>
				<td>TELEFONO</td>
				<td>EMAIL</td>
				<td>MODIFICAR</td>
			  </tr>
<?php


		while($filas = @mysql_fetch_array($result))
		{	
			$CLAVE=$filas['CLAVE'];
			$NOMBRE=$filas['nombre'];
			$EDAD=$filas['edad'];
			$TEL=$filas['tel'];
			$EMAIL=$filas['email'];
			
			
?>
			  <tr>
				<td><?php echo "<p >".$CLAVE."</p>";?></td>
				<td><?php echo "<p >".$NOMBRE."</p>";?></td>
				<td><?php echo "<p >".$EDAD."</p>";?></td>
				<td><?php echo "<p >".$TEL."</p>";?></td>
				<td><?php echo "<p >".$EMAIL."</p>";?></td>
				<td><a href="MODIFICAR_AURT.php?CLAVE=<?php echo $CLAVE;?>">modificar</a>/<a href="" onclick="alert(4);">Eliminar</a>
				</td>
			  </tr>
<?php
			
			
		}?>
		<?php 
for($i=1;$i<=$pages;$i++){
echo "<a href='?pagina=".$i."' class= 'ob'>".$i."</a>    ";
}

		 ?>
</table>
</div>
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
