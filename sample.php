<?php
ini_set('display_errors', 1);
//ini_set('memory_limit', '1000M');
include 'PDFMerger.php';

print_r(get_declared_classes());

$pdf = new PDFMerger;
//
$pdf->addPDF('samplepdfs/one.pdf', '1, 3, 4')
	->addPDF('samplepdfs/two.pdf', '1-2')
	->merge('file',realpath('samplepdfs/tt.pdf'));//,__DIR__ . '/samplepdfs/tt.pdf');
	
	//REPLACE 'file' WITH 'browser', 'download', 'string', or 'file' for output options
	//You do not need to give a file path for browser, string, or download - just the name.
