<?php
if (isset($modalDocu) && $modalDocu == 1) {
    require_once("../../modelos/Globales.php");
}else{
    require_once("modelos/Globales.php");
}

class CcclienteController {

  private $tabla_cc_generales;
  private $tabla_cc_ocupacionales;
  private $tabla_ccc_declaracion;
  private $tabla_cc_referencias;
  private $tabla_cc_beneficiario;
  private $tabla_cc_terceros_autorizados;
  private $tabla_cc_personas_expuestas;
  private $tabla_cc_declaracion_jurada;
  private $tabla_cc_adjuntos;
  private $tabla_cc_uso_interno;
  private $tabla_paises;
  private $tabla_codigo;
  private $tabla_cc_expediente;
  private $tabla_cc_adjuntos_general;

    public function __construct() {
        $this->ModelGlobal = new ModelGlobal();
        $this->tabla_cc_generales = "cc_generales";
        $this->tabla_cc_ocupacionales = "cc_ocupacionales";
        $this->tabla_ccc_declaracion = "cc_declaracion";
        $this->tabla_cc_referencias = "cc_referencias";
        $this->tabla_cc_beneficiario = "cc_beneficiario";
        $this->tabla_cc_terceros_autorizados = "cc_terceros_autorizados";
        $this->tabla_cc_personas_expuestas = "cc_personas_expuestas";
        $this->tabla_cc_declaracion_jurada = "cc_declaracion_jurada";
        $this->tabla_cc_adjuntos = "cc_adjuntos";
        $this->tabla_cc_uso_interno = "cc_uso_interno";
        $this->tabla_paises = "paises";
        $this->tabla_codigo = "codigos";
        $this->tabla_cc_expediente = "cc_expediente";
        $this->tabla_cc_adjuntos_general = "adjuntos_general";
    }

