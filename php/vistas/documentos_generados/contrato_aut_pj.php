<?php require_once '../../vendor/autoload.php'; ?>
<?php $modalDocu = 1; ?>
<?php require_once("../../controladores/CcclientePjController.php"); ?>
<?php $cCclienteController = new CcclienteController(); ?>
<?php $id = $_GET['id']; ?>
<?php $expedienete = $cCclienteController->obtenerExpediente($id); 
$generales = $cCclienteController->obtenerGenerales($id);
/**$ocupacionales = $cCclienteController->obtenerOcupacionales($id);
$declaracion = $cCclienteController->obtenerDeclaracion($id);
$referencias = $cCclienteController->obtenerReferencias($id);
$beneficiario = $cCclienteController->obntenerBeneficiario($id);
$terceros = $cCclienteController->obtenerTerceros($id);
$expuestas = $cCclienteController->obtenerExpuestas($id);
$declaracion_jurada = $cCclienteController->obtenerDeclaracionJurada($id);
$documentos_adjuntos = $cCclienteController->ontenerDocumentosAdjuntos($id);
$uso_interno = $cCclienteController->obtenerUsoInterno($id);*/

$mpdf = new \Mpdf\Mpdf();
$link_imagen = "http://i.postimg.cc/Nj27DNw9/logonf.png";
/*$mpdf->WriteHTML('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">'); */

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


$html = '<div class="container" style="font-size: 10px;">
            <div class="row">
                <div class="col-sm-12">
                    
                    <h4>CONTRATO COMO ESTÁ Y DONDE ESTÁ</h4>
                    <p>
                    Entre  los  siguientes  suscritos a saber: <b>'.$cliente.'</b>(coprador) en adelante <b>EL COMPRADOR</b>, con RUC y DV<br> 
                    con documento de identidad personal No. __________________ y por la otra parte PANAMÁ CAR RENTAL, S.A. <br>
                    en adelante <b>EL VENDEDOR</b>, con RUC '.$pjgn_ruc_dv.',  representada en este acto por el(la) sr(a)  <b>RICARDO DE LA GUARDIA</b>, <br>
                    varón, mayor de edad, panameño, con cédula de identidad  personal No. 8-738-1347,  acuerdan celebrar un contrato de compraventa <br>
                    de vehículo sujeto a las cláusulas siguientes: <br>
                    
                    <b>PRIMERA: EL VENDEDOR</b> vende a <b>EL COMPRADOR</b> el vehículo cuyas especificaciones se detallan a continuación:
                    ';
            
                $html .= '<table class="table" style="width:90%; font-size: 10px; text-align:center;">
                            <tbody>
                                <tr>
                                    <td><b>MARCA</b></td>
                                    <td>'.$marca.'</td>
                                    <td><b>MODELO</b></td>
                                    <td>'.$modelo.'</td>
                                </tr>
                                <tr>
                                    <td><b>AÑO</b></td>
                                    <td>'.$anio.'</td>
                                    <td><b>Kilometraje</b></td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td><b>PLACA</b></td>
                                    <td>'.$placa.'</td>
                                    <td><b>MOTOR</b></td>
                                    <td>'.$motor.'</td>
                                </tr>
                                <tr>
                                    <td><b>CHASIS</b></td>
                                    <td>'.$chacis.'</td>
                                    <td><b>COLOR</b></td>
                                    <td>'.$color.'</td>
                                </tr>
                            </tbody>
                        </table>';
            
            $html .='
                    <br>
                    <br>
                    <b>SEGUNDA: EL COMPRADOR</b> entiende que la empresa <b>PANAMA CAR RENTAL S.A</b> esta vendiendo el auto <br> 
                    <b>Como está y Donde está,</b> <br>

                    <b>TERCERA:</b> Por ser un vehículo vendido <b>Como Está y Donde Está, El COMPRADOR</b> entiende que no goza <br> 
                    de ningún tipo de garantía brindada por la empresa <b>PANAMA CAR RENTAL S.A.</b>

                    <b>CUARTA:</b> El precio acordado entre ambas partes es B/.__________________________________________ <b> <br>
                    En señal de aceptación firman el presente contrato en dos (2) ejemplares del mismo tenor y efecto en la República de Panamá el día <br>
                    
                    '.date("j").' días del mes '.date("n").' del año '.date("Y").'.</b>
                    <br>

                    <table class="table" style="width:90%; font-size: 10px; text-align:center;">
                        <tr>
                            <td>
                            <b> EL COMPRADOR: ____'.$cliente.'___ </b> <br><br>
                            FIRMA: ____________________________
                            </td>
                            <td>
                            EL VENDEDOR:<br>
                            PANAMA CAR RENTAL, S.A.<br>
                            RICARDO DE LA GUARDIA <br>
                            ____________________________________
                            </td>
                        </tr>
                    </table>

                    
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
            </div>';

$mpdf->WriteHTML($html);
$mpdf->Output();
