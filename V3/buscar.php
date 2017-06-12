<?php 
include("conexion.php");

$salida="";
$query="SELECT * FROM usuario; ";

if(isset($_POST['consulta'])){
	$q = $_POST['consulta'];
	$query="SELECT  * FROM usuario WHERE nombre LIKE '%".$q."%' OR  CLAVE LIKE '%".$q."%' ;";

}
$resultado= mysql_query($query, $conexion) or die(mysql_error());

$rows = @mysql_num_rows($resultado);
if($rows>0){
	$salida.="			
	<table width='40%' border='2px'>
	
            <tr>
				<td>CLAVE</td>
				<td>NOMBRE</td>
				<td>EDAD</td>
				<td>TELEFONO</td>
				<td>EMAIL</td>
				<td>Nuevo predio</td>
			  </tr>

";
while($fila=@mysql_fetch_array($resultado)){
			$CLAVE=$fila['CLAVE'];
			$NOMBRE=$fila['nombre'];
			$EDAD=$fila['edad'];
			$TEL=$fila['tel'];
			$EMAIL=$fila['email'];
			$ENLACE="<a href='Predio.php?CLAVE=".$CLAVE."'>Predio</a>";
			$salida.="
			
				<tr>
				<td>".$CLAVE."</td>
				<td>".$NOMBRE."</td>
				<td>".$EDAD."</td>
				<td>".$TEL."</td>
				<td>".$EMAIL."</td>
				<td>".$ENLACE."</td>
			  </tr>
			";

	}
	$salida.="
	  </table>";

}else{
$salida.="No hay datos";

}
echo $salida;
mysql_close()
 ?>

