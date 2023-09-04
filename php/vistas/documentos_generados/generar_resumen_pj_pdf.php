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

                    <table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>DECLARACIÓN DE FUENTES Y ORIGEN DE LOS FONDOS.</b></td>
                        </tr>
                        <tr>
                            <td><b>Actividaad principal</b></td>
                            <td></td>
                            <td><b>Actividad secundaria</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Otras fuentes</b></td>
                            <td></td>
                            <td><b>Otras fuentes 2</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Limite de compra</b></td>
                            <td></td>
                            <td><b>Forma de pago</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Método de pago</b></td>
                            <td></td>
                            <td><b>Método de pago 2</b></td>
                            <td></td>
                        </tr>
                    </table>
                    <br>

                    <table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>DATOS DEL REPRESENTANTE LEGAL.</b></td>
                        </tr>
                        <tr>
                            <td><b>Nombre Completo</b></td>
                            <td></td>
                            <td><b>Cedula / N# Pasaporte.</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Estado Civil</b></td>
                            <td></td>
                            <td><b>Nacionalidad</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Fecha de nacimiento</b></td>
                            <td></td>
                            <td><b>Dirección</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Correo Electronico</b></td>
                            <td></td>
                            <td><b>Profesión.</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Lugar de trabajo.</b></td>
                            <td></td>
                            <td><b>Teléfono.</b></td>
                            <td></td>
                        </tr>
                    </table>
                    <br>

                    <table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="6" style="background-color:blue; color: white; text-align: center;"><b>JUNTA DIRECTIVA Y DIGNATARIOS..</b></td>
                        </tr>
                        <tr>
                            <td><b>Nombre Completo</b></td>
                            <td>Cargo</td>
                            <td>Nacionalidad</td>
                            <td>I.D.</td>
                            <td>Correo</td>
                            <td>Dirección</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <br>

                    <table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="6" style="background-color:blue; color: white; text-align: center;"><b>APODERADOS.</b></td>
                        </tr>
                        <tr>
                            <td>Nombre Completo</td>
                            <td>Cargo</td>
                            <td>Nacionalidad</td>
                            <td>I.D.</td>
                            <td>Correo</td>
                            <td>Dirección</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <br>

                    <table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>PROPIETARIOS.</b></td>
                        </tr>
                        <tr>
                            <td>¿ESTA EMPRESA ES PÚBLICA O PRIVADA?</td>
                            <td></td>
                            <td>¿ESTA EMPRESA LICITA CON EL ESTADO?</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>País</td>
                            <td></td>
                            <td>¿LAS ACCIONES DE ESTA EMPRESA COTIZAN EN UNA BOLSA DE VALORES?</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>SI LA RESPUESTA ES AFIRMATIVA INDIQUE:</td>
                            <td></td>
                            <td>NOMBRE DE LA BOLSA DE VALORES Y TICKER:</td>
                            <td></td>
                        </tr>
                    </table>
                    <br>

                    <table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>DECLARACIÓN DE ACCIONISTAS.</b></td>
                        </tr>
                        <tr>
                            <td>Nombre del accionista(Natural o Jurídica).</td>
                            <td></td>
                            <td>Participación Accionarias</td>
                            <td></td>
                        </tr>
                    </table>
                    <br> 
                    
                    <table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>BENEFICIARIO FINAL</b></td>
                        </tr>
                        <tr>
                            <td><b>INDIQUE SI EL AUTO SERÁ TRASPASADO A NOMBRE DEL CLIENTE O DE UN TERCERO. ?</b></td>
                            <td></td>
                            <td><b>EN ESTE ÚLTIMO CASO, COMPLETE CON LOS DATOS DEL BENEFICIARIO FINAL DE LA TRANSACCIÓN. DE SER PERSONA JURÍDICA, UTILIZAR EL FORMULARIO DE DEBIDA DILIGENCIA PERSONA JURÍDICA PCR-CUMP-FORM02 Y LA DECLARACIÓN JURADA DE BENEFICIARIOS FINALES DE LAS PERSONAS JURÍDICAS.</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Primer Nombre</b></td>
                            <td></td>
                            <td><b>Segundo Nombre</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Apellido Paterno</b></td>
                            <td></td>
                            <td><b>Apellido Materno</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Apellido de Casada</b></td>
                            <td></td>
                            <td><b>País de Naciemiento</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Fecha Nacimiento</b></td>
                            <td></td>
                            <td><b>Género</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Nacionalidad</b></td>
                            <td></td>   
                            <td><b>Estado Civil</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Cédula/N# Pasaporte</b></td>
                            <td></td>
                            <td><b>País de Residencia</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Dirección Residencial</b></td>
                            <td></td>
                            <td><b>País de Residencia Fiscal</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Correo Electrónico</b></td>
                            <td></td>
                            <td><b>Teléfono Residencial</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Teléfono Móvil</b></td>
                            <td></td>
                            <td><b>Profesión</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Ocupación</b></td>
                            <td></td>
                            <td><b>Lugar de trabajo</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Dirección de trabajo</b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <br> '; 

                   $html.=' <table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>TERCEROS AUTORIZADOS</b></td>
                        </tr>
                        <tr>
                            <td><b>RELACIÓN CON EL CLIENTE.</b></td>
                            <td></td>
                            <td><b>Primer Nombre</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Segundo Nombre</b></td>
                            <td></td>
                            <td><b>Apellido Paterno</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Apellido Materno</b></td>
                            <td></td>
                            <td><b>Apellido de Casada</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>País de Naciemiento</b></td>
                            <td></td>
                            <td><b>Fecha Nacimiento</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Género</b></td>
                            <td></td>
                            <td><b>Nacionalidad</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Estado Civil</b></td>
                            <td></td>   
                            <td><b>Cédula/N# Pasaporte</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>País de Residencia</b></td>
                            <td></td>
                            <td><b>Dirección Residencial</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>País de Residencia Fiscal</b></td>
                            <td></td>
                            <td><b>Correo Electrónico</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><bTeléfono Residencial</b></td>
                            <td></td>
                            <td><b>Teléfono Móvil</b></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td><b>Profesión</b></td>
                            <td></td>
                            <td><b>Ocupación</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Lugar de trabajo</b></td>
                            <td></td>
                            <td><b>Dirección de trabajo</b></td>
                            <td></td>
                        </tr>
                    </table>
                    <br> 

                    <table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>PERSONAS EXPUESTAS POLÍTICAMENTE</b></td>
                        </tr>
                        <tr>
                            <td><b>¿ES EL REPRESENTANTE LEGAL, APODERADO, DIRECTOR O DIGNATARIO UN PEP, FAMILIAR CERCANO O ESTRECHO COLABORADOR DE UN PEP?</b></td>
                            <td></td>
                            <td><b>Nombre completo</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Cargo actual</b></td>
                            <td></td>
                            <td><b>Fecha</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Cargo Anterior</b></td>
                            <td></td>
                            <td><b>Fecha anterior</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><bComentarios</b></td>
                            <td></td>
                            <td><b>¿ES EL BENEFICIARIO FINAL UN PEP, FAMILIAR CERCANO O ESTRECHO COLABORADOR DE UN PEP?</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Nombre completo</b></td>
                            <td></td>
                            <td><b>Cargo actual</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Fecha</b></td>
                            <td></td>   
                            <td><b>Cargo Anterior</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Fecha anterior</b></td>
                            <td></td>
                            <td><b>Comentarios</b></td>
                            <td></td>
                        </tr>
                    </table>
                    <br>

                    <table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>REFERENCIAS</b></td>
                        </tr>
                        <tr>
                            <td><b>Nombre o razón social</b></td>
                            <td></td>
                            <td><b>Actividad</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Relacón</b></td>
                            <td></td>
                            <td><b>Teléfono</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Correo Electrónico</b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                       
                    </table>
                    <br>
                    <br>

                        <table class="table" style="width:100%; font-size: 10px;">
                            <tr>
                                <td>____________________________________________</td>
                                <td>____________________________________________</td>
                                <td>____________________________________________</td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">Firma del cliente</td>
                                <td style="text-align: center;">Firma del Ejecutivo de ventas</td>
                                <td style="text-align: center;">Firma del encargado de la sucursal</td>
                            </tr>
                        </table>

                </div>
            </div>
        </div>';

$mpdf->WriteHTML($html);
$mpdf->Output();


