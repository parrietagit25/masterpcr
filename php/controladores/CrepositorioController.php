<?php 

if (isset($modalDocu) && $modalDocu == 1) {
    require_once("../../modelos/Globales.php");
}else{
    require_once("modelos/Globales.php");
}

// lector de imagenes a texto este es de google se agrego por compose
//require_once 'vendor/autoload.php';
//use thiagoalessio\TesseractOCR\TesseractOCR;

// este es otro de microsoft
$apiUrl = 'https://brazilsouth.api.cognitive.microsoft.com/vision/v2.0/ocr';
$apiKey = '90bc4d76077a4a6e9eb5ce2fbf2941ec';

class Repositorio{

    private $tabla_repo;

    public function __construct() {
        $this->ModelGlobal = new ModelGlobal(); 
        $this->tabla_repositorios = "repositorios";
    }

    public function subir_archivos($datos){

        $datos["stat"]= 1;
        $datos["id_user_reg"] = $_SESSION["usuario"][0]["id"];

        $ultimo_id = $this->ModelGlobal->agregar($this->tabla_repositorios, $datos);

        if (!empty($_FILES["iden_path"]) && $_FILES["iden_path"]["error"] == 0) {
            if (isset($_FILES["iden_path"])) {

                $ruta = "vistas/adjuntos_repo/cedula/";
                $file_name = basename($_FILES["iden_path"]["name"]);
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $new_file_name = $ultimo_id.'_'.uniqid() . "." . $file_ext;
                $target_file = $ruta . $new_file_name;
                $uploadOk = 1;
                
                // Verifica si el archivo ya existe
                if (file_exists($target_file)) {
                    echo "El archivo ya existe.";
                    $uploadOk = 0;
                }
        
                // Intenta mover el archivo a la carpeta de destino

                if ($uploadOk == 1 && move_uploaded_file($_FILES["iden_path"]["tmp_name"], $target_file)) {

                    $where = "id = $ultimo_id";
                    $datos = array('iden_path'=>$target_file);
                    $this->ModelGlobal->actualizar($this->tabla_repositorios, $where, $datos);

                } else {
                    echo "Error al subir el archivo.";
                }
            }
        }

        if (!empty($_FILES["pass_path"]) && $_FILES["pass_path"]["error"] == 0) {
            if (isset($_FILES["pass_path"])) {

                $ruta = "vistas/adjuntos_repo/pasaporte/";
                $file_name = basename($_FILES["pass_path"]["name"]);
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $new_file_name = $ultimo_id.'_'.uniqid() . "." . $file_ext;
                $target_file = $ruta . $new_file_name;
                $uploadOk = 1;
                
                // Verifica si el archivo ya existe
                if (file_exists($target_file)) {
                    echo "El archivo ya existe.";
                    $uploadOk = 0;
                }
        
                // Intenta mover el archivo a la carpeta de destino

                if ($uploadOk == 1 && move_uploaded_file($_FILES["pass_path"]["tmp_name"], $target_file)) {

                    $where = "id = $ultimo_id";
                    $datos = array('pass_path'=>$target_file);
                    $this->ModelGlobal->actualizar($this->tabla_repositorios, $where, $datos);

                } else {
                    echo "Error al subir el archivo.";
                }
            }
        }

        if (!empty($_FILES["lic_path"]) && $_FILES["lic_path"]["error"] == 0) {
            if (isset($_FILES["lic_path"])) {

                $ruta = "vistas/adjuntos_repo/licencia/";
                $file_name = basename($_FILES["lic_path"]["name"]);
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $new_file_name = $ultimo_id.'_'.uniqid() . "." . $file_ext;
                $target_file = $ruta . $new_file_name;
                $uploadOk = 1;
                
                // Verifica si el archivo ya existe
                if (file_exists($target_file)) {
                    echo "El archivo ya existe.";
                    $uploadOk = 0;
                }
        
                // Intenta mover el archivo a la carpeta de destino

                if ($uploadOk == 1 && move_uploaded_file($_FILES["lic_path"]["tmp_name"], $target_file)) {

                    $where = "id = $ultimo_id";
                    $datos = array('lic_path'=>$target_file);

                    $imageUrl = 'http://ctc.grupopcr.com.pa/material/'.$target_file;

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

                    $this->ModelGlobal->actualizar($this->tabla_repositorios, $where, $datos);

                } else {
                    echo "Error al subir el archivo.";
                }
            }
        }

    }

}

