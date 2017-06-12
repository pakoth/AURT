<?php 

 
include("conexion.php");

$salida="";
$Datos="";

if(isset($_POST['consulta'])){
	$q = $_POST['consulta'];
	$query="SELECT usuario.nombre,predios.ID_P,predios.LOCALZACION,predios.HECTAREAS FROM usuario,predios WHERE usuario.CLAVE ='".$q."' AND predios.CLAVE=usuario.CLAVE";
	

$resultado= mysql_query($query, $conexion) or die(mysql_error());

}
$rows = @mysql_num_rows($resultado);
if($rows>0){

$Nombre="";

while($fila2=mysql_fetch_array($resultado)){
$Nombre=$fila2['nombre'];
$ID=$fila2['ID_P'];
$LOCALIZACION=$fila2['LOCALZACION'];
$HECTAREAS=$fila2['HECTAREAS'];
$ENLACE="<a href='Pago.php?Nombre=".$Nombre."&ID=".$ID."&Hectareas=".$HECTAREAS."&Localizacion=".$LOCALIZACION."'>PAgo</a>";
$Datos.="
			
				<tr>
				<td>".$ID."</td>
				<td>".$LOCALIZACION."</td>
				<td>".$HECTAREAS."</td>
				<td>".$ENLACE."</td>
			  </tr>
			";


}

	$salida.="			

<h1>Usuario:".$Nombre."</h1>
	<table width='40%' border='2px'>
	
            <tr>
				<td>ID PREDIO</td>
				<td>LOCALIZACION</td>
				<td>HECTAREAS</td>
				<td>Estatus</td>
			  </tr>

";
$salida.=$Datos;
	$salida.="
	  </table>";

}else{
$salida.="No hay datos";

}
echo $salida;
mysql_close()
 ?>

 