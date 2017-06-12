<?php


session_start();
include("conexion.php");

if(isset($_POST["clave"])){
  $Clave =  $_POST["clave"];


  $sql = "SELECT * FROM usuario WHERE CLAVE='".$Clave."'";
  
  $resultado=mysql_query($sql, $conexion) or die(mysql_error());
  $rows = @mysql_num_rows($resultado);
  if ($rows>=1) {
    $fila=mysql_fetch_array($resultado);
  $CLAVE=$fila['CLAVE'];
      $NOMBRE=$fila['nombre'];
      $EDAD=$fila['edad'];
      $TEL=$fila['tel'];
      $EMAIL=$fila['email'];
      $Salida="
              <h2>Modificar Datos</h2><br>
              <label for='' class='m' style='font-size=15px;'>CLAVE </label><input type='text' id='clave_M' value='".$CLAVE."' class='d' readonly><br>
               <label for='' class='m' style='font-size=15px;'>NOMBRE</label><input type='text' id='nombre_M' value='".$NOMBRE."' class='d'><br>
               <label for='' class='m' style='font-size=15px;'>EDAD </label><input type='text' id='edad_M' value='".$EDAD."' class='d'><br>
               <label for='' class='m' style='font-size=15px;'>TEL </label><input type='text'  id= 'tel_M'value='".$TEL."' class='d'><br>
               <label for='' class='m' style='font-size=15px;'>EMAIL </label><input type='text' id='email_M' value='".$EMAIL."' class='d'><br>
                <input type='button'id='modificacion'   value='Modificar'  class='btn' onclick=funcion();>   <input type='button' value='Cancelar'  class='btn'>
           ";
  #echo $CLAVE.$NOMBRE.$EDAD.$TEL.$EMAIL;    
 echo $Salida;
 } else {
    echo "error";
  }
} else {
  echo "error";
}

?>