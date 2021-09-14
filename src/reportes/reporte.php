<?php

    require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte Vihiculo',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(40,10,'Placa',1,0,'C',0);
    $this->Cell(50,10,'Marca',1,0,'C',0);
    $this->Cell(50,10,'Nombre conductor',1,0,'C',0);
    $this->Cell(50,10,'Nombre Propietario',1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('pagina').$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
require("../conexion/cn.php");
$consulta="SELECT * FROM vehiculo";
$resultado= mysqli_query($conexion,$consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);

while ($row=$resultado->fetch_assoc()) {
    $pdf->Cell(40,10,$row['placa'],1,0,'C',0);
    $pdf->Cell(50,10,$row['marca'],1,0,'C',0);
    $pdf->Cell(50,10,$row['conductor'],1,0,'C',0);
    $pdf->Cell(50,10,$row['propietario'],1,1,'C',0);
}

$pdf->Output();

?>