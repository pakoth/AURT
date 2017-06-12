
<?php

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}
include("conexion.php");

$CLAVE= $_GET['CLAVE'];
	$query="DELETE FROM usuario where CLAVE='".$CLAVE."';";
  mysql_query($query, $conexion) or die(mysql_error());

if(mysql_affected_rows()>0){
echo "Eliminado";
header("location:padron.php");

}
?>

<?php
 ?>