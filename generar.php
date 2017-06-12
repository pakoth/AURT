<?php
include_once('PDF.php');
include('conexion.php');
$NOMBRE=$_GET['NOMBRE'];
$ID=$_GET['ID'];
$HECTAREAS=$_GET['HECTAREAS'];
$ANO=$_POST['ANO'];
$LOCALIZACION=$_GET['LOCALIZACION'];
$PAGO=$_GET['PAGO'];
$CLAVE=$_GET['Clave'];
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B', 10);
//Margen decorativo iniciando en 0, 0
  
//Imagen izquierda

//Imagen derecha
$pdf->Image('imagenes/Asociasion.jpg', 155, 27, 25, 22, 'JPG');
 
//Texto de Título
$pdf->SetFont('Arial','', 15);

$pdf->SetXY(60, 25);
$pdf->MultiCell(65, 5, utf8_decode('Asociasión de usuarios Rio Tacámbaro'), 0, 'C');
 
//Texto Explicativo
$pdf->SetFont('Courier','', 7);
$pdf->SetXY(48, 45);
$pdf->MultiCell(100, 4, utf8_decode(''), 0, 'J');
 
//De aqui en adelante se colocan distintos métodos
//para diseñar el formato.
 
//Fecha
$pdf->SetFont('Arial','', 12);
$pdf->SetXY(145,60);
$pdf->Cell(15, 8, 'FECHA:', 0, 'L');
$pdf->Line(163, 65.5, 185, 65.5);
 
//Nombre //Apellidos //DNI //TELEFONO
$pdf->SetXY(25, 80);
$pdf->Cell(20, 8, 'Nombre Usuario: '.$NOMBRE, 0, 'L');
$pdf->Line(59, 85.5, 120, 85.5);
//*****
$pdf->SetXY(25,100);
$id=$_GET['ID'];
$pdf->Cell(19, 8, 'Clave Predio:             '.$ID, 0, 'L');
$pdf->Line(52, 105.5, 100, 105.5);
//*****
$pdf->SetXY(25, 120);
$pdf->Cell(10, 8, 'Localizacion: '.$LOCALIZACION, 0, 'L');
$pdf->Line(50, 125.5, 90, 125.5);
//*****
$pdf->SetXY(110, 120);
$pdf->Cell(10, 8, utf8_decode('Total a pagar:$'.$PAGO), 0, 'L');
$pdf->Line(135, 125.5, 170, 125.5);
 
//LICENCIATURA  //CARGO   //CÓDIGO POSTAL
$pdf->SetXY(25, 140);
$pdf->Cell(10, 8, 'Clave pago:'.$CLAVE, 0, 'L');
//*****
$pdf->SetXY(80, 140);
$pdf->Cell(10, 8, utf8_decode('Cuenta bancomer:xxx-xxx-xxx-xx'), 0, 'L');

//****

 
$pdf->Output(); //Salida al navegador
 
?>