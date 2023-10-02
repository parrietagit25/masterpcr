<?php require_once '../../vendor/autoload.php'; ?>
<?php $modalDocu = 1; ?>
<?php require_once("../../controladores/CcclientePjController.php"); ?>
<?php $cCclienteController = new CcclienteController(); ?>
<?php $id = $_GET['id']; ?>
<?php $expedienete = $cCclienteController->obtenerExpediente($id); 
$generales = $cCclienteController->obtenerGenerales($id);

$mpdf = new \Mpdf\Mpdf();
$link_imagen = "http://i.postimg.cc/Nj27DNw9/logonf.png";

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

 /*
 foreach ($generales as $key => $value) {
    $cedula = $value['fg_cedula'];
    $direccion = $value['fg_direccion_residencial'];
    $telefono = $value['fg_telefono_movil'];
    $nombre_completo = $value['fg_primer_nombre'].' '.$value['fg_segundo_nombre'].' '.$value['fg_apellido_paterno'].' '.$value['fg_apellido_materno'];
 } */

$html = '<div class="container" style="font-size: 9px;">
            <div class="row">
                <div class="col-sm-12">
                    <h2 style="color:#2b4a8f; text-align: center;">AUTOMARKET.</h2>
                    <p style="text-align: center;">
                        <b>
                            PANAMA CAR RENTAL, S.A. <br>
                            R.U.C. 419758-1-427175 D.V. 97 <br>
                            Ave. Domingo Díaz, Tocumen Commercial Park, local 17 - Teléfono: 279-2700 <br>
                            Ciudad de Panamá, Panamá <br>
                            CONTRATO DE COMPRAVENTA DE BIEN MUEBLE <br>
                        </b>
                    </p>
                    <p>
                        Entre los suscritos a saber, Panamá Car Rental S.A. Sociedad Anónima debidamente inscrita a la ficha 427175, documento 419758 debidamente representada en este acto por ____________________ _____________________.ciudadano (a) panameño (a), mayor de edad, con número de cédula de
                        identidad personal _____________________	quien actúa debidamente facultado (a) por una parte y quien para los efectos de este contrato, en adelante se denominará EL VENDEDOR y por la otra ____________ varón/mujer, mayor de edad, panameño (a), con cédula de
                        identidad personal o Pasaporte No. __________________ extranjero (a) actuando en su propio nombre y representación, en adelante y para los efectos de este contrato EL COMPRADOR y cuando se haga referencia de todas dichas partes se denominarán LAS PARTES convienen en celebrar el presente Contrato de Compraventa de Bien Mueble (Auto), en atención a las siguientes cláusulas y condiciones:
                        Sección 1: (Declaración de Propiedad) EL VENDEDOR declara y así lo hace constar, que es dueño del auto descrito a continuación, el cual en adelante, para los efectos de este contrato será referido como el AUTO.

                    </p>';
                $html .= '<table class="table" style="width:90%; font-size: 9px;">
                            <tbody>
                                <tr>
                                    <td style="width: 100px;"><b>MARCA</b></td>
                                    <td>'.$marca.'</td>
                                    <td style="width: 100px;"><b>MODELO</b></td>
                                    <td>'.$modelo.'</td>
                                    <td style="width: 100px;"><b>AÑO</b></td>
                                    <td>'.$anio.'</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px;"><b>Kilometraje</b></td>
                                    <td> </td>
                                    <td style="width: 100px;"><b>PLACA</b></td>
                                    <td>'.$placa.'</td>
                                    <td style="width: 100px;"><b>MOTOR</b></td>
                                    <td>'.$motor.'</td>
                                </tr>
                                <tr>
                                    <td style="width: 100px;"><b>CHASIS</b></td>
                                    <td>'.$chacis.'</td>
                                    <td style="width: 100px;"><b>COLOR</b></td>
                                    <td>'.$color.'</td>
                                    <td style="width: 100px;"><b>MUNICIPIO</b></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 100px;"><b>PROPIETARIO ANTERIOR</b></td>
                                    <td></td>
                                    <td style="width: 100px;"><b>CONDICION</b></td>
                                    <td></td>
                                    <td><b></b></td>
                                    <td></td>
                                </tr>
                                
                            </tbody>
                        </table>

                        <p>
                        Sección 2: (Objeto) Por medio de este contrato, EL VENDEDOR vende como en efecto lo hace EL COMPRADOR, el AUTO descrito en líneas anteriores por un precio pactado de (US$) ________________ (US$) ________________	pagaderos con la firma de este contrato. El precio no incluye gastos de traspaso. <br>
                        Sección 3: (Gravámenes) Declara EL VENDEDOR que el AUTO se encuentra libre de gravámenes, multas e Hipoteca, se encuentra al día en el pago de todos sus impuestos, y se compromete a responder en caso de evicción. EL VENDEDOR no es responsable por atrasos en la en la entrega del AUTO y/o los documentos de traspaso del mismo, mientras dichos traspasos sean imputables o escapen de su control. <br>
                        Sección 4: (Condiciones de Garantía): Salvo las limitaciones o exclusiones indicadas en este documento EL VENDEDOR otorga una garantía de doce (12) meses o 30.000KM, lo que ocurra primero, en el bloque del motor y la transmisión únicamente. <br>
                        Los términos de la garantía comenzarán a regir a partir de la fecha de este contrato.
                        - Esta garantía solo es válida en la República de Panamá. <br>
                        ■ Se entiende que la Empresa ha fallado en su deber de reparar si luego de tres (3) intentos no ha logrado corregir el daño o reparar el componente de forma tal que sirva para la finalidad para la que fue construido.<br>
                        La garantía se pierde: <br>
                        1.	Por el uso incorrecto y/o la omisión de las instrucciones indicadas en el manual del vehículo.<br>
                        2.	La falta u omisión de los mantenimientos, cada 5mil kilómetros o cada 3 meses.<br>
                        3.	El mantenimiento y/o reparación ejecutada por un taller o persona no autorizada.<br>
                        4.	La utilización de repuestos o componentes distintos a los componentes originales.<br>
                        5.	Choque o Colisión.<br>
                        6.	Uso incorrecto o en violación a las disposiciones que sobre uso correcto contiene el manual del vehículo.<br>
                        7.	Uso del vehículo para actividades comerciales (sin limitarse- taxi, taxi-turista, transporte público y/o alquiler).<br>
                        8.	Uso del vehículo para actividades “off road" o calles no pavimentadas.<br>
                        9.	Modificación del auto.<br>
                        La garantía NO cubre:<br>
                        1.	Desgaste normal que incluye sin limitarse a daños por desgaste, aire acondicionado, daños eléctricos, recalentamiento del auto, embrague, cremallera, turbo, ruidos, malos olores, frenos, llantas ni cualquier componente de la suspensión.<br>
                        2.	Costos por indisponibilidad del vehículo mientras esté en reparación.<br>
                        3.	Gastos de almacenaje.<br>
                        4.	Gastos de transporte, grúa o remolque.<br>
                        5.	Cualquier tipo de consumibles.<br>
                        6.	Deterioro o desgaste normal de cualquier componente.<br>
                        Sección 5: EL COMPRADOR expresamente declara:<br>
                        •	Que ha sido debidamente informado de todas y cada una de las características y/o condiciones del AUTO.<br>
                        •	Que ha verificado el AUTO antes y durante el proceso de compra y tiene convencimiento pleno que las características indicadas por el vendedor coinciden con las condiciones actuales del AUTO.<br>
                        •	Que ha sido debidamente informado y comprende claramente las condiciones y excepciones de la garantía.<br>
                        •	Que ha probado el auto y todos sus componentes y accesorios, y que los mismos funcionan de manera adecuada y de acuerdo a la función que deben cumplir.<br>
                        •	Que conoce y acepta la condición del auto (usado) y por tanto se obliga a no reclamar la existencia de detalles o marcas propias del uso normal del AUTO.<br>
                        Sección 6: Disposiciones Finales:<br>
                        •	EL COMPRADOR no podrá ceder, transferir, o traspasar bajo ningún concepto, el presente contrato o cualesquiera de los derechos u obligaciones de que es titular, en virtud del presente Contrato.<br>
                        •	El hecho de que una de las partes permita, una o varias veces, que la otra incumpla sus obligaciones o no ejerza oportunamente los derechos contractuales o legales que le correspondan, no se considerará, ni equivaldrá a la modificación del presente Contrato, ni obtará en ningún caso para que dicha parte, en el futuro, insista en el cumplimiento fiel y específico de las obligaciones que corren a cargo de la otra o ejerza los derechos convencionales o legales de que sea titular.<br>
                        Las partes convienen en dirimir ante los tribunales de la República de Panamá, cualquier diferencia, discrepancia o controversia que surja entre ellas de la interpretación, ejecución o cumplimiento del presente Contrato, y de acuerdo a las leyes de la República de Panamá.<br>
                        <b>Para constancia y fé se firma el presente contrato, hoy '.date("j").' del mes '.date("n").' del '.date("Y").' en la ciudad de Panamá, República de Panamá. </b><br>
                        </p>
                        <table border="0" style="width:100%; font-size: 8px;">
                            <tr>
                                <td> _______________________________________</td>
                                <td></td>
                                <td></td>
                                <td>________________________________________</td>
                            </tr>
                            <tr>
                                <td> <b>PANAMA CAR RENTAL, S.A.</b> <br>
                                    AUTOMARKET SEMINUEVOS se refiere a la marca bajo la cual PANAMA CAR RENTAL, S.A. ofrece sus productos y servicios. El nombre “AUTOMARKET SEMINUEVOS” y su logotipo es una marca registrada de propiedad de SEMINUEVOS, S.A. La sociedad SEMINUEVOS, S.A. no tiene relación comercial y/o contractual ni presta servicios a los clientes de PANAMA CAR RENTAL, S.A.
                                </td>
                                <td></td>
                                <td></td>
                                <td><b>Nombre <br>
                                Ced / Pas: </b><br>
                                He leído y comprendido todas y cada una de las disposiciones enumeradas en líneas anteriores, y acepto, que he recibido un original de este documento al igual que el AUTO conforme.
                                </td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>';

$mpdf->WriteHTML($html);
$mpdf->Output();
