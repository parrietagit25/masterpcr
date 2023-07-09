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
    $cliente = $value["exp_cliente"];
    $marca = $value["exp_marca"];
    $modelo = $value["exp_modelo"];
    $anio = $value["exp_anio"];
    $placa = $value["exp_placa"];
    $chacis = $value["exp_chasis"];
    $motor = $value["exp_motor"];
    $color = $value["exp_color"];
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
                                PANAMA CAR RENTAL, S.A.<br>
                                DECLARACIÓN JURADA PARA APLICACIÓN DE<br>	
                                ABONOS O CANCELACIONES PARA LA COMPRA<br>
                                DE AUTOS POR FAMILIARES<br>			
                                CÓDIGO: PCR-CUMP-EXCP01<br>							
                                VERSIÓN 01-2021							

                            </td>
                            <td style="text-align:right"><img src="logoima.jpg" alt="Descripción de la imagen" width="250"></td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                                    Panamá,
                                <br>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                Señores<br>
                                PANAMÁ CAR RENTAL, S.A.<br>						
                                Ciudad de Panamá
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    
                    <p>
                    Estimados señores: <br>
                    Por este medio yo _'.$nombre_completo.'_ con cédula/pasaporte número <br>
                    __'.$cedula.'__ declaro bajo la gravedad del juramento, en conocimiento del contenido del Artículo 385, texto Único del Código Penal, <br>
                    Gaceta Oficial No. 26,510 de 26 de abril de 2010, que tipifica el delito de falso testimonio, que el(la) señor(a): ____________________________ <br>
                    ________________________________________________________________, de nacionalidad _____________________, con cédula/pasaporte número _____________________________ <br>
                    , guarda parentesco con mi persona en grado de _______________________________________, y estará realizando un abono o cancelación del precio de venta del auto marca. <br>			
                    _'.$marca.'_, modelo _'.$modelo.'_ ,  del año __'.$anio.'__ , con placa __'.$placa.'__ <br>
                    <br>
                    Monto del abono o cancelación:__________________________________<br>

                    <table class="table" style="width:90%; font-size: 10px;">
                        <tr>
                            <td>Método de pago</td>
                            <td>□ ACH</td>
                            <td>□ Depósito bancario</td>
                            <td>□ Yappy</td>
                            <td>□ Cheque</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>□ Tarjeta débito</td>
                            <td>□ Tarjeta de crédito</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>

                    <br>
                    Atentamente, <br>
                    x________________________________________________ Colocar huella dactilar al lado de la firma. <br>
                    Nombre completo:__'.$nombre_completo.'__ <br>
                    Cédula o pasaporte:_'.$cedula.'_ <br>
                    </p>
                    <br>
                    <br>
                    <table class="table" style="width:90%; font-size: 10px; text-align:center;">
                        <tr>
                            <td style="background-color:#5467DE;">AVISO LEGAL</td>
                        </tr>
                        <tr>
                            <td>PANAMA CAR RENTAL, S.A. ES SUJETO OBLIGADO NO FINANCIERO DE ACUERDO CON LA LEY 124 DE 7 DE ENERO DE 2020 "QUE CREA LA SUPERINTENDENCIA DE SUJETOS NO FINANCIEROS Y DICTA OTRAS DISPOSICIONES", LA LEY 23 DEL 27 DE ABRIL DE 2015 "QUE ADOPTA MEDIDAS PARA PREVENIR EL BLANQUEO DE CAPITALES, EL FINANCIAMIENTO DEL TERRORISMO 
                            Y DEL FINANCIAMIENTO DE LA PROLIFERACIÓN DE ARMAS DE DESTRUCCIÓN MASIVA Y OTRAS DISPOSICIONES", SUS MODIFICACIONES Y DEMÁS REGLAMENTACIONES</td>
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
