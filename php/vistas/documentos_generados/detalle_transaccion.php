<?php //session_start(); ?>
<?php require_once '../../vendor/autoload.php'; ?>
<?php $modalDocu = 1; ?>
<?php require_once("../../controladores/CcClienteController.php"); ?>
<?php $cCclienteController = new CcclienteController(); ?>
<?php $id = $_GET['id']; ?>
<?php $expedienete = $cCclienteController->obtenerExpediente($id); 
$generales = $cCclienteController->obtenerGenerales($id);
$ocupacionales = $cCclienteController->obtenerOcupacionales($id);
$declaracion = $cCclienteController->obtenerDeclaracion($id);
$referencias = $cCclienteController->obtenerReferencias($id);
$beneficiario = $cCclienteController->obntenerBeneficiario($id);
$terceros = $cCclienteController->obtenerTerceros($id);
$expuestas = $cCclienteController->obtenerExpuestas($id);
$declaracion_jurada = $cCclienteController->obtenerDeclaracionJurada($id);
$documentos_adjuntos = $cCclienteController->ontenerDocumentosAdjuntos($id);
$uso_interno = $cCclienteController->obtenerUsoInterno($id);

foreach ($generales as $key => $value) {
    $cedula = $value['fg_cedula'];
    $direccion = $value['fg_direccion_residencial'];
    $telefono = $value['fg_telefono_movil'];
    $nombre_completo = $value['fg_primer_nombre'].' '.$value['fg_segundo_nombre'].' '.$value['fg_apellido_paterno'].' '.$value['fg_apellido_materno'];
    $pais_nacimineto = $value['fg_pais_nacimiento'];
 }

 foreach ($expedienete as $key => $value) { 
    $cliente = $value["exp_cliente"];
    $marca = $value["exp_marca"];
    $modelo = $value["exp_modelo"];
    $anio = $value["exp_anio"];
    $placa = $value["exp_placa"];
    $chacis = $value["exp_chasis"];
    $motor = $value["exp_motor"];
    $color = $value["exp_color"];
 }

 $obtener_pais_nacimiento = $cCclienteController->obtener_pais_id($pais_nacimineto);

    foreach ($obtener_pais_nacimiento as $key => $value) {
        $pais_nac = $value['nombre'];
    }

