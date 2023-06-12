<?php 

session_start();

if (!isset($_SESSION["usuario"])) {
  header("Location: login.php");
  exit();
}

require_once("controladores/CcClienteController.php");
$cCclienteController = new CcclienteController();

if (isset($_POST['registro_cc_cliente'])) {
  $datos = $_POST;  
  unset($datos['registro_cc_cliente']);
  $id_general = $cCclienteController->agregar_cc_cliente($datos);
  $cCclienteController->subir_archivos($_FILES, $id_general);
  $alerta = 1;
}

if (isset($_POST['actualizar_cc_cliente'])) {
  $datos = $_POST;  
  unset($datos['actualizar_cc_cliente']);
  $id_general = $_POST['id_general'];
  $cCclienteController->actualizar_cc_cliente($datos, $id_general);
  $cCclienteController->subir_archivos($_FILES, $id_general);
  $alerta = 2;
}

if (isset($_POST['eliminar_cc_cliente'])) {
  $datos = $_POST;  
  unset($datos['eliminar_cc_cliente']);
  $id_general = $_POST['id_eliminar'];
  $cCclienteController->eliminar_cc_cliente($id_general);
  //$cCclienteController->subir_archivos($_FILES, $id_general);
  $alerta = 3;
}

if (isset($_POST['registrar_adjunto'])) {
  $cCclienteController->subir_archivos($_FILES, $_POST['id_general']);
  $alerta = 2;
}

if (isset($_POST['solicitar_aprobacion'])) {
  $datos = [];
  $id_general = $_POST['id_general'];
  $datos['fg_stat'] = 2;
  $cCclienteController->actualizar_cc_cliente_solicitud($datos, $id_general);
  $alerta = 2;
}

if (isset($_GET["view"])) {
    $view = $_GET["view"];
  
    switch ($view) {
      case "ver_clientes":
        $todos_registros_cc = $cCclienteController->obtenerRegistroClientes();
        require_once("vistas/ver_cc_form.php");
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
    require_once("vistas/principal.php");
  }
  