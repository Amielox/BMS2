<?php
include 'connection.php';
require 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;


$id = $_GET['id'];
$sql = mysqli_query($con,"SELECT * FROM bmss WHERE id = '$id'");
$user = mysqli_fetch_assoc($sql);

// instantiate and use the dompdf class
$dompdf = new Dompdf();
ob_start();
// require('certificates/index.php');
require ('details-pdf.php');
$html = ob_get_contents();
ob_get_clean();




$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'Portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('Document.pdf',['Attachment'=>false]);