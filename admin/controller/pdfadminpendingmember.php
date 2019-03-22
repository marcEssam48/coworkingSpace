<?php
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Admin');
$pdf->SetTitle('Users Report');
$pdf->SetSubject('PDF');
$pdf->SetKeywords('PDF');
// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
//set some language-dependent strings
$pdf->setLanguageArray($l);
// ---------------------------------------------------------
// set default font subsetting mode
$pdf->setFontSubsetting(true);
// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);
// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();
// Set some content to print

$tbl_header = '<table border="1">';
$tbl_footer = '</table>';
$tbl ='';
$con=mysqli_connect("localhost","root","","workingspace");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$pdf->writeHTML("<h1>All Pendding Members Report </h1>", true, false, true, false, '');
$totalPageCount = $pdf->getNumPages();
if (($totalPageCount>=1) && ($totalPageCount % 2 != 0)) {
    $pdf->writeHTML('<br>report by username and userid<br>', true, false, true, false, '');
}
$result = mysqli_query($con,"SELECT * FROM users WHERE regstatus=0 AND groupid=0");

while($row = mysqli_fetch_array($result))
  {
  $id = $row['userid'];
  $key = $row['username'];
$tbl .= '<tr><td>'.$id.'</td><td>'.$key.'</td></tr>';
}

// Print text using writeHTMLCell()
$pdf->writeHTML($tbl_header . $tbl . $tbl_footer, true, false, false, false, '');
// ---------------------------------------------------------
// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('AllPenddingMembersReport.pdf', 'I');
//============================================================+
// END OF FILE
//============================================================+
?>