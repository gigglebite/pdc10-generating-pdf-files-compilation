<?php
require 'vendor/autoload.php';
use App\FPDF;
$pdf = new FPDF();
$pdf->AddFont('Comic','','comic.php');
$pdf->AddPage();
$pdf->SetFont('Comic','',35);
$pdf->Write(10,'My new font!');
$pdf->Output();
?>