<?php
require 'vendor/autoload.php';
use App\FPDF;

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Helvetica','BU',20);
$pdf->Cell(70);
$pdf->Cell(50,10,'Table of Contents',0,0,'C');
$pdf->Ln(30);
$pdf->SetFont('Helvetica','',16);
$pdf->SetTextColor(0,0,139);
$pdf->Cell(20);
$pdf->Cell(70,12,'Activity 1 - Displaying Simple Text', '','','',false, "views/first.php");
$pdf->Ln(15);
$pdf->Cell(20);
$pdf->Cell(70,12,'Activity 2 - AUF Brief History', '','','',false, "views/second.php");
$pdf->Ln(15);
$pdf->Cell(20);
$pdf->Cell(70,12,'Activity 3 - Chapters of a Novel', '','','',false, "views/third.php");
$pdf->Ln(15);
$pdf->Cell(20);
$pdf->Cell(70,12,'Activity 4 - Generating Table from CSV', '','','',false, "views/fourth.php");
$pdf->Ln(15);
$pdf->Cell(20);
$pdf->Cell(70,12,'Activity 5.1 - Making a Font', '','','',false, "views/fifth.php");
$pdf->Ln(15);
$pdf->Cell(20);
$pdf->Cell(70,12,'Activity 5.2 - Using The Newly Imported Font', '','','',false, "views/fifth-1.php");
$pdf->Ln(15);
$pdf->Cell(20);
$pdf->Cell(70,12,'Activity 6 (Challenge) - Generating Diagram from CSV', '','','',false, "views/sixth.php");
$pdf->Output();
?>
