<?php require_once '../../vendor/autoload.php'; ?>
<?php $modalDocu = 1; ?>
<?php require_once("../../controladores/CcclientePjController.php"); ?>
<?php $cCclienteController = new CcclienteController(); ?>
<?php $id = $_GET['id']; ?>
<?php 

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

// registros de los campos 

$expedienete = $cCclienteController->obtenerExpediente($id);
$generales = $cCclienteController->obtenerGenerales($id);
$declaracion = $cCclienteController->obtenerDeclaracionFuentes($id);
$representante_legal = $cCclienteController->obtenerRepresentanteLegal($id);
$propietario = $cCclienteController->obtenerPropietarios($id);
$declaracion_accionistas = $cCclienteController->obtenerDeclaracionAccionista($id);
$beneficiarioFinal = $cCclienteController->obntenerBeneficiarioFinal($id);
$tercerosAutorizados = $cCclienteController->obtenerTercerosAutorizados($id);
$expuestas = $cCclienteController->obtenerExpuestas($id);
$referencias = $cCclienteController->obtenerReferencias($id);
$declaracion_jurada = $cCclienteController->obtenerDeclaracionJurada($id);
$documentos_adjuntos = $cCclienteController->obntenerDocumentosAdjuntos($id);
$uso_interno = $cCclienteController->obtenerUsoInterno($id);
$declaracion_jurada_2 = $cCclienteController->obtenerDeclaracionJurada_2($id);
$junta_directiva_dignatarios = $cCclienteController->obtener_pj_directiva_dignatarios_id($id);
$obtener_registros_apot = $cCclienteController->obtener_registros_apot($id);
$obtener_registros_bfn = $cCclienteController->obtener_registros_bfn($id);
$obtener_registros_bfpj = $cCclienteController->obtener_registros_bfpj($id);
$obtener_registros_propietario = $cCclienteController->obtener_registros_propietario($id); 

$todos_adjuntos_juridicos = $cCclienteController->obtenerTodosAdjuntos($id);



$mpdf = new \Mpdf\Mpdf();
$link_imagen = "http://i.postimg.cc/Nj27DNw9/logonf.png";
$html = '<div class="container" style="font-size: 10px;">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table" style="width:100%; font-size: 10px;" border="0.5">
                        <tr>
                            <td>PANAMA CAR RENTAL, S.A.</td>
                            <td></td>
                            <td><img src="logoima.jpg" alt="Descripción de la imagen" width="250"></td>
                        </tr>
                        <tr>
                            <td>POLÍTICA CONOZCA A SU CLIENTE</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>FORMULARIO DE DEBIDA DILIGENCIA CLIENTE PERSONA NATURAL</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>CÓDIGO: PCR-CUMP-FORM01 </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>VERSIÓN 01-2021</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <br>';


            $html .= '<table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>Datos Generales</b></td>
                        </tr>
                        <tr>
                            <td><b>Razón solcial</b></td>
                            <td></td>
                            <td><b>Nombre Comercial</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Datos de inscripción</b></td>
                            <td></td>
                            <td><b>Tipo de persona</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Dirección Fisíca</b></td>
                            <td></td>
                            <td><b>País de constitución</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Residencia Fiscal</b></td>
                            <td></td>
                            <td><b>RUC & DV</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Teléfono</b></td>
                            <td></td>
                            <td><b>Apartado Postal</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Aviso de operación</b></td>
                            <td></td>   
                            <td><b>Licencia</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Entidad reguladora</b></td>
                            <td></td>
                            <td><b>Activida principal a la que se dedica</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Descripcion del negocio</b></td>
                            <td></td>
                            <td><b>Paises donde ofrece sus productos o servicios</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>E-mail</b></td>
                            <td></td>
                            <td><b>Cargo</b></td>
                            <td></td>
                        </tr>
                    </table>
                    <br>
        
                </div>
            </div>
        </div>';

$mpdf->WriteHTML($html);
$mpdf->Output();


