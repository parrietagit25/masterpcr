<?php
// tipo_doc = 1 : cedula
// tipo_doc = 2 : pasaporte
// tipo_doc = 3 : licencia

session_start();
$modalDocu = 1;
require_once("../../controladores/CrepositorioController.php");
$cRepositorioController = new Repositorio();

$apiUrl = 'https://brazilsouth.api.cognitive.microsoft.com/vision/v2.0/ocr';
$apiKey = '90bc4d76077a4a6e9eb5ce2fbf2941ec';

$datos = [];
$datos["stat"]= 1;
$datos["id_user_reg"] = $_SESSION["usuario"][0]["id"];
$ultimo_id = $cRepositorioController->subir_archivos_get_id($datos);

if (isset($_GET['tipo_doc']) && $_GET['tipo_doc'] == 1) {

    $numero = rand(1000, 30000);
    $destino = 'cedula/'.$numero.'.jpg';
    $imageUrl = 'http://ctc.grupopcr.com.pa/vistas/adjuntos_repo/'.$destino;

    try {
        
        move_uploaded_file($_FILES['image']['tmp_name'], $destino);

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
                $text .= "<br>";
            }
            $text .= "<br>";
        } 
        
        $datos['scan_text'] = $text;
        $where = "id = $ultimo_id";
        $datos['lic_path'] = $destino;

        $cRepositorioController->actualizar($where, $datos);

    } catch (Exception $e) {
        header('Content-Type: application/json');
        echo json_encode(['error' => $e->getMessage()]);
    }
    
}

if (isset($_GET['tipo_doc']) && $_GET['tipo_doc'] == 2) {

    $numero = rand(1000, 30000);
    $destino = 'cedula/'.$numero.'.jpg';
    $imageUrl = 'http://ctc.grupopcr.com.pa/vistas/adjuntos_repo/'.$destino;

    try {
        
        move_uploaded_file($_FILES['image']['tmp_name'], $destino);

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
                $text .= "<br>";
            }
            $text .= "<br>";
        } 
        
        $datos['scan_text'] = $text;
        $where = "id = $ultimo_id";
        $datos['lic_path'] = $destino;

        $cRepositorioController->actualizar($where, $datos);

    } catch (Exception $e) {
        header('Content-Type: application/json');
        echo json_encode(['error' => $e->getMessage()]);
    }
    
}

if (isset($_GET['tipo_doc']) && $_GET['tipo_doc'] == 3) {

    $numero = rand(1000, 30000);
    $destino = 'cedula/'.$numero.'.jpg';
    $imageUrl = 'http://ctc.grupopcr.com.pa/vistas/adjuntos_repo/'.$destino;

    try {
        
        move_uploaded_file($_FILES['image']['tmp_name'], $destino);

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
                $text .= "<br>";
            }
            $text .= "<br>";
        } 
        
        $datos['scan_text'] = $text;
        $where = "id = $ultimo_id";
        $datos['lic_path'] = $destino;

        $cRepositorioController->actualizar($where, $datos);

    } catch (Exception $e) {
        header('Content-Type: application/json');
        echo json_encode(['error' => $e->getMessage()]);
    }
    
}

    
    

?>