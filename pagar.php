<?php 
include("conexion.php");
$ID=$_POST['ID'];
$ANO=$_POST['ano'];
$NOMBRE=$_POST['NOMBRE'];
$HECTAREAS=$_POST['HECTAREAS'];
$LOCALIZACION=$_POST['LOCALIZACION'];
$PAGO=$_POST['pago'];
#" echo $NOMBRE."-".$ID."-".$HECTAREAS."-".$ANO."-".$LOCALIZACION;
$query="INSERT INTO `pagos` (`CLAVE_PAGO`, `ID_P`, `ANO`) VALUES (NULL, '".$ID."','".$ANO."');";
    mysql_query($query, $conexion) or die(mysql_error());

if(mysql_affected_rows()>0){
$quer="SELECT CLAVE_PAGO FROM pagos where ID_P=".$ID." AND ANO='".$ANO."';";
  
  $resultado=  mysql_query($quer, $conexion) or die(mysql_error());
  $rows = @mysql_num_rows($resultado);
    $fila=mysql_fetch_array($resultado);
    $Clave=$fila['CLAVE_PAGO'];


  echo "  <a href='generar.php?NOMBRE=".$NOMBRE."&ANO=".$ANO."&HECTAREAS=".$HECTAREAS."&LOCALIZACION=".$LOCALIZACION."&PAGO=".$PAGO."&ID=".$ID."&Clave=".$Clave."'>Generar PDF</a>";
}
else{
  echo "2";
}


     ?>