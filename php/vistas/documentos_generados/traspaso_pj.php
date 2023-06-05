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
                                AUTORIZACIÓN DE TRASPASO VEHICULAR <br>	
                                A FAVOR DE TERCEROS PERSONA JURÍDICA<br>
                                CÓDIGO: PCR-CUMP-TR02<br>						
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
                    Por este medio yo _______________________________________________________________ de nacionalidad	<br>
                    __________________________, con cédula/pasaporte número _________________________, en mi calidad de COMPRADOR del auto marca <br>
                    __________________________, modelo ______________________, del año ____________________, con placa ___________________________ <br>
                    AUTORIZO irrevocablemente, el traspaso de la propiedad del referido vehículo a favor de la sociedad/fundación:__________________________________ <br>				
                    ________________________________, debidamente inscrita al Folio ________________________, del Registro Público de Panamá.	


                    <br>
                    <br>
                    Atentamente, <br>
                    x________________________________________________ Colocar huella dactilar al lado de la firma. <br>
                    Nombre completo:_______________________________________________ <br>
                    Cédula o pasaporte:____________________________________________ <br>
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
