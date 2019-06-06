<?php 
include_once 'fpdf.php';

class Pdf extends FPDF
{
	
   public function Header()
   {
   	$this->image('images.png', 10,6,10);
    $this->Ln(25);
   	$this->SetFont('Arial', 'B', 12);
   	$this->cell(80);
   	$this->cell(30,10, 'Lista de Discapacitados', 0,0,'C');
   	$this->Ln(20);
   }

   public function Footer()
   {
   	 $this->Sety(-10);
   	 $this->SetFont('Times', 'I', 8);
   	 $this->Cell(0,10,"Pagina".$this->PageNo());
   }
}

$pdf = new Pdf();
$pdf->AddPage();
$pdf->SetFillColor(191,188,188);
$pdf->setFont('Arial', '', 8);
$pdf->SetTextColor(0);
$pdf->Cell(32,5, 'Cedula', 1,0,'C',1);
$pdf->Cell(32,5, 'Nombres y Apellidos', 1,0,'C',1);
$pdf->Cell(32,5, 'Fecha', 1,0,'C',1);
$pdf->Cell(32,5, 'Edad', 1,0,'C',1);
$pdf->Cell(32,5, 'Tipo de discapacidad', 1,1,'C',1);

$pdf->setFont('Arial', '', 6);

$cadcon = mysqli_connect("localhost", "root", "cv23952018", "sanagustin");
if ($cadcon==false) {
	die('Error No se hya podido conectar a la base de datos');
}else{
	$consulta= mysqli_query($cadcon, "SELECT * FROM discapacitados");
	while ($resultado=mysqli_fetch_array($consulta)) {
		
        
          $pdf->Cell(32,5,$resultado['cedula'],1,0,'C');
          $pdf->Cell(32,5,$resultado['nombreApellido'],1,0,'C');
          $pdf->Cell(32,5,$resultado['fechaNacimiento'],1,0,'C');
          $pdf->Cell(32,5,$resultado['edad'],1,0,'C');
          $pdf->Cell(32,5,$resultado['tipoDiscapacidad'],1,1,'C');
 	}

 	$pdf->Output();
}
 ?>