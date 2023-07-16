<?php
$apiUrl = 'https://brazilsouth.api.cognitive.microsoft.com/vision/v2.0/ocr';
$apiKey = '90bc4d76077a4a6e9eb5ce2fbf2941ec';

$imageUrl = 'http://ctc.grupopcr.com.pa/material/pasaporte/1.PNG';

$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\nOcp-Apim-Subscription-Key: $apiKey\r\n",
        'method'  => 'POST',
        'content' => json_encode(array(
            'url' => $imageUrl,
        )),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($apiUrl, false, $context);

if ($result === FALSE) {
    /* Handle error */
}

// Parsea el resultado
$resultData = json_decode($result, true);

// Extrae el texto de cada región
$text = '';
foreach ($resultData['regions'] as $region) {
    foreach ($region['lines'] as $line) {
        foreach ($line['words'] as $word) {
            $text .= $word['text'] . ' ';
        }
        $text .= "\n";
    }
    $text .= "\n";
}

// Muestra el texto
/*
echo $text;
echo '<pre>';
var_dump($text);
echo '</pre>';

echo '///////////////////////////////////////////////////////';

$array = explode(" ", $text);

echo '<pre>';
var_dump($array);
echo '</pre>';

echo '///////////////////////////////////////////////////////';

echo 'Nombre: '.$array[5].' '.$array[6].' '.$array[7].' <br>';
echo 'Fecha de nacimineto: ' .$array[13].' <br>';
echo 'Numero de identificacion : ' .$array[28]
**/
echo  $text;
$nombre = '';
$patron = '/\bNombre:\s*(\w+)/i';

if (preg_match($patron, $text, $coincidencias)) {
    $nombre = $coincidencias[1];
}

echo "Nombre: $nombre";


?>
