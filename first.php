<?php
/* a php program that will generate a pdf file 
that displays your complete name, program, email address, and student number */
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World !',1);
$pdf->Ln(20);
$pdf->Cell(50,10,'Complete Name: Aleeya Jenzen M. Candelaria',0,1);
$pdf->Ln(5);
$pdf->Cell(50,10,'Program: BS Information Technology',0,1);
$pdf->Ln(5);
$pdf->Cell(50,10,'Email Address: candelaria.aleeyajenzen@auf.edu.ph',0,1);
$pdf->Ln(5);
$pdf->Cell(50,10,'Student Number: 18-2324-386',0,1);
$pdf->Output();
?>