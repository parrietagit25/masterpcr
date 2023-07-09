<?php require_once '../../vendor/autoload.php'; ?>
<?php $modalDocu = 1; ?>
<?php require_once("../../controladores/CcclientePjController.php"); ?>
<?php $cCclienteController = new CcclienteController(); ?>
<?php $id = $_GET['id']; ?>
<?php $expedienete = $cCclienteController->obtenerExpediente($id); 
$generales = $cCclienteController->obtenerGenerales($id); /*
$ocupacionales = $cCclienteController->obtenerOcupacionales($id);
$declaracion = $cCclienteController->obtenerDeclaracion($id);
$referencias = $cCclienteController->obtenerReferencias($id);
$beneficiario = $cCclienteController->obntenerBeneficiario($id);
$terceros = $cCclienteController->obtenerTerceros($id);
$expuestas = $cCclienteController->obtenerExpuestas($id);
$declaracion_jurada = $cCclienteController->obtenerDeclaracionJurada($id);
$documentos_adjuntos = $cCclienteController->ontenerDocumentosAdjuntos($id);
$uso_interno = $cCclienteController->obtenerUsoInterno($id); **/

foreach ($generales as $key => $value) {
    $pjgn_ruc_dv = $value['pjgn_ruc_dv'];
    $pjgn_direccion_fisica = $value['pjgn_direccion_fisica'];
    $pjgn_telefono = $value['pjgn_telefono'];
    $pjgn_razon_social = $value['pjgn_razon_social'];
    $pjgn_pais_constitucion = $value['pjgn_pais_constitucion'];
 }

 foreach ($expedienete as $key => $value) { 
    $cliente = $value["pjexp_cliente"];
    $marca = $value["pjexp_marca"];
    $modelo = $value["pjexp_modelo"];
    $anio = $value["pjexp_anio"];
    $placa = $value["pjexp_placa"];
    $chacis = $value["pjexp_chasis"];
    $motor = $value["pjexp_motor"];
    $color = $value["pjexp_color"];
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
                    Por este medio  yo, _'.$cliente.'_, con cédula de identidad __________________ <br> 
                    personal número _'.$pjgn_telefono.'_, autorizo a ___________________________, <br> 
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

                    </div>
                </div>
            </div>';

$mpdf->WriteHTML($html);
$mpdf->Output();
