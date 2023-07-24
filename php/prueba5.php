<?php
$apiUrl = 'https://brazilsouth.api.cognitive.microsoft.com/vision/v2.0/ocr';
$apiKey = '90bc4d76077a4a6e9eb5ce2fbf2941ec';

$imageUrl = 'http://ctc.grupopcr.com.pa/material/licencia/4.PNG';

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

"<br />\n<b>Warning</b>:  move_uploaded_file(cedula/1263.jpg): Failed to open stream: Permission denied in 
<b>/var/www/html/vistas/adjuntos_repo/subir_documento.php</b> on line <b>27</b><br />\n<br />\n
<b>Warning</b>:  move_uploaded_file(): Unable to move &quot;/tmp/phplFJynX&quot; to &quot;cedula/1263.jpg&quot; in <b>
    /var/www/html/vistas/adjuntos_repo/subir_documento.php</b> on line <b>27</b><br />\n<br />\n<b>Warning</b>:  
    file_get_contents(https://brazilsouth.api.cognitive.microsoft.com/vision/v2.0/ocr): Failed to open stream: 
    HTTP request failed! HTTP/1.1 400 Bad Request\r\n in <b>/var/www/html/vistas/adjuntos_repo/subir_documento.php</b> 
    on line <b>40</b><br />\n<br />\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>
        /var/www/html/vistas/adjuntos_repo/subir_documento.php</b> on line <b>51</b><br />\n<br />\n<b>Warning</b>:
          foreach() argument must be of type array|object, null given in 
          <b>/var/www/html/vistas/adjuntos_repo/subir_documento.php</b> on line <b>51</b><br />\n
          <pre>string(0) \"\"\n</pre>"


          "<br />\n<b>Warning</b>:  move_uploaded_file(cedula/29804.jpg): Failed to open stream: Permission denied in <b>
          /var/www/html/vistas/adjuntos_repo/subir_documento.php</b> on line <b>27</b><br />\n<br />\n<b>Warning</b>:  
          move_uploaded_file(): Unable to move &quot;/tmp/phpyARWNf&quot; to &quot;cedula/29804.jpg&quot; in 
          <b>/var/www/html/vistas/adjuntos_repo/subir_documento.php</b> on line <b>27</b><br />\n<br />\n<b>Warning</b>:  
          file_get_contents(https://brazilsouth.api.cognitive.microsoft.com/vision/v2.0/ocr): Failed to open stream: HTTP 
          request failed! HTTP/1.1 400 Bad Request\r\n in <b>/var/www/html/vistas/adjuntos_repo/subir_documento.php</b> on 
          line <b>40</b><br />\n<br />\n<b>Warning</b>:  Trying to access array offset on value of type null in
           <b>/var/www/html/vistas/adjuntos_repo/subir_documento.php</b> on line <b>51</b><br />\n<br />\n<b>Warning</b>:
             foreach() argument must be of type array|object,
              null given in <b>/var/www/html/vistas/adjuntos_repo/subir_documento.php</b> on line
               <b>51</b><br />\n<pre>string(0) \"\"\n</pre>"


?>
