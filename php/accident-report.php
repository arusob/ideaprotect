<?php 
    $htmlToPdf = '';
    
    // połaczenie z lib do generowania pdf
    require('../TCPDF-main/tcpdf.php');

//-----------------------------------------------------------------------

    // ustalam zmienne do przesłanych z html-a danych
    $protocolNumberFirst = $_POST['protocolNumberFirst'];
    $protocolNumberSecond = $_POST['protocolNumberSecond'];
    $protocolNumberThird = $_POST['protocolNumberThird'];

    $yearThousands = $_POST['yearThousands'];
    $yearHundreds= $_POST['yearHundreds'];
    $yearTens = $_POST['yearTens'];
    $yearUnity= $_POST['yearUnity'];

//-----------------------------------------------------------------------

    $htmlToPdf .= '<div style=""></div>';
    $htmlToPdf .= '<div style=""></div>';
    $htmlToPdf .= '<div style=""></div>';
    $htmlToPdf .= '<div style=""></div>';

    $htmlToPdf .= '<div style="text-align: center; margin-left: auto; margin-right: auto;"><b>
     Protokół nr '.$protocolNumberFirst.' '.$protocolNumberSecond.' '.$protocolNumberThird.' / '
    .$yearThousands.' '.$yearHundreds.' '.$yearTens.' '.$yearUnity.' r.<br> 
    ustalenia okoliczności i przyczyn wypadku przy pracy <b/></div>';

// ---------------------------------------------------------------------------

    $htmlToPdf .= '<div style=""></div>';

    $htmlToPdf .= '<div style="text-align: center; margin-left: auto; margin-right: auto;"><b>
    Protokół nr '.$protocolNumberFirst.' '.$protocolNumberSecond.' '.$protocolNumberThird.' / '
    .$yearThousands.' '.$yearHundreds.' '.$yearTens.' '.$yearUnity.' r.<br> 
    ustalenia okoliczności i przyczyn wypadku przy pracy <b/></div>';


//-----------------| END OF OUTPUT VIEW |-------------------------------

	
	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->SetFont('freeserif', '', 12);


    // add a page
    $pdf->AddPage();
    $pdf->setPrintHeader(false);

    // output the HTML content
	$pdf->writeHTML($htmlToPdf, true, false, true, false, '');
	
// ---------------------------------------------------------

    //Close and output PDF document
	$pdf->Output('example_006.pdf', 'I');
    $pdf->setPrintFooter(false);
?>


