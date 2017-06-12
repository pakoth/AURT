<?php
 
$con = mysql_connect('localhost','root','luisponce123') or die('Error en conexion a la DB');
mysql_select_db('login2', $con) or die('Error al seleccionar la DB');
$clave=$_POST['id'];
$nombre = $_POST['name'];
$edad = $_POST['edad'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$res = mysql_query("INSERT INTO usuario(CLAVE,nombre,edad,tel,email) VALUES('$clave','$nombre','$edad','$tel','$email')");
if(mysql_affected_rows()>0){
	echo "1";
}
else{
	echo "2";
}
?>