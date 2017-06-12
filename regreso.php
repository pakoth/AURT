<?php 
include("conexion.php");
$NOMBRE=$_POST['NOMBRE'];
$ID=$_POST['ID'];
$HECTAREAS=$_POST['HECTAREAS'];
$ANO=$_POST['ano'];
$LOCALIZACION=$_POST['LOCALIZACION'];
#" echo $NOMBRE."-".$ID."-".$HECTAREAS."-".$ANO."-".$LOCALIZACION;
 $sql="SELECT pagos.CLAVE_PAGO FROM anos,pagos WHERE ID_P='".$ID."' AND pagos.ANO='".$ANO."' AND anos.ANO=pagos.ANO;";
   $resultado=@mysql_query($sql, $conexion) or die(mysql_error());
  $rows = @mysql_num_rows($resultado);
 if($rows>=1){
$fila2=mysql_fetch_array($resultado);
 $CVP=$fila2['CLAVE_PAGO'];
 	echo "<span style='color: green;font-size: 40px; margin-top: 20px;'>Pago hecho clave de pago:".$CVP."</span>";

 }else{
 	
	$consulta="SELECT anos.CANTIDAD FROM anos where ANO='".$ANO."'";
   $resultados=@mysql_query($consulta, $conexion) or die(mysql_error());
 
  $fila=mysql_fetch_array($resultados);
  $PAGO=$fila['CANTIDAD'];
 	#echo "<span style='color: red;font-size: 40px; margin-top: 20px;'>Realizar pago monto: ".$PAGO."</span>"; 
	#echo"<a href='generar.php?ID=".$ID."&HECTAREAS=".$HECTAREAS."'>REALIZAR PAGO". $PAGO."</a>";
 $Salida="
              <h2>Registrar pago</h2><br>
				<label for='' class='m' style='font-size=15px;'>Cantidad a pagar </label>
               <input type='text'  id='PAGO'value='".$PAGO."' class='d' style='width:100px;' readonly>
               <input type='button'id='registro_p'   value='Registrar'  class='btn' onclick=funcion();>   
           ";
 echo $Salida;
 }
 ?>