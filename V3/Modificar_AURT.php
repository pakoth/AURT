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
<link rel="stylesheet" type="text/css" href="css/MOD.css">

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
			<li><a href="pagos.php">Pagos</a></li>
			<li><a href="padron.php">Padron</a></li>
			<li style="float: right;"><a href="cierre.php">Cerrar sesión</a></li>

			</ul>


</nav>
<?php

include("conexion.php");
$CLAVE = $_GET["CLAVE"];
$consultas = mysql_query("SELECT * FROM usuario WHERE CLAVE='".$CLAVE."';", $conexion) or die(mysql_error());

		while($filax = mysql_fetch_array($consultas))
		{	

			$CLAVE4=$filax['CLAVE'];
			$NOMBRE=$filax['nombre'];
			$EDAD=$filax['edad'];
			$TEL=$filax['tel'];
			$EMAIL=$filax['email'];

		}
if(isset($_POST['modificar']))
{
	if(
		isset($_POST['CLAVE2']) && !empty($_POST['CLAVE2']) &&
	isset($_POST['NOMBRE2']) && !empty($_POST['NOMBRE2'])&&
	isset($_POST['EDAD2']) && !empty($_POST['EDAD2'])&&
	isset($_POST['TEL2']) && !empty($_POST['TEL2'])&&
	isset($_POST['EMAIL2']) && !empty($_POST['EMAIL2']))


			
	{
		
			$CLAVE2=$_POST['CLAVE2'];
			$NOMBRE2=$_POST['NOMBRE2'];
			$EDAD2=$_POST['EDAD2'];
			$TEL2=$_POST['TEL2'];
			$EMAIL2=$_POST['EMAIL2'];

		mysql_query("UPDATE usuario SET CLAVE = '$CLAVE2', nombre = '$NOMBRE2', edad ='$EDAD2', tel = 'TEL2', email = 'EMAIL2' WHERE CLAVE = '$CLAVE'", $conexion) or die(mysql_error());
		
		header('refresh: 1; url=padron.php');
		
		echo "<p style='color:green;'>MODIFICACION REALIZADA CON EXITO</p>";
	}
	else
	{
		echo "error";
	}
}
?>
<div id="con">
<h1>Modificar usuario</h1>
<form name="formulario" method="post" action="">
     
    <label for="">Clave</label><input placeholder="" type="text" class="d" name="CLAVE2" value="<?php echo $CLAVE4;?>" maxlength="30" size="40" readonly>
    <br>
    <label for="">Nombre</label><input placeholder="" value="<?php echo $NOMBRE;?>" type="text" class="d" name="NOMBRE2" maxlength="30" size="40">
    <br>
    <label for="">Edad</label><input placeholder="" value="<?php echo $EDAD;?>" type="text" class="d" name="EDAD2" maxlength="30" size="40">
<br>
    <label for="">Telefono</label><input placeholder="" value="<?php echo $TEL;?>" type="text" class="d" name="TEL2" maxlength="30" size="40">
    <br>
    <label for="">Email</label><input placeholder="" value="<?php echo $EMAIL;?>" type="text" class="d" name="EMAIL2" maxlength="30" size="40">
    <br>
    <input  type="submit" class='btn' value="Modificar" name="modificar" >
    
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
