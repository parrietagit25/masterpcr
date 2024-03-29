<?php 

session_start();

if (!isset($_SESSION["usuario"])) {
  header("Location: login.php");
  exit();
}

require_once("controladores/CrepositorioController.php");
$cRepositorioController = new Repositorio();

if (isset($_POST['subir_documento_repo'])) {
  $datos = $_POST;  
  unset($datos['subir_documento_repo']);
  $cRepositorioController->subir_archivos($datos);
  $alerta = 1;
}

if (isset($_POST['eliminar_documento_repo'])) {
  $datos = $_POST;  
  unset($datos['eliminar_documento_repo']);
  $where = " id = ".$datos['id'];
  $cRepositorioController->eliminar_repo($where);
  $alerta = 3;
}

if (isset($_GET["view"])) {
    $view = $_GET["view"];
    switch ($view) {
      case "ver_repo":
        $todos_registros = $cRepositorioController->obtener_repo();
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
  