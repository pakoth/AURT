<?php 
include("conexion.php");
$clave=$_POST['clave'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$tel = $_POST['tel'];
$email = $_POST['email'];

		mysql_query("UPDATE usuario SET CLAVE = '$clave', nombre = '$nombre', edad ='$edad', tel = '$tel', email = '$email' WHERE CLAVE = '$clave'", $conexion) or die(mysql_error());

 if(mysql_affected_rows()>0){
	echo "1";
}
else{
	echo "2";
}
 ?>