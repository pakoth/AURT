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
<link rel="stylesheet" type="text/css" href="css/pre.css">
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
$CLAVE = $_GET["CLAVE"];

		
if(isset($_POST['Registrar']))
{
	if(
	isset($_POST['Hectareas']) && !empty($_POST['Hectareas'])&&
	isset($_POST['localizacion']) && !empty($_POST['localizacion'])&&
	isset($_POST['Usos']) && !empty($_POST['Usos']))

			
	{
		
			$Hectareas=$_POST['Hectareas'];
			$Localizacion=$_POST['localizacion'];
			$Usos=$_POST['Usos'];
		$query="INSERT INTO `predios` (`ID_P`, `HECTAREAS`, `LOCALZACION`, `USOS`, `CLAVE`) VALUES (NULL, '$Hectareas', '$Localizacion', '$Usos', '$CLAVE');";
		mysql_query($query, $conexion) or die(mysql_error());
		
		echo "<p style=' font-size:30px;color:green;'>Predio Registrado</p>";

	header('refresh: 1; url=Registro_p.php');
	
	}
	else
	{
		echo "error";
	}
}
?>


<div id="con">
<h1>Registro predio</h1>
<form name="formulario" method="post" action="">
   <label for="CLAVE">CLAVE USUARIO</label>  <input type="" name="CLAVE" class="d" value=<?php echo $CLAVE ?>><br>
    <label for="">Hectareas </label><input type="text" class="d" name="Hectareas"s><br>

    <label for="">Localizacion </label><input type="text" class="d" name="localizacion"><br>
    <label for="">Tipo de uso </label><select  name="Usos" class="d" style="width: 200px;
    height: 30px;">    
<option value="Riego Aguacate">Riego Aguacate</option>
<option value="Riego Zarsa">Riego Zarsa</option>    
<option value="Domestico">Domestico</option>    
<option value="Otros">Otros</option>    
   
</select><br><br>

<input type="submit" class="btn"  value="Registrar" name="Registrar" >
    
</form>
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
