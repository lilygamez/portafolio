<?php
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);
$pdf->Cell(40,10,'Mtra. Liliana Gámez Zavala');
$pdf->Cell(40,20,'Email: liliana.gamez@upslp.edu.mx');
$pdf->Cell(40,30,'Programación Web II');
$pdf->Cell(40,40,'Primer reporte PDF');
$pdf->Output();
?>		