$mpdf = new \Mpdf\Mpdf();
$link_imagen = "http://i.postimg.cc/Nj27DNw9/logonf.png";
/*$mpdf->WriteHTML('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">'); */
$html = '<div class="container" style="font-size: 10px;">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table" style="width:90%; font-size: 10px;">
                        <tr>
                            <td style="text-align:right"><img src="logoima.jpg" alt="Descripción de la imagen" width="250"></td>
                        </tr>
                    </table>
                    <br>
                    <h3>DETALLE DE TRANSACCION DE PAGO</h3>

                    CLIENTE:_'.$nombre_completo.'_ MARCA:_'.$marca.'_ <br>
                    MODELO:_'.$modelo.'_ AÑO: __'.$anio.'__ PLACA: __'.$placa.'__ CÓDIGO: _________________ <br>
                    CHASIS:__'.$chacis.'__ MOTOR:__'.$motor.'__ <br>
                    <br>
                    Número de factura:______________________________________ <br>
                    Monto: _______________________________________ <br>
                    <br>

                    <table class="table" style="width:40%; font-size: 10px; position:absolute; left:50%; margin-left:33%; " border="1">
                        <tr>
                            <td style="text-align:center">Formato de pago</td>
                        </tr>
                        <tr>
                            <td>
                                |
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table class="table" style="width:100%; font-size: 12px;">
                        <tr>
                            <td>Recibo N°:</td>
                            <td>___________________________</td>
                            <td>Monto:</td>
                            <td>___________________________</td>
                            <td>Forma de Pago</td>
                            <td>___________________________</td>
                        </tr>
                        <tr>
                            <td>|</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Recibo N°:</td>
                            <td>___________________________</td>
                            <td>Monto:</td>
                            <td>___________________________</td>
                            <td>Forma de Pago</td>
                            <td>___________________________</td>
                        </tr>
                        <tr>
                            <td>|</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Recibo N°:</td>
                            <td>__________________</td>
                            <td>Monto:</td>
                            <td>__________________</td>
                            <td>Forma de Pago</td>
                            <td>__________________</td>
                        </tr>
                        <tr>
                            <td>Recibo N°:</td>
                            <td>__________________</td>
                            <td>Monto:</td>
                            <td>__________________</td>
                            <td>Forma de Pago</td>
                            <td>__________________</td>
                        </tr>
                        <tr>
                            <td>Recibo N°:</td>
                            <td>__________________</td>
                            <td>Monto:</td>
                            <td>__________________</td>
                            <td>Forma de Pago</td>
                            <td>__________________</td>
                        </tr>
                        <tr>
                            <td>Recibo N°:</td>
                            <td>__________________</td>
                            <td>Monto:</td>
                            <td>__________________</td>
                            <td>Forma de Pago</td>
                            <td>__________________</td>
                        </tr>
                        <tr>
                            <td>Carta Promesa:</td>
                            <td>__________________</td>
                            <td>Monto:</td>
                            <td>__________________</td>
                            <td>Banco</td>
                            <td>__________________</td>
                        </tr>
                    </table>
                    <br>
                    Auto Trade In  (N° Recibo):	______________________ Monto: __________________________ <br>
                    <table class="table" style="width:60%; font-size: 10px;">
                        <tr>
                            <td style="text-align:right">Total de Pagos</td>
                            <td>B/. ________________________________</td>
                        </tr>
                    </table>
                    <br>
                    <b>NOTA:</b> El monto total de pagos debe ser igual al valor de la factura <br>
                    
                    <table class="table" style="width:90%; font-size: 10px;" border="1">
                        <tr>
                            <td style="text-align:left">
                                <b>OBSERVACIÓN ADICIONAL:</b>________________________________________________________________________ <br>
                                <b>Recibo N°:</b>___________________________ <b>CANCELA TRASPASO</b>___________________________________<b>Monto</b><br>
                                ________________________________________________________________________________________________________<br>
                                ________________________________________________________________________________________________________<br>
                                ___________________________________________________________________________________________________<b>Total</b><br>
                            </td>
                            <td border="1">
                            ______________________<br>
                            B/.
                            </td>
                        </tr>
                    </table>
                    
                    <br>

                    <p>
                        <b>Vendedor:</b> _____________________________ <b>Tráfico:</b> ______________________________________ <br>
                        <b>Encargado de Sucursal:</b>_____________________________________ <b>Contabilidad:</b>____________________________________
                    </p>
                    
                    <table class="table" style="width:90%; font-size: 10px; text-align:center;">
                        <tr>
                            <td style="background-color:#5467DE;">AVISO LEGAL</td>
                        </tr>
                        <tr>
                            <td>
                            AUTOMARKET SEMINUEVOS SE REFIERE A LA MARCA BAJO LA CUAL PANAMA CAR RENTAL, S.A. OFRECE SUS PRODUCTOS Y SERVICIOS. EL NOMBRE “AUTOMARKET SEMINUEVOS” Y SU LOGOTIPO ES UNA MARCA REGISTRADA DE PROPIEDAD DE SEMINUEVOS, S.A. LA SOCIEDAD SEMINUEVOS, S.A. NO TIENE RELACIÓN COMERCIAL Y/O CONTRACTUAL NI PRESTA SERVICIOS A LOS CLIENTES DE PANAMA CAR RENTAL, S.A.
                            </td>
                        </tr>
                    </table>

                    </div>
                </div>
            </div>';

$mpdf->WriteHTML($html);
$mpdf->Output();
