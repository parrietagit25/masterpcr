<?php require_once '../../vendor/autoload.php'; ?>
<?php $modalDocu = 1; ?>
<?php require_once("../../controladores/CcclientePjController.php"); ?>
<?php $cCclienteController = new CcclienteController(); ?>
<?php $id = $_GET['id']; ?>
<?php $expedienete = $cCclienteController->obtenerExpediente($id); 
//$generales = $cCclienteController->obtenerGenerales($id);

$mpdf = new \Mpdf\Mpdf();
$link_imagen = "http://i.postimg.cc/Nj27DNw9/logonf.png";
/*$mpdf->WriteHTML('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">'); */
$html = '<div class="container" style="font-size: 10px;">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table" style="width:90%; font-size: 10px;" border="0.5">
                        <tr>
                            <td>CONTROL DE ENTREGA DE EXPEDIENTES  DE VENTAS DE AUTOS</td>
                            <td><img src="logoima.jpg" alt="Descripción de la imagen" width="250"></td>
                        </tr>
                    </table><br><br>';
                    foreach ($expedienete as $key => $value) { 
                    $html .= '<table class="table" style="width:90%; font-size: 10px; text-align:center;" border="1">
                        <tbody>
                            <tr>
                                <td><b>FECHA</b></td>
                                <td>'.$value["pjexp_fecha"].'</td>
                            </tr>
                            <tr>
                                <td><b>CLIENTE</b></td>
                                <td>'.$value["pjexp_cliente"].'</td>
                            </tr>
                            <tr>
                                <td><b>MARCA</b></td>
                                <td>'.$value["pjexp_marca"].'</td>
                            </tr>
                            <tr>
                                <td><b>MODELO</b></td>
                                <td>'.$value["pjexp_modelo"].'</td>
                            </tr>
                            <tr>
                                <td><b>AÑO</b></td>
                                <td>'.$value["pjexp_anio"].'</td>
                            </tr>
                            <tr>
                                <td><b>PLACA</b></td>
                                <td>'.$value["pjexp_placa"].'</td>
                            </tr>
                            <tr>
                                <td><b>CHASIS</b></td>
                                <td>'.$value["pjexp_chasis"].'</td>
                            </tr>
                            <tr>
                                <td><b>MOTOR</b></td>
                                <td>'.$value["pjexp_motor"].'</td>
                            </tr>
                            <tr>
                                <td><b>COLOR</b></td>
                                <td>'.$value["pjexp_color"].'</td>
                            </tr>
                            <tr>
                                <td><b>CÓDIGO DOLLAR</b></td>
                                <td>'.$value["pjexp_codigo_dollar"].'</td>
                            </tr>
                            <tr>
                                <td><b>N° CLIENTE</b></td>
                                <td>'.$value["pjexp_n_intelisis"].'</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <br>
                    <br>';
                    
                    /*$bien_cedula = "";
                    $bien_recibo = "";
                    $bien_aviso_operaciones = "";
                    $bien_evidencia_ingresos = "";

                    foreach ($documentos_adjuntos as $key => $value) {
                        $cedula = $documentos_adjuntos['fdcad_documento_identidad'];
                        $recibo = $documentos_adjuntos['fdcad_recibo'];
                        $aviso_operaciones = $documentos_adjuntos['fdcad_aviso_operaciones'];
                        $evidencia_ingresos = $documentos_adjuntos['fdcad_evidencia_ingresos'];
                    }

                    if($cedula != ''){
                        $bien_cedula = '<img src="bien.jpg" width="20">';
                    }

                    if($recibo != ''){
                        $bien_recibo = '<img src="bien.jpg" width="20">';
                    }

                    if($aviso_operaciones != ''){
                        $bien_aviso_operaciones = '<img src="bien.jpg" width="20">';
                    }

                    if($evidencia_ingresos != ''){
                        $bien_evidencia_ingresos = '<img src="bien.jpg" width="20">';
                    } */


                    $html .= '<table class="table" style="width:90%; font-size: 10px; text-align:center;" border="1">
                        <tbody>
                            <tr>
                                <td colspan="2" style="background-color:gray;">REQUISITOS CLIENTE (PERSONA NATURAL)</td>
                            </tr>
                            <tr>
                                <td>FORMULARIO CONOCE TU CLIENTE</td>
                                <td><img src="bien.jpg" width="20"></td>
                            </tr>
                            <tr>
                                <td>COPIA PACTO SOCIAL Y SUS ENMIENDAS</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>COPIA CERTIFICADO DEL REGISTRO PÚBLICO VIGENTE</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>COPIA DE AVISO DE OPERACIONES</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>COPIA ÚLTIMA DECLARACIÓN DE IMPUESTO SOBRE LA RENTA</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>ESTADO DE CUENTA BANCARIO (3 ULTIMOS MESES)</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>ESTADOS FINANCIEROS</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>REFERENCIA BANCARIA</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>REFERENCIA COMERCIAL</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>RECIBO DE SERVICIO PÚBLICO (DENTRO DE LOS ÚLTIMOS 3 MESES) O CONTRATO DE ARRENDAMIENTO</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <br>
                    <table class="table" style="width:90%; font-size: 10px; text-align:center;" border="1">
                        <tbody>
                            <tr>
                                <td colspan="2" style="background-color:gray;">BENEFICIARIO FINAL /REPRESENTANTE LEGAL / APODERADO</td>
                            </tr>
                            <tr>
                                <td>COPIA DE CÉDULA O PASAPORTE VIGENTE (Sacar copia página último ingreso a Panamá)</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>RECIBO DE SERVICIO PÚBLICO (DENTRO DE LOS ÚLTIMOS 3 MESES) O CONTRATO DE ARRENDAMIENTO</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table" style="width:90%; font-size: 10px; text-align:center;" border="1">
                        <tbody>
                            <tr>
                                <td colspan="2" style="background-color:gray;">REQUISITOS EXPEDIENTE DE VENTA</td>
                            </tr>
                            <tr>
                                <td>HOJA DE CONTABILIDAD COMPLETA</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>PROFORMA</td>
                                <td></td>
                            </tr>
                            <tr>
                            <td>COPIA FACTURA DE VENTA</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>CONTRATO DE GARANTÍA</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>CONTRATO COMPRA AUTOS EN CONSIGNACIÓN</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>CONTRATO COMO ESTÁ/DONDE ESTÁ</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>DOCUMENTO EXONERACION TOTAL DE RESPONSABILIDAD</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>COPIA DE DOCUMENTO DE TRASPASO</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>HOJA DE ENTRADA (PAGO)</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>CARTA PROMESA - SI EL AUTO ES FINANCIADO</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>RECIBO DE ABONO</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>RECIBO DE TRASPASO</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>RECIBO (S) DE PAGO</td>
                            <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table" style="width:90%; font-size: 10px;">
                        <tbody>
                            <tr>
                            <td style="width: 30%;">VENDEDOR:</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>FIRMA:</td>
                            <td>______________________________________________________</td>
                            </tr>
                            <tr>
                            <td>ENCARGADO SUCURSAL:</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>FIRMA:</td>
                            <td>______________________________________________________</td>
                            </tr>
                            <tr>
                            <td>GERENTE DE VENTAS:</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>FIRMA:</td>
                            <td>______________________________________________________</td>
                            </tr>
                            <tr>
                            <td>DPTO. CONTABILIDAD:</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>FIRMA DEL RESPONSABLE:</td>
                            <td>______________________________________________________</td>
                            </tr>
                            <tr>
                            <td>FECHA DE RECIBIDO:</td>
                            <td>______________________________________________________</td>
                            </tr>
                        </tbody>
                    </table>


                    ';
                    } 
            $html .='</div>
                </div>
            </div>';

$mpdf->WriteHTML($html);
$mpdf->Output();
