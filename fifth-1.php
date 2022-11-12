<?php
require 'vendor/autoload.php';
use App\FPDF;
$pdf = new FPDF();
$pdf->AddFont('Chapaza','','Chapaza.php');
$pdf->AddFont('Imperator','','Imperator.php');
$pdf->AddPage();
$pdf->SetFont('Chapaza','',25);
$pdf->Write(10,'To understand that you will eventually lose everything and to try to live it more because of that.');
$pdf->SetFont('Helvetica','',20);
$pdf->Ln(20);
$pdf->Write(10,"C'est la vie.");
$pdf->SetFont('Imperator','',20);
$pdf->Ln(20);
$pdf->Write(10,"The closer you think you are, the lesser you see.");
$pdf->Output();
?>