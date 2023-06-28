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

if (isset($_GET["view"])) {
    $view = $_GET["view"];
    switch ($view) {
      case "ver_repo":
        require_once("vistas/ver_repositorio.php");
        break;
      case "ver_clientes_pj_historico":
        require_once("vistas/ver_cc_form_juridicas_historico.php");
        break;
      default:
        require_once("vistas/ver_cc_form_juridicas.php");
        break;
    }
  } else {
    require_once("vistas/cc_persona_juridica.php");
}
  