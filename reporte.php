<?php
require('fpdf17/fpdf.php');
$s=$_GET['a'];
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,$s);
$pdf->Output();
?>