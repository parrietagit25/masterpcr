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
$html = '<div class="container" style="font-size: 10px; font-family: Arial;">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table" style="width:100%; font-size: 10px;" border="0.5">
                        <tr>
                            <td><img src="logoima.jpg" alt="Descripción de la imagen" width="100"></td>
                            <td style="text-align: center;">
                                MANUAL DE PROCEDIMIENTOS DEL ÁREA DE VENTAS <br>
                                MODELO DE TRANSFORMACION COMERCIAL – AUTOMARKET <br>
                                CONTROL DE ENTREGA DE EXPEDIENTES DE VENTAS DE AUTOS
                            </td>
                            <td> 
                                CÓDIGO: PCR-AM- VENTAS <br>
                                FECHA ACTUALIZACIÓN: 05 de ABRIL  <br>
                                de 2023. <br>
                                VERSIÓN: 1 <br>
                                PÁGINA: 1-1
                            </td>
                        </tr>
                    </table>
                    <br>
                    <h2 style="text-align: center;">PORTADA FILE DE VENTAS</h2>
                    ';
                    foreach ($expedienete as $key => $value) { 
                    $html .= '<div style="border: 1px dotted black;"> Nombre del Cliente: ____________________________________'.$value["exp_cliente"].' Fecha: ____________________________________'.$value["exp_fecha"].' <br> 
                    Marca: ____________________________________'.$value["exp_marca"].' Modelo: ____________________________________'.$value["exp_modelo"].' Año: ____________________'.$value["exp_anio"].' <br>
                    #Placa: ____________________________________'.$value["exp_placa"].' Cod. Dollar: ____________________________________'.$value["exp_codigo_dollar"].' Cod. Cliente: ____________________________________'.$value["exp_n_intelisis"].'</div><br>
                    
                    <table class="table" style="width:100%; font-size: 12px;">
                        <tr>
                            <td><h5>Perfil del Cliente: </h5></td>
                            <td style="text-align: center;">Asalariado y Jubilados <br> (Privado o Público)</td>
                            <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            <td style="text-align: center;">Independientes <br> (Formal o Informal)</td>
                            <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            <td>Jurídico</td>
                            <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                        </tr>
                    </table>
                    ';
                    
                    $bien_cedula = "";
                    $bien_recibo = "";
                    $bien_aviso_operaciones = "";
                    $bien_evidencia_ingresos = "";
                    $cedula = '';
                    $recibo = '';
                    $aviso_operaciones = '';
                    $evidencia_ingresos = '';

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
                    }


                    $html .= '
                    <br>
                    <table class="table" style="width:100%; font-size: 10px; text-align:left;">
                        <tbody>
                            <tr>
                                <td colspan="2" style="font-size: 14px;"><b>A. Requisitos Generales</b> (Perfil de Cliente)</td>
                            </tr>
                            <tr>
                                <td>FORMULARIO CONOCE TU CLIENTE</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Copia de cedula o pasaporte para extranjeros</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Recibo de servicios o declaración jurada de domicilio.</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Ficha – talonario de pago o carta de trabajo (solo una de estas)- Asalariados o Jubilados.</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Riesgo medio – alto: segunda identificación y carta de referencias bancarias. Asalariados o Jubilados</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Riesgo medio – alto: segunda identificación y carta de referencias bancarias. Asalariados o Jubilados</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Declaración jurada de fondos y evidencia de su actividad - Independiente</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td> Carta de referencia o extractos bancarios con movimientos que reflejen liquidez acorde a la transacción - Independiente</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Aviso de Operaciones - Jurídico</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Registro Público vigente no menor de 3 meses - Jurídico</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Copia de cedula o pasaporte de los directores - Jurídico</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>

                            <tr>
                                <td>Declaración de renta con ingresos del año correspondiente - Jurídico</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Copia de certificado de acciones o declaración jurada de acciones firmada por Representante o apoderado - Jurídico.</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Riesgo Medio – Alto: Carta de Referencias bancaria – Jurídico. </td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Estados financieros auditados - Jurídico.</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Clientes extranjeros: Deben entregar referencias comerciales - Jurídico.</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>
                                <b>NOTA</b> (Todos los Perfiles):
                                Si tiene otros ingresos debe sustentar según perfil (Negocio, oficio, Herencia, Vtas. De Propiedades, Premio Lotería, etc.).
                                <b>Declaración jurada de familiares o terceros cuando aporten dinero en la transacción.</b>
                                Si el cliente no es beneficiario final, debe llenar declaración jurada de su beneficiario final. <br>
                                ▪ Si en la transacción interviene un tercero natural por menos de B/.2,500, solo se realiza conoce tu cliente , copia de la 
                                cédula y lista de buscadores. <br>
                                ▪ De B/. 2,501 en adelante se realiza debida diligencia completa, conjunto a declaración jurada de familiares o terceros. <br>
                                ▪ En el caso de recibir fondos de empresas, se realiza debida diligencia completa de la empresa que emana los fondos. </td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <br>

                    <table class="table" style="width:100%; font-size: 10px; text-align:left; font-family: Arial;">
                        <tbody>
                            <tr>
                                <td colspan="2" style="font-size: 14px;"><b>B. Cumplimiento</b></td>
                            </tr>
                            <tr>
                                <td>Conoce tu cliente </td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td> Matriz de Riego</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Requisitos según Perfil de Cliente (Natural, Jurídico)</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td> Consultas en buscadores: | VINCULACION Y BLANQUEO CAPITALES  BC <img src="huella.png" alt="Descripción de la imagen" width="25"> FT 
                                <img src="huella.png" alt="Descripción de la imagen" width="25"> FPADM 
                                <img src="huella.png" alt="Descripción de la imagen" width="25"> <br>
                                GOOGLE <img src="huella.png" alt="Descripción de la imagen" width="25"> OFAC <img src="huella.png" alt="Descripción de la imagen" width="25">
                                ONU <img src="huella.png" alt="Descripción de la imagen" width="25">
                                
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="font-size: 14px;"><b>C. Revisión Contable</b></td>
                            </tr>
                            <tr>
                                <td>Proforma del Auto ( datos completos)</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Hoja de Contabilidad (detalle de pagos del cliente)</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Transferencias del cliente (ACH/ Depósito a Cta.)</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Confirmación de Fondos – Dpto. Contabilidad</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Recibos de Abono</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="font-size: 14px;"><b>D. Traspasos</b></td>
                            </tr>
                            <tr>
                                <td>Verificar Liberación en Intelisis (Encargada de Sucursal)</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Tarjeta de Traspaso Firmada</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Registro Único Vehicular firmado</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Carta de Autorización Tramitante por parte de PCR (MUPA / ATTT).</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Carta de Acreencia Hipotecaria (si aplica) </td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="font-size: 14px;"><b>E. Facturación </b></td>
                            </tr>
                            <tr>
                                <td>RUV actualizado y correcto</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td> Factura de Venta (Intelisis).</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Factura Electrónica (DGI)</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="font-size: 14px;"><b>F. Entrega del Auto </b></td>
                            </tr>
                            <tr>
                                <td> Declaración Jurada de Beneficiario Final: Persona Natural/Jurídica (Si Aplica)</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Exoneración Total de Responsabilidad:</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Documentos Propietario del Auto:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td> RUV</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Recibo de Traspasos</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td> Placa ( Lata)</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Ultimo Revisado</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Herramientas del Auto:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td> Gato</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Pipa</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td> Palanca</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Equipo Adicional:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td> Radio</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Segunda Llave</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td> Alfombras</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td> Firma y Huella – Cliente</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td>Contrato de Compra y Venta Firmado por el Cliente</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                            <tr>
                                <td> Contrato de Compra y Venta (como está y donde está).</td>
                                <td><img src="huella.png" alt="Descripción de la imagen" width="25"></td>
                            </tr>
                        </tbody>
                    </table>
                   
                    <br>
                    <h3>Firmas Responsables:</h3>
                    <table class="table" style="width:90%; font-size: 10px;">
                        <tbody>
                            <tr>
                                <td>
                                    ______________________________________________________ <br>
                                    Ejecutivo de Ventas
                                </td>
                                <td>
                                    ______________________________________________________ <br>
                                Auditoria
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ______________________________________________________ <br>
                                    Encargada de Sucursal
                                </td>
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
