<?php

/*


$sql = "SELECT * FROM pago";
$result = $conexion->query($sql);
$row = $result->num_rowsl; */

include('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('logo (2).png',10,8,15);
    // Arial bold 15
    $this->SetFont('Arial','B',14);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'REPORTE DE ORDENANZAS',0,0,'C');
    
    // Salto de línea
    $this->Ln(28);

    $this->Cell(50, 10, 'Nombre', 1, 0, 'C', 0);
    $this->Cell(35, 10, utf8_decode('Cédula'), 1, 0, 'C', 0);
    $this->Cell(35, 10, 'Fecha', 1, 0, 'C', 0);
    $this->Cell(35, 10, utf8_decode('Número'), 1, 0, 'C', 0);
    $this->Cell(35, 10, 'Ordenanza', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10, utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'conexion_be.php';

$sql = "SELECT * FROM pago";
$result = $conexion->query($sql);




$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while($row = $result->fetch_assoc()){
    $pdf->Cell(50, 10, $row['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['cedula'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['fecha'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['numero'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['id_ordenanzas'], 1, 1, 'C', 0);
}


$pdf->Output();
?>



