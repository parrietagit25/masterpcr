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
 }

 foreach ($expedienete as $key => $value) {
    $placa = $value['exp_placa'];
 }

 // obtener la fecha en el formato que tiene el documento

$timestamp = time();
$fecha_formateada = date("j \d\e F \d\e Y", $timestamp);
$meses_ingles = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
$meses_espanol = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");
$fecha_formateada = str_replace($meses_ingles, $meses_espanol, $fecha_formateada);

$mpdf = new \Mpdf\Mpdf();
$link_imagen = "http://i.postimg.cc/Nj27DNw9/logonf.png";
/*$mpdf->WriteHTML('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">'); */
$html = '<div class="container" style="font-size: 12px;">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table" style="width:100%; font-size: 12px;">
                        <tr>
                            <td style="text-align:left"><img src="logogrupopcr.png" alt="logo grupo pcr" width="200"></td>
                            <td style="text-align:right"><img src="logoima.jpg" alt="logo automarket" width="200"></td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td style="text-align:right">
                                Panamá, '.$fecha_formateada.'
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>

                    <br>
                    <br>
                    <br>
                    <br>

                    <table class="table" style="width:100%; font-size: 12px;">
                        <tr>
                            <td>
                                Señores<br>
                                PANAMÁ CAR RENTAL, S.A.<br>						
                                Ciudad de Panamá
                            </td>
                            <td></td>
                        </tr>
                    </table> 
                    
                    <br>
                    <br>
                    <br>
                    <br>

                    Estimados señores: <br>
                    Por este medio yo ____'.$nombre_completo.'___ con cédula/pasaporte número <br>
                    __'.$cedula.'__ doy fé que esta es mi firma realizada con mi puño y <br> 
                    letra para realizar todos los tramites concernientes a la compra del vehículo placa: '.$placa.' 
                    <br>
                    <br>
                    <br>
                    <br>
                    <table class="table" style="width:100%; font-size: 12px; text-align: center;">
                        <tr style="text-align: center;">
                            <td style="text-align:left">______________________</td>
                            <td style="text-align:right">______________________</td>
                        </tr>
                        <tr style="text-align: center;">
                            <td style="text-align:left">Firma y cédula del cliente</td>
                            <td style="text-align:right">Huella Dactilar del cliente</td>
                        </tr>
                    </table>
                    
                    <br>
                    <br>
                    <br>
                    <br>

                    En la ciudad de Panamá, yo ____________________, con cédula o pasaporte de identidad personal número <br>
                    ____________________ doy fé que la firma que antecede en este documento fue realizada por la persona arriba <br>
                    descrita, en mi presencia.

                    <br>
                    <br>
                    <br>
                    <br>

                    <table class="table" style="width:100%; font-size: 12px; text-align: center;">
                        <tr style="text-align: center;">
                            <td style="text-align:left">______________________</td>
                            <td style="text-align:right">______________________</td>
                        </tr>
                        <tr style="text-align: center;">
                            <td style="text-align:left">Firma y cédula por Panamá<br> Car Rental S.A.</td>
                            <td style="text-align:right">Huella Dactilar por Panamá<br> Car Rental S.A.</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>';

$mpdf->WriteHTML($html);
$mpdf->Output();
