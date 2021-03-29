
	<?php
	require_once('pdf/fpdf.php');
	?>
    <?php
    //if (isset($_GET['escaneo'])) {
    $VarEscaneo = $_GET['escaneo'];
   // $Varcurp  = "porción1 porción2 porción3 porción4 porción5 porción6";
    $fragmentar = explode("|", $VarEscaneo);
    $Varcurp = $fragmentar[0]; // curp
    $VarApellidoPaterno =  $fragmentar[1]; // Apellido paterno 
    $VarApellidoMaterno = $fragmentar[2]; // Apellido materno
    $VarNombre = $fragmentar[3]; // Nombres 
    $VarGenero = $fragmentar[4]; // Genero
    $VarDate = $fragmentar[5]; // Fecha de nacimiento  
    $VarEntidad = $fragmentar[6]; // Entidad de nacimiento 


    //}

    ?>

<?php
$pdf = new FPDF('P','mm','Letter');
    $pdf->SetTitle('VERIFICACION DE CONDICIONES FISICO MECANICA');
    $pdf->SetTopMargin(0);
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 9);
    $BORDES = 1;
    
    $pdf->Cell(50,20, $pdf->Image('IMAGE/Hasbro(2).jpg',16,7,22),$BORDES);
    $pdf->Cell(50,20, $Varcurp,16,7,22),$BORDES);
    $pdf->Cell(50,20, $VarApellidoPaterno,16,7,22),$BORDES);
    $pdf->Cell(50,20, $VarApellidoMaterno,16,7,22),$BORDES);
    $pdf->Cell(50,20, $VarNombre,16,7,22),$BORDES);
    $pdf->Cell(50,20, $VarGenero,16,7,22),$BORDES);
    $pdf->Cell(50,20, $VarDate,16,7,22),$BORDES);
    $pdf->Cell(50,20, $VarEntidad,16,7,22),$BORDES);
    $pdf->SetXY(20, 100);

    $Suspension = "HOLA MUND0";
    $pdf->MultiCell(100, 3,  $Suspension, 0, 'C'); 

    $pdf->SetXY(20, 200);
    $pdf->MultiCell(120, 3, utf8_decode('SUBSECRETARIA DEL TRANSPORTE'), $BORDES, 'C');
    $pdf->MultiCell(26, 3, 'FEDERAL  ___________                              ESTATAL ___________', 0, 'L'); //


    $pdf->AddPage();

    $pdf->Output();

?>


