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
                            <td>
                                EXONERACION TOTAL DE RESPONSABILIDAD
                            </td>
                            <td style="text-align:right"><img src="logoima.jpg" alt="Descripción de la imagen" width="250"></td>
                        </tr>
                        <tr>
                            <td>
                                <b>
                                    A QUIEN CORRESPONDA:
                                <b>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    
                    <p>
                    Yo _'.$nombre_completo.'_ con cédula de identificación personal número:  _'.$cedula.'_ <br>
                    por este medio manifiesto que he  recibido conforme el vehículo, Marca _'.$marca.'_, modelo _'.$modelo.'_  <br>
                    con número de motor: _'.$motor.'_ número de chasis:_'.$chacis.'_ , con _______________ Km. Recorridos, y en  adelante  denominado <br>
                    <b>EL VEHÍCULO </b>, por  parte  de  la  empresa ___________________________  Sirva la misma para dejar constancia que a partir de la fecha, libero de <br>
                    <b>TODA RESPONSABILIDAD</b> civil penal o de cualquier otra índole, a la empresa <b>PANAMA CAR RENTAL, S.A.</b> y a  sus  representantes legales,  en especial la Respon- <br>
                    sabilidad  hacia   Terceros   derivada  de los accidentes de tránsito, en los que ha partir de la fecha me encuentre involucrado por la 
                    concucción o manejo <br> de <b>EL VEHÍCULO</b> ó inclusive las personas que yo le permita  La conducción de <b>EL VEHÍCULO</b>. <br>
                    
                    He aceptado recibir <b>EL VEHÍCULO</b> que aunque todavía no ha sido traspasado a mi persona ya que quisiera recibir <b>EL VEHÍCULO</b> el día de hoy.  
                    El traspaso de la propiedad de <b>EL VEHÍCULO</b> estará en trámite y seré yo quien tenga en todo momento, la posesión, uso, gose y disfrute de
                    <b>EL VEHÍCULO</b>, a pesar, de que permanezca inscrito a nombre de <b>PANAMÁ CAR RENTAL.</b> <br>

                    Me queda entendido, que una vez adquirido <b>EL VEHÍCULO</b> y yo esté en posesión del mismo, estará provisto del correspondiente seguro contra daños y personas <br>
                    con las coberturas, tal como lo exige el Reglamento Tránsito Vehicular de la República de Panama, en el Capítulo III que establece lo siguiente: <br>
                    <b>"A. DE LA RESPONSABILIDAD CIVIL POR ACCIDENTES DE TRÁNSITO</b><br>
                    <b>Artículo 236.</b> Los propietarios de vehículos están obligados a mantener vigente un seguro de responsabilidad civil que comprenda como mínimo:<br>
                    a. Responsabilidad por daño a la propiedad ajena por el monto mínimo de B/. 5,000.00.<br>
                    b. Responsabilidad de lesiones corporales de B/. 5,000.00 por persona y B/. 10,000.00, por accidente".<br>

                    Por lo tanto, es de mi conocimiento que <b>EL VENDEDOR</b> queda exento de cualquier tipo de responsabilidad que pudiera derivarse en el supuesto de que el automóvil 
                    que vende <br> circulase sin seguro, sirviendo el presente documento como el más eficaz medio para la transmisión de la propiedad a <b>EL COMPRADOR</b>, con independencia del 
                    período de tiempo <br> que transcurra hasta que se hubiese completado la transferencia. <br>


                    <table class="table" style="width:90%; font-size: 10px;">
                        <tr>
                            <td colspan="2">
                                DOCUMENTOS DE PROPIETARIOS DEL AUTO:
                            </td>
                            <td colspan="2">
                                EQUIPO ADICIONAL:
                            </td>
                        </tr>
                        <tr>
                            <td>
                                REGISTRO ÚNICO VEHICULAR:
                            </td>
                            <td>
                                <img src="huella.png" width="20">
                            </td>
                            <td>
                                RADIO:
                            </td>
                            <td>
                                <img src="huella.png" width="20">
                            </td>
                        </tr>

                        <tr>
                            <td>
                            RECIBO DE TRASPASO:
                            </td>
                            <td>
                                <img src="huella.png" width="20">
                            </td>
                            <td>
                            SEGUNDA LLAVE:
                            </td>
                            <td>
                                <img src="huella.png" width="20">
                            </td>
                        </tr>
                        <tr>
                            <td>
                            PLACA ( LATA ): 
                            </td>
                            <td>
                                <img src="huella.png" width="20">
                            </td>
                            <td>
                            ALFOMBRAS:
                            </td>
                            <td>
                                <img src="huella.png" width="20">
                            </td>
                        </tr>
                        <tr>
                            <td>
                            RECIBO DE PLACA: 
                            </td>
                            <td>
                                <img src="huella.png" width="20">
                            </td>
                            <td>
                              
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ÚLTIMO REVISADO: 
                            </td>
                            <td>
                                <img src="huella.png" width="20">
                            </td>
                            <td>
                               
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <b>HERRAMIENTAS:</b>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            GATO, PIPA, PALANCA
                            </td>
                            <td>
                                <img src="huella.png" width="20">
                            </td>
                            <td>
                            PRUEBA DE MANEJO
                            </td>
                            <td>
                                <img src="huella.png" width="20">
                            </td>
                        </tr>
                    </table>
                    <br>

                    <b>
                    Nota: <br> 
                    Mediante el presente formulario certifico que he recibido el vehículo descrito, en este documento, a mi entera satisfacción y queda claro que la garantía prestada por Automarket solo será bloque de <br> 
                    motor y transmisión según el contrato de compra y venta No. ____________ firmado por ambas partes.  Adicionalmente me comprometo a realizar el mantenimiento cada 5,000 kilometros o cada 4 <br> 
                    meses, lo que ocurra primero.
                    </b>

                    <br>
                    <br>
                    Atentamente, <br>
                    
                    <table class="table" style="width:90%; font-size: 10px;">
                        <tr>
                            <td>
                                ______________________________________________
                            </td>
                            <td>
                                ______________________________________________
                            </td>
                            <td>
                                _______________________________________________
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">
                                Firma
                            </td>
                            <td style="text-align: center;">
                                Cédula		
                            </td>
                            <td style="text-align: center;">
                                Fecha	
                            </td>
                        </tr>
                    </table>

                    </p>
                    <br>
                    <br>
                    <table class="table" style="width:90%; font-size: 10px; text-align:center;">
                        <tr>
                            <td style="background-color:#5467DE;">AVISO LEGAL</td>
                        </tr>
                        <tr>
                            <td>AUTOMARKET SEMINUEVOS SE REFIERE A LA MARCA BAJO LA CUAL PANAMA CAR RENTAL, S.A. OFRECE SUS PRODUCTOS Y SERVICIOS. EL NOMBRE “AUTOMARKET SEMINUEVOS” Y SU LOGOTIPO ES UNA MARCA REGISTRADA <br> DE PROPIEDAD DE SEMINUEVOS, S.A. LA SOCIEDAD SEMINUEVOS, S.A. NO TIENE RELACIÓN COMERCIAL Y/O CONTRACTUAL NI PRESTA SERVICIOS A LOS CLIENTES DE PANAMA CAR RENTAL, S.A.  </td>
                        </tr>
                    </table>

                    </div>
                </div>
            </div>';

$mpdf->WriteHTML($html);
$mpdf->Output();
