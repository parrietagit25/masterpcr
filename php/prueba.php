<?php 

require_once 'vendor/autoload.php';
use thiagoalessio\TesseractOCR\TesseractOCR;
$image = 'cedula.jpg';
$imageResource = imagecreatefromjpeg($image);
imagefilter($imageResource, IMG_FILTER_GRAYSCALE);
imagefilter($imageResource, IMG_FILTER_CONTRAST, -15);
$tempImage = 'temp.jpg';
imagejpeg($imageResource, $tempImage);
$ocr = new TesseractOCR($tempImage);
$ocr->lang('spa');
$ocr->osd();
$text = $ocr->run();
echo $text;
preg_match('/([A-Z]{0,2}-\d{1,3}-\d{3,4})/', $text, $idMatches);
$id = $idMatches[1] ?? '';
echo "ID: $id <br>";
// Eliminar la imagen temporal
unlink($tempImage);

?>