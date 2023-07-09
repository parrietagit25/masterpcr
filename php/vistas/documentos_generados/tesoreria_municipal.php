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
                            <td style="text-align:left"><img src="logoima.jpg" alt="Descripción de la imagen" width="250"></td>
                            <td>
                                Apartado 87-1239-Zona 7.<br>
                                Panamá Rep. de Panamá <br>	
                                Teléfono 223-6271 / 2263800<br>
                                Fax 265-4463
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Señores<br>
                                TESORIA MUNICIPAL PANAMA.<br>						
                                MUNICIPIO DE PANAMA
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    <br>
                    A quien Concierna: <br>

                    <p>
                    Por este medio  yo, _'.$nombre_completo.'_, con cédula de identidad _'.$cedula.'_ <br> 
                    personal número _'.$telefono.'_, autorizo a ___________________________, <br> 
                    con cédula de identidad personal número:_______________________, realizar traspaso por <br> 
                    venta del siguiente vehículo: <br><br>

                    <table class="table" style="width:90%; font-size: 10px;">
                        <tr>
                            <td>MARCA:</td>
                            <td>_'.$marca.'_</td>
                        </tr>
                        <tr>
                            <td>MODELO:</td>
                            <td>_'.$modelo.'_</td>
                        </tr>
                        <tr>
                            <td>TIPO:</td>
                            <td>___________________________</td>
                        </tr>
                        <tr>
                            <td>AÑO:</td>
                            <td>__'.$anio.'__</td>
                        </tr>
                        <tr>
                            <td>PLACA:</td>
                            <td>__'.$placa.'__</td>
                        </tr>
                        <tr>
                            <td>MOTOR:</td>
                            <td>__'.$motor.'__</td>
                        </tr>
                        <tr>
                            <td>CHASIS:</td>
                            <td>__'.$chacis.'__</td>
                        </tr>
                        <tr>
                            <td>COLOR:</td>
                            <td>__'.$color.'__</td>
                        </tr>
                    </table>
                    <br>
                    <p>Sin otro Particular,</p>

                    <br>
                    <br>
                    Atentamente, <br>
                    x________________________________________________ 
                    <br>
                    <br>
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
