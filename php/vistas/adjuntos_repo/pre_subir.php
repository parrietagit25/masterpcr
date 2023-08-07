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
//$ultimo_id = $cRepositorioController->subir_archivos_get_id($datos);

if (isset($_GET['tipo_doc']) && $_GET['tipo_doc'] == 1) {

    $numero = rand(1000, 30000);
    $destino = 'temp/'.$numero.'.png';
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
                //$text .= "<br>";
                $text .= "\n";
            }
            //$text .= "<br>";
            $text .= "\n";
        }
        /*
        $datos['scan_text'] = $text;
        $where = "id = $ultimo_id";
        $datos['lic_path'] = $destino;

        $cRepositorioController->actualizar($where, $datos); */

        $array = explode(" ", $text);

        ?>
        <label for="">Numero de documento</label>
        <input type="text" class="form-control" name="lic_numero" id="lic_numero" value="<?php echo $array[13]; ?>">
        <br>
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="lic_nombre" id="lic_nombre" value="<?php echo $array[14].' '.$array[15].' '.$array[16].' '.$array[17]; ?>">
        <br>
        <label for="">Fecha de vencimineto</label>
        <input type="text" class="form-control" name="lic_vencimineto" id="lic_vencimineto" value="<?php echo $array[20]; ?>">
        <br>
        <label for="">Texto Extraido</label>
        <textarea name="scan_text" class="form-control" id="scan_text" cols="30" rows="10"><?php echo $text; ?></textarea>
        <br>
        <a href="<?php echo $imageUrl; ?>" target="_blank"> <img src="<?php echo $imageUrl; ?>" width="100"> </a>
        <br>
        <input type="hidden" name="lic_path" id="lic_path" value="<?php echo $destino; ?>">
        <a href="javascript:void(0);" id="boton_cancelar_2" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
        <a href="#" id="boton_guardar_2" class="btn btn-primary" name="subir_documento_repo" onclick="cargar_imagen_server_lic_carga(1)">Guardar</a>

        <?php


    } catch (Exception $e) {
        header('Content-Type: application/json');
        echo json_encode(['error' => $e->getMessage()]);
    }
    
}   

?>
