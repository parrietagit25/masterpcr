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

 foreach ($generales as $key => $value) {
    $cedula = $value['fg_cedula'];
    $direccion = $value['fg_direccion_residencial'];
    $telefono = $value['fg_telefono_movil'];
    $nombre_completo = $value['fg_primer_nombre'].' '.$value['fg_segundo_nombre'].' '.$value['fg_apellido_paterno'].' '.$value['fg_apellido_materno'];
 }

$html = '<div class="container" style="font-size: 10px;">
            <div class="row">
                <div class="col-sm-12">
                    
                    <h4>CONTRATO COMO ESTÁ Y DONDE ESTÁ</h4>
                    <p>
                    Entre  los  siguientes  suscritos <b>'.$cliente.'</b>(coprador) con documento de identidad:<b>'.$cedula.'</b> actuando en nombre propio y representación.<br> 
                    
                    Por la otra parte Panama Car Rental S.A (vendedor) representado por <b>RICARDO DE LA GUARDIA</b> con <br> 
                    documento de identidad <b>8-738-1347</b> acuerdan celebrar contrato de compraventa con las siguientes<br> 
                    clausulas:<br>
                    
                    <b>PRIMERA:</b> EL VENDEDOR vende el auto:
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
                    FIRMA: ______________________________________________
                    <b>SEGUNDA: EL COMPRADOR</b> entiende que la empresa <b>PANAMA CAR RENTAL S.A</b> esta vendiendo el auto <br> 
                    <b>Como está y Donde está,</b> y accede a llevarlo en las condiciones que lo observa al momento de la <br>
                    compraventa, también entiende el comprador que no puede exigir reclamos futuros a la empresa 
                    <b>PANAMA CAR RENTAL S.A.</b>, y cualquiera de sus subsidiarias, tampoco podrá reclamar a ninguno de sus<br> 
                    directivos y colaboradores.<br>

                    <b>TERCERA:</b> Por ser un vehículo vendido <b>Como Está y Donde Está, El COMPRADOR</b> entiende que no goza <br> 
                    de ningún tipo de garantía brindada por la empresa <b>PANAMA CAR RENTAL S.A.</b>

                    <b>CUARTA:</b> El precio acordado entre ambas partes es B/.__________________________________________ <b>Por lo cual, YO <br> 
                    ____'.$nombre_completo.'___ , con cédula de identidad personal _________'.$cedula.'_________, con domicilio <br> 
                    en___'.$direccion.'___, número de teléfono: _____'.$telefono.'___, ACEPTO, </b><br> 
                    comprar el vehículo antes descrito sin derecho a ningún reclamo futuro, declaro que he inspeccionado a cabalidad <br>
                    el vehículo antes descrito y lo estoy aceptando en las condiciones actuales, y que es de mi interés continuar con la <br> 
                    compra de dicho auto sin ningún tipo de garantía.

                    <b>Quinto:</b> El vehículo a motor, tiene la condición de usado por ello se vende como está y donde está, y su precio de <br>
                    original de venta es de B/. ___________________________________________________________, y se le esta otorgando un descuento de B/.<br> 
                    ____________________________________________________, debido a que se vende como está y donde está, por lo cual nuestra empresa, manifiesta <br>
                    que el comprador estará llevando el bien bajo su responsabilidad y no goza de garantías ni reclamos legales, <b> por <br>
                    recibir descuento en el precio original de venta. (Base Legal, Artículo 66 , Ley 45 del 2007).</b>

                    <b>Dado en la Ciudad de Panamá, a los '.date("j").' días del mes '.date("n").' del año '.date("Y").'.</b>
                    <br>
                    <b> EL COMPRADOR: ____'.$nombre_completo.'___ </b> <br><br>
                    DOC. IDENT: __'.$cedula.'__ <br> <br><br>
                    FIRMA: ___________________________________________________
                    <br>
                    <br>
                    <br>
                    <img src="huella.png" width="100">
                    <br>
                    Colocar Huella

                </div>
            </div>';

$mpdf->WriteHTML($html);
$mpdf->Output();
