<?php 

require_once 'vendor/autoload.php';

use thiagoalessio\TesseractOCR\TesseractOCR;

$image = 'cedula.jpg';

$ocr = new TesseractOCR($image);
$text = $ocr->run();

echo $text;

?>