    public function obtenerTodosAdjuntos($id){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_adjuntos_general, " id_general = $id ");
    }

    public function obtenerUsuarios() {
        return $this->usuarioModel->obtenerUsuarios();
    }

    public function actualizarUsuario($datos) {
        
        if ($datos['password']== '') {
            unset($datos['password']);
        }else{
            $hashed_password = password_hash($datos['password'], PASSWORD_DEFAULT);
            $datos['password'] = $hashed_password; 
        }

        $id_user = $datos['id_usuario'];
        unset($datos['id_usuario']);

        $this->usuarioModel->actualizar($this->tabla_usuarios, $id_user, $datos);
    }

    public function eliminarUsuario($id) {
        $this->usuarioModel->eliminarUsuario($id);
    }

    public function obtener_pais(){
        return $this->ModelGlobal->obtenerTodos($this->tabla_paises);
    }

    public function obtener_pais_id($id_pais){
        return $this->ModelGlobal->obtenerPaisId($this->tabla_paises, $id_pais);
    }
    // codigo
    public function obtener_codigo_id($id_genero){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "= '".$id_genero."'");    
    }

    public function obtener_genero(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "in('01GEN', '02GEN', '03GEN')");    
    }

    public function obtener_estado_civil(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "in('04ECL', '05ECL')");    
    }

    public function obtener_profesion(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "like '%PRO'");
    }

    public function obtener_actividad_principal(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "in ('77FUE', '78FUE', '79FUE', '80FUE', '81FUE')");
    }
    
    public function obtener_actividad_otras(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "in ('82FUE', '83FUE', '84FUE', '85FUE', '86FUE', '87FUE', '88FUE', '89FUE')");
    }

    public function obtener_forma_pago(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "like '%FDP'");
    }

    public function obtener_limite(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "like '%LIM'");
    }

    public function obtener_motodo_pago(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "like '%MDP'");
    }

    public function obtener_profesion_personas_expuestas(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "like '%PPEP'");
    }

    public function agregar_cc_cliente($datos){

        // principal

        $datos["fg_stat"]= 1;
        $datos["fg_id_user"] = $_SESSION["usuario"][0]["id"];
        $datos["fg_fecha_nacimiento"] = date('Y-m-d', strtotime($datos["fg_fecha_nacimiento"]));
        $datos_generales = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fg_') === 0) {
                $datos_generales[$key] = $value; 
            }
        }

        $ultimo_id = $this->ModelGlobal->agregar($this->tabla_cc_generales, $datos_generales);
        
        $datos["id_general"]= $ultimo_id;

        // Portada

        $datos_expediente = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'exp_') === 0) {
                $datos_expediente[$key] = $value; 
            }
        }

        $datos_expediente["id_general"] = $ultimo_id;
        $datos_expediente["exp_fecha"] = date('Y-m-d', strtotime($datos_expediente["exp_fecha"]));

        $this->ModelGlobal->sub_agregar($this->tabla_cc_expediente, $datos_expediente);

        // ocupacion

        $datos_ocupacionales = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fo_') === 0) {
                $datos_ocupacionales[$key] = $value; 
            }
        }

        $datos_ocupacionales["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_ocupacionales, $datos_ocupacionales);

        // declaracion 

        $datos_declaracion = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fd_') === 0) {
                $datos_declaracion[$key] = $value; 
            }
        }

        $datos_declaracion["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_ccc_declaracion, $datos_declaracion);

        // referencias 

        $datos_referencias = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fr_') === 0) {
                $datos_referencias[$key] = $value; 
            }
        }

        $datos_referencias["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_referencias, $datos_referencias);

        // Beneficiario final 

        $datos_beneficiario = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fb_') === 0) {
                $datos_beneficiario[$key] = $value; 
            }
        }

        $datos_beneficiario["id_general"] = $ultimo_id;
        $datos_beneficiario["fb_fecha_nacimiento"] = date('Y-m-d', strtotime($datos_beneficiario["fb_fecha_nacimiento"]));
        $this->ModelGlobal->sub_agregar($this->tabla_cc_beneficiario, $datos_beneficiario);

        // Terceros autorizados

        $datos_terceros_autorizados = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'ft_') === 0) {
                $datos_terceros_autorizados[$key] = $value; 
            }
        }

        $datos_terceros_autorizados["id_general"] = $ultimo_id;
        $datos_terceros_autorizados["ft_fecha_nacimiento"] = date('Y-m-d', strtotime($datos_terceros_autorizados["ft_fecha_nacimiento"]));
        $this->ModelGlobal->sub_agregar($this->tabla_cc_terceros_autorizados, $datos_terceros_autorizados);

        // Personas expuestas

        $datos_personas_expuestas = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fp_') === 0) {
                $datos_personas_expuestas[$key] = $value; 
            }
        }

        $datos_personas_expuestas["id_general"] = $ultimo_id;
        $datos_personas_expuestas["fp_fecha"] = date('Y-m-d', strtotime($datos_personas_expuestas["fp_fecha"]));
        $datos_personas_expuestas["fp_fecha_anterior"] = date('Y-m-d', strtotime($datos_personas_expuestas["fp_fecha_anterior"]));
        $this->ModelGlobal->sub_agregar($this->tabla_cc_personas_expuestas, $datos_personas_expuestas);

        // Declaracion jurada

        $datos_cc_declaracion_jurada = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fdc_') === 0) {
                $datos_cc_declaracion_jurada[$key] = $value; 
            }
        }

        $datos_cc_declaracion_jurada["id_general"] = $ultimo_id;
        $datos_cc_declaracion_jurada["fdc_fecha"] = date('Y-m-d', strtotime($datos_cc_declaracion_jurada["fdc_fecha"]));
        $this->ModelGlobal->sub_agregar($this->tabla_cc_declaracion_jurada, $datos_cc_declaracion_jurada);

        // Adjuntos

        $datos_cc_adjuntos = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fdcad_') === 0) {
                $datos_cc_adjuntos[$key] = $value; 
            }
        }

        $datos_cc_adjuntos["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_adjuntos, $datos_cc_adjuntos);

        // uso interno

        $datos_cc_uso_interno = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fui_') === 0) {
                $datos_cc_uso_interno[$key] = $value; 
            }
        }

        $datos_cc_uso_interno["id_general"] = $ultimo_id;
        $datos_cc_uso_interno["fui_fecha_1"] = date('Y-m-d', strtotime($datos_cc_uso_interno["fui_fecha_1"]));
        $datos_cc_uso_interno["fui_fecha_2"] = date('Y-m-d', strtotime($datos_cc_uso_interno["fui_fecha_2"]));
        $datos_cc_uso_interno["fui_fecha_3"] = date('Y-m-d', strtotime($datos_cc_uso_interno["fui_fecha_3"]));
        $datos_cc_uso_interno["fui_fecha_4"] = date('Y-m-d', strtotime($datos_cc_uso_interno["fui_fecha_4"]));
        $this->ModelGlobal->sub_agregar($this->tabla_cc_uso_interno, $datos_cc_uso_interno);

        return $ultimo_id;

    }

    public function subir_archivos($datos, $id_general){

        if (!empty($_FILES["fdc_firma"]) && $_FILES["fdc_firma"]["error"] == 0) {
            if (isset($_FILES["fdc_firma"])) {

                $ruta = "vistas/adjuntos/firma/";
                $file_name = basename($_FILES["fdc_firma"]["name"]);
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

                if ($uploadOk == 1 && move_uploaded_file($_FILES["fdc_firma"]["tmp_name"], $target_file)) {

                    $where = "id_general = $id_general";
                    $datos = array('fdc_firma'=>$target_file);
                    $this->ModelGlobal->actualizar($this->tabla_cc_declaracion_jurada, $where, $datos);

                } else {
                    echo "Error al subir el archivo.";
                }
            }
        }

        foreach ($_FILES as $key => $file) {
            if (!empty($file) && $file["error"] == 0) {
                $file_name = basename($file["name"]);
                if ($key == 'fdcad_documento_identidad') {

                    $ruta = "vistas/adjuntos/cedula/";

                }elseif($key == 'fdcad_recibo'){

                    $ruta = "vistas/adjuntos/recibo_contrato/";

                }elseif($key == 'fdcad_aviso_operaciones'){

                    $ruta = "vistas/adjuntos/aviso_licencia/";

                }elseif($key == 'fdcad_evidencia_ingresos'){

                    $ruta = "vistas/adjuntos/evidencia_ingreso/";

                }elseif($key == 'link_desc'){
                    
                    $ruta = "vistas/adjuntos/adjuntos_g_pn/";

                }elseif($key == 'link_desc_pj'){
                    
                    $ruta = "vistas/adjuntos/adjuntos_g_pn/";
                }

                if (strpos($key, 'link_desc') === 0) { 
                    $ruta = "vistas/adjuntos/adjuntos_g_pn/";
                    $ruta = $ruta;
                    $file_name = basename($_FILES[$key]["name"]);
                    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                    $new_file_name = $id_general.'_'.uniqid() . "." . $file_ext;
                    $target_file = $ruta . $new_file_name;
                    $uploadOk = 1;
                    
                    // Verifica si el archivo ya existe
                    if (file_exists($target_file)) {
                        //echo "El archivo ya existe.";
                        $uploadOk = 0;
                    }
            
                    // Intenta mover el archivo a la carpeta de destino
                    if ($uploadOk == 1 && move_uploaded_file($_FILES[$key]["tmp_name"], $target_file)) {
                        $datos = array($key=>$target_file);
                        $datos['id_general'] = $id_general;
                        $datos['stat'] = 1;
                        $datos['descripcion'] = $_POST['descripcion'];

                        $this->ModelGlobal->agregar($this->tabla_cc_adjuntos_general, $datos);
                    } else {
                        //echo "Error al subir el archivo.";
                    }
                    
                }

                if (strpos($key, 'link_desc_pj') === 0) { 
                    $ruta = "vistas/adjuntos/adjuntos_g_pj/";
                    $ruta = $ruta;
                    $file_name = basename($_FILES[$key]["name"]);
                    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                    $new_file_name = $id_general.'_'.uniqid() . "." . $file_ext;
                    $target_file = $ruta . $new_file_name;
                    $uploadOk = 1;
                    
                    // Verifica si el archivo ya existe
                    if (file_exists($target_file)) {
                        //echo "El archivo ya existe.";
                        $uploadOk = 0;
                    }
            
                    // Intenta mover el archivo a la carpeta de destino
                    if ($uploadOk == 1 && move_uploaded_file($_FILES[$key]["tmp_name"], $target_file)) {
                        $datos = array($key=>$target_file);
                        $datos['id_general'] = $id_general;
                        $datos['stat'] = 2;
                        $datos['descripcion'] = $_POST['descripcion'];

                        $this->ModelGlobal->agregar($this->tabla_cc_adjuntos_general, $datos);
                    } else {
                        //echo "Error al subir el archivo.";
                    }
                    
                }

                if (strpos($key, 'fdcad_') === 0) { 
                    $ruta = $ruta;
                    $file_name = basename($_FILES[$key]["name"]);
                    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                    $new_file_name = $id_general.'_'.uniqid() . "." . $file_ext;
                    $target_file = $ruta . $new_file_name;
                    $uploadOk = 1;
                    
                    // Verifica si el archivo ya existe
                    if (file_exists($target_file)) {
                        //echo "El archivo ya existe.";
                        $uploadOk = 0;
                    }
            
                    // Intenta mover el archivo a la carpeta de destino
                    if ($uploadOk == 1 && move_uploaded_file($_FILES[$key]["tmp_name"], $target_file)) {
                        $where = "id_general = $id_general";
                        $datos = array($key=>$target_file);
                        $this->ModelGlobal->actualizar($this->tabla_cc_adjuntos, $where, $datos);
                    } else {
                        //echo "Error al subir el archivo.";
                    }
                    
                }
            } else {
                //echo "No se ha seleccionado un archivo o el archivo está vacío.<br>";
            }
        }

    }

    public function obtenerRegistroClientes(){
        return $this->ModelGlobal->obtenerRegistroClientes();
    }

    public function obtenerRegistroClientesHistorico(){
        return $this->ModelGlobal->obtenerRegistroClientesHistorico();
    }

    public function obtenerGenerales($id){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_generales, "id = $id");
    }

    public function obtenerExpediente($id_expediente){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_expediente, "id_general = $id_expediente");
    }

    public function obtenerOcupacionales($id_ocupacional){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_ocupacionales, "id_general = $id_ocupacional");
    }

    public function obtenerDeclaracion($id_declaracion){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_ccc_declaracion, "id_general = $id_declaracion");
    }

    public function obtenerReferencias($id_referencia){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_referencias, "id_general = $id_referencia");
    } 

    public function obntenerBeneficiario($id_beneficiario){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_beneficiario, "id_general = $id_beneficiario");
    } 

    public function obtenerTerceros($id_terceros){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_terceros_autorizados, "id_general = $id_terceros");
    } 

    public function obtenerExpuestas($id_expuestas){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_personas_expuestas, "id_general = $id_expuestas");
    } 

    public function obtenerDeclaracionJurada($id_declaracion){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_declaracion_jurada, "id_general = $id_declaracion");
    } 

    public function ontenerDocumentosAdjuntos($id_documentos_adjuntos){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_adjuntos, "id_general = $id_documentos_adjuntos");
    } 

    public function obtenerUsoInterno($id_uso_intterno){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_uso_interno, "id_general = $id_uso_intterno");
    } 

    public function actualizar_cc_cliente_solicitud($datos, $id){

        // principal

        $datos_generales = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fg_') === 0) {
                $datos_generales[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_generales, "id = $id", $datos_generales);

    }

    public function actualizar_cc_cliente($datos, $id){

        // principal

        $datos_generales = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fg_') === 0) {
                $datos_generales[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_generales, "id = $id", $datos_generales);

        // Portada

        $datos_expediente = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'exp_') === 0) {
                $datos_expediente[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_expediente, "id_general = $id", $datos_expediente);

        // ocupacion

        $datos_ocupacionales = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fo_') === 0) {
                $datos_ocupacionales[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_ocupacionales, "id_general = $id", $datos_ocupacionales);

        // declaracion 

        $datos_declaracion = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fd_') === 0) {
                $datos_declaracion[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_ccc_declaracion, "id_general = $id", $datos_declaracion);

        // referencias 

        $datos_referencias = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fr_') === 0) {
                $datos_referencias[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_referencias, "id_general = $id", $datos_referencias);

        // Beneficiario final 

        $datos_beneficiario = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fb_') === 0) {
                $datos_beneficiario[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_beneficiario, "id_general = $id", $datos_beneficiario);

        // Terceros autorizados

        $datos_terceros_autorizados = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'ft_') === 0) {
                $datos_terceros_autorizados[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_terceros_autorizados, "id_general = $id", $datos_terceros_autorizados);

        // Personas expuestas

        $datos_personas_expuestas = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fp_') === 0) {
                $datos_personas_expuestas[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_personas_expuestas, "id_general = $id", $datos_personas_expuestas);

        // Declaracion jurada

        $datos_cc_declaracion_jurada = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fdc_') === 0) {
                $datos_cc_declaracion_jurada[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_declaracion_jurada, "id_general = $id", $datos_cc_declaracion_jurada);

        // uso interno

        $datos_cc_uso_interno = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fui_') === 0) {
                $datos_cc_uso_interno[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_uso_interno, "id_general = $id", $datos_cc_uso_interno);
    
    }

    public function eliminar_cc_cliente($id){

        // principal
        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_generales, "id = $id");

        // Portada

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_expediente, "id_general = $id");

        // ocupacion

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_ocupacionales, "id_general = $id");

        // declaracion 

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_ccc_declaracion, "id_general = $id");

        // referencias 

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_referencias, "id_general = $id");

        // Beneficiario final 

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_beneficiario, "id_general = $id");

        // Terceros autorizados

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_terceros_autorizados, "id_general = $id");

        // Personas expuestas

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_personas_expuestas, "id_general = $id");

        // Declaracion jurada

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_declaracion_jurada, "id_general = $id");

        // uso interno

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_uso_interno, "id_general = $id");

        // adjuntos 

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_declaracion_jurada, "id_general = $id");

    }

    public function eliminar_adjuntos_gen_pn($id){
        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_adjuntos_general, " id = $id");
    }

}