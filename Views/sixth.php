<?php require '../vendor/autoload.php';
require('diag.php');
$pdf = new PDF_Diag();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$fileName = "wpp1.csv";
$csvData = file_get_contents($fileName);
$lines = explode(PHP_EOL, $csvData);
$array = array();
foreach ($lines as $line) {
    $array[] = str_getcsv($line);
}
$data = $array;
//Pie chart
$pdf->Cell(0, 5, '1 - Pie chart', 0, 1);
$pdf->Ln(8);
$valX = $pdf->GetX();
$valY = $pdf->GetY();
$country = $data[0];
$oldpopulation = $data[1];
$newPopulation = array_map('intval', $oldpopulation);
$newArray = array_combine($country,$newPopulation);
$pdf->Cell(30, 5, 'Population of Afghanisthan:');
$pdf->Cell(50);
$pdf->Cell(15, 5, $newArray['Afghanistan'], 0, 0, 'R');
$pdf->Ln();
$pdf->Cell(30, 5, 'Population of Albania:');
$pdf->Cell(50);
$pdf->Cell(15, 5, $newArray['Albania'], 0, 0, 'R');
$pdf->Ln();
$pdf->Cell(30, 5, 'Population of Algeria:');
$pdf->Cell(50);
$pdf->Cell(15, 5, $newArray['Algeria'], 0, 0, 'R');
$pdf->Ln();
$pdf->Ln(8);

$pdf->SetXY(90, $valY);
$col1=array(249, 72, 146);
$col2=array(255, 127, 63);
$col3=array(137, 207, 253);
$pdf->Ln(30);
$pdf->PieChart(100, 35, $newArray, '%l (%p)', array($col1,$col2,$col3));
$pdf->SetXY($valX, $valY + 80);
$pdf->Output();
?>