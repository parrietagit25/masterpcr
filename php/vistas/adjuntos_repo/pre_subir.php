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

        $fecha = $text;
        preg_match_all("/\b\d{4}-\d{2}-\d{2}\b|\b\d{2}\/\d{2}\/\d{4}\b|\b\d{2}-\d{2}-\d{4}\b/", $fecha, $coincidencias);
        $contar_fechas = count($coincidencias[0]);
        $fecha_vencimiento = "";

        if ($contar_fechas > 1) {
            
            $fechas = $coincidencias[0];

            usort($fechas, function($a, $b) {
                $fechaA = DateTime::createFromFormat('d/m/Y', $a);
                $fechaB = DateTime::createFromFormat('d/m/Y', $b);
            
                return $fechaA < $fechaB ? -1 : ($fechaA > $fechaB ? 1 : 0);
            });            

            $fecha_vencimiento = end($fechas);

            print_r($fecha_vencimiento);


            /*$fechas = $fecha_vencimiento; 
            $fecha = DateTime::createFromFormat('d/m/Y', $fechas[0]); 
            $fechaActual = new DateTime(); 

            if ($fecha > $fechaActual) {
                $fecha_vencimiento = $fecha;
            } else {
                $fecha_vencimiento = "";
            }*/
            
        }elseif ($fechas == 1) {
            $fechas = $coincidencias[0]; 
            $fecha = DateTime::createFromFormat('d/m/Y', $fechas[0]); 
            $fechaActual = new DateTime(); 

            if ($fecha > $fechaActual) {
                $fecha_vencimiento = $fecha;
            } else {
                $fecha_vencimiento = "";
            }
            
        }else{
            $fecha_vencimiento = "";
        }

        $cadena = $text;

        $palabrasAEliminar = array(
            "Republica de Panana",
            "DEL TRANSITO",
            "TRANSPORTE TERRESTRE",
            "LICENCIA DE CONDUCIR",
            "PANAMEÑA", 
            "AC,D", 
            "República", 
            "de Panamà?", 
            "TIPO AUTORIDAD Y", 
            "Panamà?", 
            "TIPO", 
            "AUTORIDAD", 
            "Y"
            
        );

        $cadenaSinPalabras = str_ireplace($palabrasAEliminar, "", $cadena);
        $cadenaSinFechas = preg_replace("/\b\d{2}\/\d{2}\/\d{4}\b/", "", $cadenaSinPalabras);

        echo $cadenaSinFechas.'<br> ################################### <br>';
        
        $cadenaSinFechas2 = preg_replace("/\b\d{2}\/\d{2}\/\d{4}\b/", "", $cadenaSinFechas);
        echo $cadenaSinFechas2;

        $array = explode(" ", $cadenaSinFechas);
        echo '<pre>';
        var_dump($array);
        echo '</pre>';

        ?>
        <label for=""><?php  ?></label>
        <label for="">Numero de documento</label>
        <input type="text" class="form-control" name="lic_numero" id="lic_numero" value="<?php echo $array[13]; ?>">
        <br>
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="lic_nombre" id="lic_nombre" value="<?php echo $array[14].' '.$array[15].' '.$array[16].' '.$array[17]; ?>">
        <br>
        <label for="">Fecha de vencimineto</label>
        <input type="text" class="form-control" name="lic_vencimineto" id="lic_vencimineto" value="<?php echo $fecha_vencimiento; ?>">
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
