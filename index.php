<?php

 error_reporting(E_ALL);
 require_once "./lib/PdfParser/autoload.php";
 require_once "./lib/tcpdf/autoload.php";

 $parser = new Smalot\PdfParser\Parser();

 $pdf_url = 'sample_pdf.pdf';

 $pdf = $parser->parseFile($pdf_url);
 $pages = $pdf->getPages();
 $page_details = $pdf->getDetails(true);
 $pdf_pages = array();
 foreach ($pages as $page) {
   $pdf_pages[] = $page->getText();
 }

 echo '<pre>';
 print_r($pdf_pages);
 exit;
?>