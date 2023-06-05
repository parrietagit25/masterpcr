<?php 

session_start();

if (!isset($_SESSION["usuario"])) {
  header("Location: login.php");
  exit();
}

require_once("controladores/CcclientePjController.php");
$cCclienteController = new CcclienteController();

if (isset($_POST['registro_cc_pj'])) {
  $datos = $_POST;  
  unset($datos['registro_cc_pj']);
  $id_general = $cCclienteController->agregar_cc_cliente($datos);
  $cCclienteController->subir_archivos($_FILES, $id_general);
  $cCclienteController->eliminar_tablas_temp(session_id());
  $alerta = 1;
}

if (isset($_POST['actualizar_cc_pj'])) {
  $datos = $_POST;  
  unset($datos['actualizar_cc_pj']);
  $id_general = $_POST['id_general'];
  $cCclienteController->actualizar_cc_cliente($datos, $id_general);
  $cCclienteController->subir_archivos($_FILES, $id_general);
  $alerta = 2;
}

if (isset($_POST['eliminar_cc_cliente_pj'])) {
  $id_general = $_POST['id_eliminar'];
  $cCclienteController->eliminar_cc_cliente($id_general);
  $alerta = 3;
}

if (isset($_POST['registrar_adjunto'])) {
  $cCclienteController->subir_archivos($_FILES, $id_general);
  $alerta = 2;
}

if (isset($_GET["view"])) {
    $view = $_GET["view"];
  
    switch ($view) {
      case "ver_cc_persona_juridicas":
        $todos_registros_cc_pj = $cCclienteController->obtenerRegistroClientesJuridicos();
        $paises = $cCclienteController->obtener_pais();
        $genero = $cCclienteController->obtener_genero();
        $profesion = $cCclienteController->obtener_profesion();
        $tipo_persona = $cCclienteController->obtener_tipo_persona();
        $sector_economico = $cCclienteController->obtener_sector_economico();
        require_once("vistas/ver_cc_form_juridicas.php");
        break;
      case "editar":
        require_once("vistas/editar_usuario.php");
        break;
      default:
        require_once("vistas/usuarios.php");
        break;
    }

  } else {
    $paises = $cCclienteController->obtener_pais();
    $genero = $cCclienteController->obtener_genero();
    $estado_civil = $cCclienteController->obtener_estado_civil();
    $profesion = $cCclienteController->obtener_profesion();
    $actividad_principal = $cCclienteController->obtener_actividad_principal();
    $actividad_otras = $cCclienteController->obtener_actividad_otras();
    $forma_pago = $cCclienteController->obtener_forma_pago();
    $limite = $cCclienteController->obtener_limite();
    $motodo_pago = $cCclienteController->obtener_motodo_pago();
    $profesion_personas_expuestas = $cCclienteController->obtener_profesion_personas_expuestas();
    $tipo_persona = $cCclienteController->obtener_tipo_persona();
    $sector_economico = $cCclienteController->obtener_sector_economico();
    $obtener_registros_temp = $cCclienteController->obtener_pj_generales_bf_temp(session_id()); 
    $obtener_registros_temp_bf = $cCclienteController->obtener_pj_beneficiarios_finales(session_id());
    $obtener_registros_temp_propietario = $cCclienteController->obtener_propietarios_beneficiarios_finales(session_id());
    $obtener_registros_temp_ddt = $cCclienteController->obtener_pj_directiva_dignatarios_temp(session_id());  
    $obtener_registros_temp_apot = $cCclienteController->obtener_pj_apoderados_temp(session_id()); 
    require_once("vistas/cc_persona_juridica.php");
  }
  