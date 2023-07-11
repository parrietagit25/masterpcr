<?php 

if (isset($modalDocu) && $modalDocu == 1) {
    require_once("../../modelos/Globales.php");
}else{
    require_once("modelos/Globales.php");
}

// lector de imagenes a texto
require_once 'vendor/autoload.php';
use thiagoalessio\TesseractOCR\TesseractOCR;

class Repositorio{

    public function subir_archivos($datos, $id_general){

        if (!empty($_FILES["iden_path"]) && $_FILES["iden_path"]["error"] == 0) {
            if (isset($_FILES["iden_path"])) {

                $ruta = "vistas/adjuntos/firma_pj/";
                $file_name = basename($_FILES["iden_path"]["name"]);
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $new_file_name = $id_general.'_'.uniqid() . "." . $file_ext;
                $target_file = $ruta . $new_file_name;
                $uploadOk = 1;
                
                // Verifica si el archivo ya existe
                if (file_exists($target_file)) {
                    echo "El archivo ya existe.";
                    $uploadOk = 0;
                }
        
                // Intenta mover el archivo a la carpeta de destino

                if ($uploadOk == 1 && move_uploaded_file($_FILES["iden_path"]["tmp_name"], $target_file)) {

                    $where = "id_general = $id_general";
                    $datos = array('iden_path'=>$target_file);
                    $this->ModelGlobal->actualizar($this->tabla_cc_pj_declaracion_jurada, $where, $datos);

                } else {
                    echo "Error al subir el archivo.";
                }
            }
        }

        if (!empty($_FILES["pass_path"]) && $_FILES["pass_path"]["error"] == 0) {
            if (isset($_FILES["pass_path"])) {

                $ruta = "vistas/adjuntos/firma_pj/";
                $file_name = basename($_FILES["pass_path"]["name"]);
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $new_file_name = $id_general.'_'.uniqid() . "." . $file_ext;
                $target_file = $ruta . $new_file_name;
                $uploadOk = 1;
                
                // Verifica si el archivo ya existe
                if (file_exists($target_file)) {
                    echo "El archivo ya existe.";
                    $uploadOk = 0;
                }
        
                // Intenta mover el archivo a la carpeta de destino

                if ($uploadOk == 1 && move_uploaded_file($_FILES["pass_path"]["tmp_name"], $target_file)) {

                    $where = "id_general = $id_general";
                    $datos = array('pass_path'=>$target_file);
                    $this->ModelGlobal->actualizar($this->tabla_cc_declaracion_jurada, $where, $datos);

                } else {
                    echo "Error al subir el archivo.";
                }
            }
        }

        if (!empty($_FILES["lic_path"]) && $_FILES["lic_path"]["error"] == 0) {
            if (isset($_FILES["lic_path"])) {

                $ruta = "vistas/adjuntos/firma_pj/";
                $file_name = basename($_FILES["lic_path"]["name"]);
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $new_file_name = $id_general.'_'.uniqid() . "." . $file_ext;
                $target_file = $ruta . $new_file_name;
                $uploadOk = 1;
                
                // Verifica si el archivo ya existe
                if (file_exists($target_file)) {
                    echo "El archivo ya existe.";
                    $uploadOk = 0;
                }
        
                // Intenta mover el archivo a la carpeta de destino

                if ($uploadOk == 1 && move_uploaded_file($_FILES["lic_path"]["tmp_name"], $target_file)) {

                    $where = "id_general = $id_general";
                    $datos = array('lic_path'=>$target_file);
                    $this->ModelGlobal->actualizar($this->tabla_cc_declaracion_jurada, $where, $datos);

                } else {
                    echo "Error al subir el archivo.";
                }
            }
        }

    }

}

