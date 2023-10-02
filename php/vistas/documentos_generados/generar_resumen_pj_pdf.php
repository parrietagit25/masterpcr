<?php require_once '../../vendor/autoload.php'; ?>
<?php $modalDocu = 1; ?>
<?php require_once("../../controladores/CcclientePjController.php"); ?>
<?php $cCclienteController = new CcclienteController(); ?>
<?php $id = $_GET['id']; ?>
<?php 

$paises = $cCclienteController->obtener_pais();
$genero = $cCclienteController->obtener_genero();
$estado_civil = $cCclienteController->obtener_estado_civil();
$profesion = $cCclienteController->obtener_profesion();
$actividad_principal = $cCclienteController->obtener_actividad_principal();
$actividad_otras = $cCclienteController->obtener_actividad_otras();
$forma_pago = $cCclienteController->obtener_forma_pago();
$limite = $cCclienteController->obtener_limite();
$motodo_pago = $cCclienteController->obtener_motodo_pago();
$profesion_personas_expuestas = $cCclienteController->obtener_profesion_personas_expuestas();
// registros de los campos 
$expedienete = $cCclienteController->obtenerExpediente($id);
$generales = $cCclienteController->obtenerGenerales($id);
$declaracion = $cCclienteController->obtenerDeclaracionFuentes($id);
$representante_legal = $cCclienteController->obtenerRepresentanteLegal($id);
$propietario = $cCclienteController->obtenerPropietarios($id);
$declaracion_accionistas = $cCclienteController->obtenerDeclaracionAccionista($id);
$beneficiarioFinal = $cCclienteController->obntenerBeneficiarioFinal($id);
$tercerosAutorizados = $cCclienteController->obtenerTercerosAutorizados($id);
$expuestas = $cCclienteController->obtenerExpuestas($id);
$referencias = $cCclienteController->obtenerReferencias($id);
$declaracion_jurada = $cCclienteController->obtenerDeclaracionJurada($id);
$documentos_adjuntos = $cCclienteController->obntenerDocumentosAdjuntos($id);
$uso_interno = $cCclienteController->obtenerUsoInterno($id);
$declaracion_jurada_2 = $cCclienteController->obtenerDeclaracionJurada_2($id);
$junta_directiva_dignatarios = $cCclienteController->obtener_pj_directiva_dignatarios_id($id);
$obtener_registros_apot = $cCclienteController->obtener_registros_apot($id);
$obtener_registros_bfn = $cCclienteController->obtener_registros_bfn($id);
$obtener_registros_bfpj = $cCclienteController->obtener_registros_bfpj($id);
$obtener_registros_propietario = $cCclienteController->obtener_registros_propietario($id); 

$todos_adjuntos_juridicos = $cCclienteController->obtenerTodosAdjuntos($id);

/*
foreach ($expedienete as $key => $value) {

    if($value['pjexp_fecha']=='1970-01-01'){ $pjexp_fecha = ''; } else{ $pjexp_fecha = $value['pjexp_fecha']; }

    if (!isset($value['pjexp_cliente']) || $value['pjexp_cliente'] == '' || is_null($value['pjexp_cliente'])) {
        $pjexp_cliente = '';
    }else{
        $pjexp_cliente = $value['pjexp_cliente'];
    }

    if (!isset($value['pjexp_marca']) || $value['pjexp_marca'] == '' || is_null($value['pjexp_marca'])) {
        $pjexp_marca = '';
    }else{
        $pjexp_marca = $value['pjexp_marca'];
    }

    if (!isset($value['pjexp_modelo']) || $value['pjexp_modelo'] == '' || is_null($value['pjexp_modelo'])) {
        $pjexp_modelo = '';
    }else{
        $pjexp_modelo = $value['pjexp_modelo'];
    }

    if (!isset($value['pjexp_anio']) || $value['pjexp_anio'] == '' || is_null($value['pjexp_anio'])) {
        $pjexp_anio = '';
    }else{
        $pjexp_anio = $value['pjexp_anio'];
    }

    if (!isset($value['pjexp_placa']) || $value['pjexp_placa'] == '' || is_null($value['pjexp_placa'])) {
        $pjexp_placa = '';
    }else{
        $pjexp_placa = $value['pjexp_placa'];
    }

    if (!isset($value['pjexp_chasis']) || $value['pjexp_chasis'] == '' || is_null($value['pjexp_chasis'])) {
        $pjexp_chasis = '';
    }else{
        $pjexp_chasis = $value['pjexp_chasis'];
    }

    if (!isset($value['pjexp_motor']) || $value['pjexp_motor'] == '' || is_null($value['pjexp_motor'])) {
        $pjexp_motor = '';
    }else{
        $pjexp_motor = $value['pjexp_motor'];
    }

    if (!isset($value['pjexp_color']) || $value['pjexp_color'] == '' || is_null($value['pjexp_color'])) {
        $pjexp_color = '';
    }else{
        $pjexp_color = $value['pjexp_color'];
    }

    if (!isset($value['pjexp_codigo_dollar']) || $value['pjexp_codigo_dollar'] == '' || is_null($value['pjexp_codigo_dollar'])) {
        $pjexp_codigo_dollar = '';
    }else{
        $pjexp_codigo_dollar = $value['pjexp_codigo_dollar'];
    }

    if (!isset($value['pjexp_n_intelisis']) || $value['pjexp_n_intelisis'] == '' || is_null($value['pjexp_n_intelisis'])) {
        $pjexp_n_intelisis = '';
    }else{
        $pjexp_n_intelisis = $value['pjexp_n_intelisis'];
    }

 } */


 foreach ($generales as $key => $value) {

    if (!isset($value['pjgn_razon_social']) || $value['pjgn_razon_social'] == '' || is_null($value['pjgn_razon_social'])) {
        $pjgn_razon_social = '';
    }else{
        $pjgn_razon_social = $value['pjgn_razon_social'];
    }

    if (!isset($value['pjgn_nombre_comercial']) || $value['pjgn_nombre_comercial'] == '' || is_null($value['pjgn_nombre_comercial'])) {
        $pjgn_nombre_comercial = '';
    }else{
        $pjgn_nombre_comercial = $value['pjgn_nombre_comercial'];
    }

    if (!isset($value['pjgn_datos_inscripcion']) || $value['pjgn_datos_inscripcion'] == '' || is_null($value['pjgn_datos_inscripcion'])) {
        $pjgn_datos_inscripcion = '';
    }else{
        $pjgn_datos_inscripcion = $value['pjgn_datos_inscripcion'];
    }
    /* hace la seleccion */
    if (!isset($value['pjgn_tipo_persona']) || $value['pjgn_tipo_persona'] == '' || is_null($value['pjgn_tipo_persona'])) {
        $pjgn_tipo_persona = '';
    }else{
        $pjgn_tipo_persona = $value['pjgn_tipo_persona'];
    }

    if (!isset($value['pjgn_direccion_fisica']) || $value['pjgn_direccion_fisica'] == '' || is_null($value['pjgn_direccion_fisica'])) {
        $pjgn_direccion_fisica = '';
    }else{
        $pjgn_direccion_fisica = $value['pjgn_direccion_fisica'];
    }
    /* hace la seleccion */
    if (!isset($value['pjgn_pais_constitucion']) || $value['pjgn_pais_constitucion'] == '' || is_null($value['pjgn_pais_constitucion'])) {
        $pjgn_pais_constitucion = '';
    }else{
        $pjgn_pais_constitucion = $value['pjgn_pais_constitucion'];
        $nacionalidad = $cCclienteController->obtener_pais_id($pjgn_pais_constitucion);
        foreach ($nacionalidad as $key => $valuePais) {
            $pjgn_pais_constitucion = $valuePais['nombre'];
        }  
    }

    if (!isset($value['pjgn_residencia_fiscal']) || $value['pjgn_residencia_fiscal'] == '' || is_null($value['pjgn_residencia_fiscal'])) {
        $pjgn_residencia_fiscal = '';
    }else{
        $pjgn_residencia_fiscal = $value['pjgn_residencia_fiscal'];
    }

    if (!isset($value['pjgn_ruc_dv']) || $value['pjgn_ruc_dv'] == '' || is_null($value['pjgn_ruc_dv'])) {
        $pjgn_ruc_dv = '';
    }else{
        $pjgn_ruc_dv = $value['pjgn_ruc_dv'];
    }

    if (!isset($value['pjgn_telefono']) || $value['pjgn_telefono'] == '' || is_null($value['pjgn_telefono'])) {
        $pjgn_telefono = '';
    }else{
        $pjgn_telefono = $value['pjgn_telefono'];
    }

    if (!isset($value['pjgn_apartado_postal']) || $value['pjgn_apartado_postal'] == '' || is_null($value['pjgn_apartado_postal'])) {
        $pjgn_apartado_postal = '';
    }else{
        $pjgn_apartado_postal = $value['pjgn_apartado_postal'];
    }

    if (!isset($value['pjgn_aviso_operacion']) || $value['pjgn_aviso_operacion'] == '' || is_null($value['pjgn_aviso_operacion'])) {
        $pjgn_aviso_operacion = '';
    }else{
        $pjgn_aviso_operacion = $value['pjgn_aviso_operacion'];
    }

    if (!isset($value['pjgn_licencia']) || $value['pjgn_licencia'] == '' || is_null($value['pjgn_licencia'])) {
        $pjgn_licencia = '';
    }else{
        $pjgn_licencia = $value['pjgn_licencia'];
    }

    if (!isset($value['pjgn_entidad_reguladora']) || $value['pjgn_entidad_reguladora'] == '' || is_null($value['pjgn_entidad_reguladora'])) {
        $pjgn_entidad_reguladora = '';
    }else{
        $pjgn_entidad_reguladora = $value['pjgn_entidad_reguladora'];
    }
    
    if (!isset($value['pjgn_actividad_principal_dedica']) || $value['pjgn_actividad_principal_dedica'] == '' || is_null($value['pjgn_actividad_principal_dedica'])) {
        $pjgn_actividad_principal_dedica = '';
    }else{
        $pjgn_actividad_principal_dedica = $value['pjgn_actividad_principal_dedica'];
    }

    if (!isset($value['pjgn_descripcion_negocio']) || $value['pjgn_descripcion_negocio'] == '' || is_null($value['pjgn_descripcion_negocio'])) {
        $pjgn_descripcion_negocio = '';
    }else{
        $pjgn_descripcion_negocio = $value['pjgn_descripcion_negocio'];
    }
    /* seleccion */
    if (!isset($value['pjgn_paises_ofrece_productos_servicios']) || $value['pjgn_paises_ofrece_productos_servicios'] == '' || is_null($value['pjgn_paises_ofrece_productos_servicios'])) {
        $pjgn_paises_ofrece_productos_servicios = '';
    }else{
        $pjgn_paises_ofrece_productos_servicios = $value['pjgn_paises_ofrece_productos_servicios'];
        $nacionalidad = $cCclienteController->obtener_pais_id($pjgn_paises_ofrece_productos_servicios);
        foreach ($nacionalidad as $key => $valuePais) {
            $pjgn_paises_ofrece_productos_servicios = $valuePais['nombre'];
        }  
    }

    if (!isset($value['pjgn_email']) || $value['pjgn_email'] == '' || is_null($value['pjgn_email'])) {
        $pjgn_email = '';
    }else{
        $pjgn_email = $value['pjgn_email'];
    }

    if (!isset($value['pjgn_cargo']) || $value['pjgn_cargo'] == '' || is_null($value['pjgn_cargo'])) {
        $pjgn_cargo = '';
    }else{
        $pjgn_cargo = $value['pjgn_cargo'];
    }

 }


 foreach ($declaracion as $key => $value) { 

    $pjdf_actividad_principal = $value['pjdf_actividad_principal'];
    $pjdf_actividad_secundaria = $value['pjdf_actividad_secundaria'];
    $pjdf_otras_fuentes = $value['pjdf_otras_fuentes'];
    $pjdf_otras_fuentes_secundaria = $value['pjdf_otras_fuentes_secundaria'];
    $pjdf_limite_compra = $value['pjdf_limite_compra'];
    $pjdf_forma_pago = $value['pjdf_forma_pago'];
    $pjdf_metodo_pago_1 = $value['pjdf_metodo_pago_1'];
    $pjdf_metodo_pago_2 = $value['pjdf_metodo_pago_2'];

} 

if (!isset($pjdf_actividad_principal)) {
$pjdf_actividad_principal = '';
}

if (!isset($pjdf_actividad_secundaria)) {
$pjdf_actividad_secundaria = '';
}

if (!isset($pjdf_otras_fuentes)) {
$pjdf_otras_fuentes = '';
}

if (!isset($pjdf_otras_fuentes_secundaria)) {
$pjdf_otras_fuentes_secundaria = '';
}

if (!isset($pjdf_limite_compra)) {
$pjdf_limite_compra = '';
}

if (!isset($pjdf_forma_pago)) {
$pjdf_forma_pago = '';
}

if (!isset($pjdf_metodo_pago_1)) {
$pjdf_metodo_pago_1 = '';
}

if (!isset($pjdf_metodo_pago_2)) {
$pjdf_metodo_pago_2 = '';
}

foreach ($representante_legal as $key => $value) { 

    $pjrl_nombre_completo = $value['pjrl_nombre_completo'];
    $pjrl_cedula_pasaporte = $value['pjrl_cedula_pasaporte'];
    $pjrl_estado_civil = $value['pjrl_estado_civil'];
    $pjrl_nacionalidada = $value['pjrl_nacionalidada'];
    $pjrl_fecha_nacimiento = $value['pjrl_fecha_nacimiento'];
    $pjrl_direccion = $value['pjrl_direccion'];
    $pjrl_correo = $value['pjrl_correo'];
    $pjrl_profesion = $value['pjrl_profesion'];
    $pjrl_lugar_trabajo = $value['pjrl_lugar_trabajo'];
    $pjrl_telefono = $value['pjrl_telefono'];

}


if (!isset($pjrl_nombre_completo)) {
 $pjrl_nombre_completo = '';
}
if (!isset($pjrl_cedula_pasaporte)) {
 $pjrl_cedula_pasaporte = '';
}
if (!isset($pjrl_estado_civil)) {
 $pjrl_estado_civil = '';
}
if (!isset($pjrl_nacionalidada)) {
 $pjrl_nacionalidada = '';
}
if (!isset($pjrl_fecha_nacimiento)) {
 $pjrl_fecha_nacimiento = '';
}
if (!isset($pjrl_direccion)) {
 $pjrl_direccion = '';
}
if (!isset($pjrl_correo)) {
 $pjrl_correo = '';
}
if (!isset($pjrl_profesion)) {
 $pjrl_profesion = '';
}
if (!isset($pjrl_lugar_trabajo)) {
 $pjrl_lugar_trabajo = '';
}
if (!isset($pjrl_telefono)) {
 $pjrl_telefono = '';
}

$mpdf = new \Mpdf\Mpdf();
$link_imagen = "http://i.postimg.cc/Nj27DNw9/logonf.png";
$html = '<div class="container" style="font-size: 10px;">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table" style="width:100%; font-size: 10px;" border="0.5">
                        <tr>
                            <td>PANAMA CAR RENTAL, S.A.</td>
                            <td></td>
                            <td><img src="logoima.jpg" alt="Descripción de la imagen" width="250"></td>
                        </tr>
                        <tr>
                            <td>POLÍTICA CONOZCA A SU CLIENTE</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>FORMULARIO DE DEBIDA DILIGENCIA CLIENTE PERSONA NATURAL</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>CÓDIGO: PCR-CUMP-FORM01 </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>VERSIÓN 01-2021</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <br>';


            $html .= '<table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>Datos Generales</b></td>
                        </tr>
                        <tr>
                            <td><b>Razón solcial</b></td>
                            <td>'.$pjgn_razon_social.'</td>
                            <td><b>Nombre Comercial</b></td>
                            <td>'.$pjgn_nombre_comercial.'</td>
                        </tr>
                        <tr>
                            <td><b>Datos de inscripción</b></td>
                            <td>'.$pjgn_datos_inscripcion.'</td>
                            <td><b>Tipo de persona</b></td>
                            <td>'.$pjgn_tipo_persona.'</td>
                        </tr>
                        <tr>
                            <td><b>Dirección Fisíca</b></td>
                            <td>'.$pjgn_direccion_fisica.'</td>
                            <td><b>País de constitución</b></td>
                            <td>'.$pjgn_pais_constitucion.'</td>
                        </tr>
                        <tr>
                            <td><b>Residencia Fiscal</b></td>
                            <td>'.$pjgn_residencia_fiscal.'</td>
                            <td><b>RUC & DV</b></td>
                            <td>'.$pjgn_ruc_dv.'</td>
                        </tr>
                        <tr>
                            <td><b>Teléfono</b></td>
                            <td>'.$pjgn_telefono.'</td>
                            <td><b>Apartado Postal</b></td>
                            <td>'.$pjgn_apartado_postal.'</td>
                        </tr>
                        <tr>
                            <td><b>Aviso de operación</b></td>
                            <td>'.$pjgn_aviso_operacion.'</td>   
                            <td><b>Licencia</b></td>
                            <td>'.$pjgn_licencia.'</td>
                        </tr>
                        <tr>
                            <td><b>Entidad reguladora</b></td>
                            <td>'.$pjgn_entidad_reguladora.'</td>
                            <td><b>Activida principal a la que se dedica</b></td>
                            <td>'.$pjgn_actividad_principal_dedica.'</td>
                        </tr>
                        <tr>
                            <td><b>Descripcion del negocio</b></td>
                            <td>'.$pjgn_descripcion_negocio.'</td>
                            <td><b>Paises donde ofrece sus productos o servicios</b></td>
                            <td>'.$pjgn_paises_ofrece_productos_servicios.'</td>
                        </tr>
                        <tr>
                            <td><b>E-mail</b></td>
                            <td>'.$pjgn_email.'</td>
                            <td><b>Cargo</b></td>
                            <td>'.$pjgn_cargo.'</td>
                        </tr>
                    </table>
                    <br>

                    <table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>DECLARACIÓN DE FUENTES Y ORIGEN DE LOS FONDOS.</b></td>
                        </tr>
                        <tr>
                            <td><b>Actividaad principal</b></td>
                            <td>'.$pjdf_actividad_principal.'</td>
                            <td><b>Actividad secundaria</b></td>
                            <td>'.$pjdf_actividad_secundaria.'</td>
                        </tr>
                        <tr>
                            <td><b>Otras fuentes</b></td>
                            <td>'.$pjdf_otras_fuentes.'</td>
                            <td><b>Otras fuentes 2</b></td>
                            <td>'.$pjdf_otras_fuentes_secundaria.'</td>
                        </tr>
                        <tr>
                            <td><b>Limite de compra</b></td>
                            <td>'.$pjdf_limite_compra.'</td>
                            <td><b>Forma de pago</b></td>
                            <td>'.$pjdf_forma_pago.'</td>
                        </tr>
                        <tr>
                            <td><b>Método de pago</b></td>
                            <td>'.$pjdf_metodo_pago_1.'</td>
                            <td><b>Método de pago 2</b></td>
                            <td>'.$pjdf_metodo_pago_2.'</td>
                        </tr>
                    </table>
                    <br>

                    <table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>DATOS DEL REPRESENTANTE LEGAL.</b></td>
                        </tr>
                        <tr>
                            <td><b>Nombre Completo</b></td>
                            <td>'.$pjrl_nombre_completo.'</td>
                            <td><b>Cedula / N# Pasaporte.</b></td>
                            <td>'.$pjrl_cedula_pasaporte.'</td>
                        </tr>
                        <tr>
                            <td><b>Estado Civil</b></td>
                            <td>'.$pjrl_estado_civil.'</td>
                            <td><b>Nacionalidad</b></td>
                            <td>'.$pjrl_nacionalidada.'</td>
                        </tr>
                        <tr>
                            <td><b>Fecha de nacimiento</b></td>
                            <td>'.$pjrl_fecha_nacimiento.'</td>
                            <td><b>Dirección</b></td>
                            <td>'.$pjrl_direccion.'</td>
                        </tr>
                        <tr>
                            <td><b>Correo Electronico</b></td>
                            <td>'.$pjrl_correo.'</td>
                            <td><b>Profesión.</b></td>
                            <td>'.$pjrl_profesion.'</td>
                        </tr>
                        <tr>
                            <td><b>Lugar de trabajo.</b></td>
                            <td>'.$pjrl_lugar_trabajo.'</td>
                            <td><b>Teléfono.</b></td>
                            <td>'.$pjrl_telefono.'</td>
                        </tr>
                    </table>
                    <br>

                    <table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="6" style="background-color:blue; color: white; text-align: center;"><b>JUNTA DIRECTIVA Y DIGNATARIOS..</b></td>
                        </tr>
                        <tr>
                            <td><b>Nombre Completo</b></td>
                            <td>Cargo</td>
                            <td>Nacionalidad</td>
                            <td>I.D.</td>
                            <td>Correo</td>
                            <td>Dirección</td>
                        </tr>';

                        foreach ($junta_directiva_dignatarios as $key => $value) {

                        $html.='<tr>
                                    <td>'.$value['pjdd_nombre_completo'].'</td>
                                    <td>'.$value['pjdd_cargo'].'</td>
                                    <td>'.$value['pjdd_nacionalidad'].'</td>
                                    <td>'.$value['pjdd_id'].'</td>
                                    <td>'.$value['pjdd_correo'].'</td>
                                    <td>'.$value['pjdd_direccion'].'</td>
                                </tr>';

                        }

                        $html.='</table>
                    <br>

                    <table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="6" style="background-color:blue; color: white; text-align: center;"><b>APODERADOS.</b></td>
                        </tr>
                        <tr>
                            <td>Nombre Completo</td>
                            <td>Cargo</td>
                            <td>Nacionalidad</td>
                            <td>I.D.</td>
                            <td>Correo</td>
                            <td>Dirección</td>
                        </tr>';

                        foreach ($obtener_registros_apot as $key => $value) {

                        $html.='<tr>
                                    <td>'.$value['pja_nombre_completo'].'</td>
                                    <td>'.$value['pja_cargo'].'</td>
                                    <td>'.$value['pja_nacionalidad'].'</td>
                                    <td>'.$value['pja_id'].'</td>
                                    <td>'.$value['pja_correo'].'</td>
                                    <td>'.$value['pja_direccion'].'</td>
                                </tr>';

                        }

                        $html.='</table>
                    <br>';

                foreach ($propietario as $key => $value) { 

                    $pjpr_publica_privada = $value['pjpr_publica_privada'];
                    $pjpr_licita_estado = $value['pjpr_licita_estado'];
                    $pjpr_licita_pais = $value['pjpr_licita_pais'];
                    $pjpr_cotiza_bolsa = $value['pjpr_cotiza_bolsa'];
                    $pjpr_descripcion_cotiza_bolsa = $value['pjpr_descripcion_cotiza_bolsa'];
                    $pjpr_nombre_bolsa_ticker = $value['pjpr_nombre_bolsa_ticker'];
                 } 
                 
                 if (!isset($pjpr_publica_privada)) {
                    $pjpr_publica_privada = '';
                 }

                 if (!isset($pjpr_licita_estado)) {
                    $pjpr_licita_estado = '';
                 }

                 if (!isset($pjpr_licita_pais)) {
                    $pjpr_licita_pais = '';
                 }else{
                    $nacionalidad = $cCclienteController->obtener_pais_id($pjpr_licita_pais);
                    foreach ($nacionalidad as $key => $valuePais) {
                        $pjpr_licita_pais = $valuePais['nombre'];
                    }  
                 }

                 if (!isset($pjpr_cotiza_bolsa)) {
                    $pjpr_cotiza_bolsa = '';
                 }

                 if (!isset($pjpr_descripcion_cotiza_bolsa)) {
                    $pjpr_descripcion_cotiza_bolsa = '';
                 }

                 if (!isset($pjpr_nombre_bolsa_ticker)) {
                    $pjpr_nombre_bolsa_ticker = '';
                 }

                    $html .='<table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>PROPIETARIOS.</b></td>
                        </tr>
                        <tr>
                            <td>¿ESTA EMPRESA ES PÚBLICA O PRIVADA?</td>
                            <td>'.$pjpr_publica_privada.'</td>
                            <td>¿ESTA EMPRESA LICITA CON EL ESTADO?</td>
                            <td>'.$pjpr_licita_estado.'</td>
                        </tr>
                        <tr>
                            <td>País</td>
                            <td>'.$pjpr_licita_pais.'</td>
                            <td>¿LAS ACCIONES DE ESTA EMPRESA COTIZAN EN UNA BOLSA DE VALORES?</td>
                            <td>'.$pjpr_cotiza_bolsa.'</td>
                        </tr>
                        <tr>
                            <td>SI LA RESPUESTA ES AFIRMATIVA INDIQUE:</td>
                            <td>'.$pjpr_descripcion_cotiza_bolsa.'</td>
                            <td>NOMBRE DE LA BOLSA DE VALORES Y TICKER:</td>
                            <td>'.$pjpr_nombre_bolsa_ticker.'</td>
                        </tr>
                    </table>
                    <br>';

                    foreach ($declaracion_accionistas as $key => $value) { 

                        $pjda_nombre_completo_accionista = $value['pjda_nombre_completo_accionista'];
                        $pjda_participacion_accionaria = $value['pjda_participacion_accionaria'];

                    } 
                    
                    if (!isset($pjda_nombre_completo_accionista)) {
                        $pjda_nombre_completo_accionista = '';
                    }

                    if (!isset($pjda_participacion_accionaria)) {
                        $pjda_participacion_accionaria = '';
                    }

                    $html .= '<table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>DECLARACIÓN DE ACCIONISTAS.</b></td>
                        </tr>
                        <tr>
                            <td>Nombre del accionista(Natural o Jurídica).</td>
                            <td>'.$pjda_nombre_completo_accionista.'</td>
                            <td>Participación Accionarias</td>
                            <td>'.$pjda_participacion_accionaria.'</td>
                        </tr>
                    </table>
                    <br> ';

            foreach ($beneficiarioFinal as $key => $value) { 

                $pjbf_transpaso_cliente_tercero = $value['pjbf_transpaso_cliente_tercero'];
                $pjbf_relacion_cliente = $value['pjbf_relacion_cliente'];
                $pjbf_primer_nombre = $value['pjbf_primer_nombre'];
                $pjbf_segundo_nomnbre = $value['pjbf_segundo_nomnbre'];
                $pjbf_apellido_parterno = $value['pjbf_apellido_parterno'];
                $pjbf_apellido_materno = $value['pjbf_apellido_materno'];
                $pjbf_apellido_casada = $value['pjbf_apellido_casada'];
                $pjbf_pais_nacimiento = $value['pjbf_pais_nacimiento'];
                $pjbf_fecha_nacimiento = $value['pjbf_fecha_nacimiento'];
                $pjbf_genero = $value['pjbf_genero'];
                $pjbf_nacionalidad = $value['pjbf_nacionalidad'];
                $pjbf_estado_civil = $value['pjbf_estado_civil'];
                $pjbf_cedula_pasaporte = $value['pjbf_cedula_pasaporte'];
                $pjbf_pais_residencia = $value['pjbf_pais_residencia'];
                $pjbf_direccion_residencia = $value['pjbf_direccion_residencia'];
                $pjbf_pais_residencia_fiscal = $value['pjbf_pais_residencia_fiscal'];
                $pjbf_correo = $value['pjbf_correo'];
                $pjbf_telefono_residencial = $value['pjbf_telefono_residencial'];
                $pjbf_telefono_celular = $value['pjbf_telefono_celular'];
                $pjbf_profesion = $value['pjbf_profesion'];
                $pjbf_ocupacion = $value['pjbf_ocupacion'];
                $pjbf_lugar_trabajo = $value['pjbf_lugar_trabajo'];
                $pjbf_direccion_trabajo = $value['pjbf_direccion_trabajo'];

             } 
             
             if (!isset($pjbf_transpaso_cliente_tercero)) {
                $pjbf_transpaso_cliente_tercero = '';
             }
             
             if (!isset($pjbf_relacion_cliente)) {
                $pjbf_relacion_cliente = '';
             }

             if (!isset($pjbf_primer_nombre)) {
                $pjbf_primer_nombre = '';
             }

             if (!isset($pjbf_segundo_nomnbre)) {
                $pjbf_segundo_nomnbre = '';
             }

             if (!isset($pjbf_apellido_parterno)) {
                $pjbf_apellido_parterno = '';
             }

             if (!isset($pjbf_apellido_materno)) {
                $pjbf_apellido_materno = '';
             }

             if (!isset($pjbf_apellido_casada)) {
                $pjbf_apellido_casada = '';
             }

             if (!isset($pjbf_pais_nacimiento)) {
                $pjbf_pais_nacimiento = '';
             }else{
                $nacionalidad = $cCclienteController->obtener_pais_id($pjbf_pais_nacimiento);
                foreach ($nacionalidad as $key => $valuePais) {
                    $pjbf_pais_nacimiento = $valuePais['nombre'];
                }  
            }

             if (!isset($pjbf_fecha_nacimiento)) {
                $pjbf_fecha_nacimiento = '';
             }
             
             if (!isset($pjbf_genero)) {
                $pjbf_genero = '';
             }

             if (!isset($pjbf_nacionalidad)) {
                $pjbf_nacionalidad = '';
             }else{
                $nacionalidad = $cCclienteController->obtener_pais_id($pjbf_nacionalidad);
                foreach ($nacionalidad as $key => $valuePais) {
                    $pjbf_nacionalidad = $valuePais['nombre'];
                }  
            }

             if (!isset($pjbf_estado_civil)) {
                $pjbf_estado_civil = '';
             }

             if (!isset($pjbf_cedula_pasaporte)) {
                $pjbf_cedula_pasaporte = '';
             }

             if (!isset($pjbf_pais_residencia)) {
                $pjbf_pais_residencia = '';
             }else{
                $nacionalidad = $cCclienteController->obtener_pais_id($pjbf_pais_residencia);
                foreach ($nacionalidad as $key => $valuePais) {
                    $pjbf_pais_residencia = $valuePais['nombre'];
                }  
            }

             if (!isset($pjbf_direccion_residencia)) {
                $pjbf_direccion_residencia = '';
             }

             if (!isset($pjbf_pais_residencia_fiscal)) {
                $pjbf_pais_residencia_fiscal = '';
             }else{
                $nacionalidad = $cCclienteController->obtener_pais_id($pjbf_pais_residencia_fiscal);
                foreach ($nacionalidad as $key => $valuePais) {
                    $pjbf_pais_residencia_fiscal = $valuePais['nombre'];
                }  
            }

             if (!isset($pjbf_correo)) {
                $pjbf_correo = '';
             } 

             if (!isset($pjbf_telefono_residencial)) {
               $pjbf_telefono_residencial = '';
             }

             if (!isset($pjbf_telefono_celular)) {
                $pjbf_telefono_celular = '';
             }

             if (!isset($pjbf_profesion)) {
                $pjbf_profesion = '';
             }
             
             if (!isset($pjbf_ocupacion)) {
                $pjbf_ocupacion = '';
             }

             if (!isset($pjbf_lugar_trabajo)) {
                $pjbf_lugar_trabajo = '';
             }

             if (!isset($pjbf_direccion_trabajo)) {
                $pjbf_direccion_trabajo = '';
             }

             if($pjbf_fecha_nacimiento=='1970-01-01'){ $pjbf_fecha_nacimiento = ''; } else{ $pjbf_fecha_nacimiento = $value['pjbf_fecha_nacimiento']; }
                    
                    $html .='<table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>BENEFICIARIO FINAL</b></td>
                        </tr>
                        <tr>
                            <td><b>INDIQUE SI EL AUTO SERÁ TRASPASADO A NOMBRE DEL CLIENTE O DE UN TERCERO. ?</b></td>
                            <td>'.$pjbf_transpaso_cliente_tercero.'</td>
                            <td><b>EN ESTE ÚLTIMO CASO, COMPLETE CON LOS DATOS DEL BENEFICIARIO FINAL DE LA TRANSACCIÓN. DE SER PERSONA JURÍDICA, UTILIZAR EL FORMULARIO DE DEBIDA DILIGENCIA PERSONA JURÍDICA PCR-CUMP-FORM02 Y LA DECLARACIÓN JURADA DE BENEFICIARIOS FINALES DE LAS PERSONAS JURÍDICAS.</b></td>
                            <td>'.$pjbf_relacion_cliente.'</td>
                        </tr>
                        <tr>
                            <td><b>Primer Nombre</b></td>
                            <td>'.$pjbf_primer_nombre.'</td>
                            <td><b>Segundo Nombre</b></td>
                            <td>'.$pjbf_segundo_nomnbre.'</td>
                        </tr>
                        <tr>
                            <td><b>Apellido Paterno</b></td>
                            <td>'.$pjbf_apellido_parterno.'</td>
                            <td><b>Apellido Materno</b></td>
                            <td>'.$pjbf_apellido_materno.'</td>
                        </tr>
                        <tr>
                            <td><b>Apellido de Casada</b></td>
                            <td>'.$pjbf_apellido_casada.'</td>
                            <td><b>País de Naciemiento</b></td>
                            <td>'.$pjbf_pais_nacimiento.'</td>
                        </tr>
                        <tr>
                            <td><b>Fecha Nacimiento</b></td>
                            <td>'.$pjbf_fecha_nacimiento.'</td>
                            <td><b>Género</b></td>
                            <td>'.$pjbf_genero.'</td>
                        </tr>
                        <tr>
                            <td><b>Nacionalidad</b></td>
                            <td>'.$pjbf_nacionalidad.'</td>   
                            <td><b>Estado Civil</b></td>
                            <td>'.$pjbf_estado_civil.'</td>
                        </tr>
                        <tr>
                            <td><b>Cédula/N# Pasaporte</b></td>
                            <td>'.$pjbf_cedula_pasaporte.'</td>
                            <td><b>País de Residencia</b></td>
                            <td>'.$pjbf_pais_residencia.'</td>
                        </tr>
                        <tr>
                            <td><b>Dirección Residencial</b></td>
                            <td>'.$pjbf_direccion_residencia.'</td>
                            <td><b>País de Residencia Fiscal</b></td>
                            <td>'.$pjbf_pais_residencia_fiscal.'</td>
                        </tr>
                        <tr>
                            <td><b>Correo Electrónico</b></td>
                            <td>'.$pjbf_correo.'</td>
                            <td><b>Teléfono Residencial</b></td>
                            <td>'.$pjbf_telefono_residencial.'</td>
                        </tr>
                        <tr>
                            <td><b>Teléfono Móvil</b></td>
                            <td>'.$pjbf_telefono_celular.'</td>
                            <td><b>Profesión</b></td>
                            <td>'.$pjbf_profesion.'</td>
                        </tr>
                        <tr>
                            <td><b>Ocupación</b></td>
                            <td>'.$pjbf_ocupacion.'</td>
                            <td><b>Lugar de trabajo</b></td>
                            <td>'.$pjbf_lugar_trabajo.'</td>
                        </tr>
                        <tr>
                            <td><b>Dirección de trabajo</b></td>
                            <td>'.$pjbf_direccion_trabajo.'</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <br> '; 

                    foreach ($tercerosAutorizados as $key => $value) { 

                        $pjtu_relacion_cliente = $value['pjtu_relacion_cliente'];
                        $pjtu_primer_nombre = $value['pjtu_primer_nombre'];
                        $pjtu_segundo_nomnbre = $value['pjtu_segundo_nomnbre'];
                        $pjtu_apellido_parterno = $value['pjtu_apellido_parterno'];
                        $pjtu_apellido_materno = $value['pjtu_apellido_materno'];
                        $pjtu_apellido_casada = $value['pjtu_apellido_casada'];
                        $pjtu_pais_nacimiento = $value['pjtu_pais_nacimiento'];
                        $pjtu_fecha_nacimiento = $value['pjtu_fecha_nacimiento'];
                        $pjtu_genero = $value['pjtu_genero'];
                        $pjtu_nacionalidad = $value['pjtu_nacionalidad'];
                        $pjtu_estado_civil = $value['pjtu_estado_civil'];
                        $pjtu_cedula_pasaporte = $value['pjtu_cedula_pasaporte'];
                        $pjtu_pais_residencia = $value['pjtu_pais_residencia'];
                        $pjtu_direccion_residencia = $value['pjtu_direccion_residencia'];
                        $pjtu_pais_residencia_fiscal = $value['pjtu_pais_residencia_fiscal'];
                        $pjtu_correo = $value['pjtu_correo'];
                        $pjtu_telefono_residencial = $value['pjtu_telefono_residencial'];
                        $pjtu_telefono_celular = $value['pjtu_telefono_celular'];
                        $pjtu_profesion = $value['pjtu_profesion'];
                        $pjtu_ocupacion = $value['pjtu_ocupacion'];
                        $pjtu_lugar_trabajo = $value['pjtu_lugar_trabajo'];
                        $pjtu_direccion_trabajo = $value['pjtu_direccion_trabajo'];

                 } 

                 if (!isset($pjtu_relacion_cliente)) {
                    $pjtu_relacion_cliente = '';
                 }

                 if (!isset($pjtu_primer_nombre)) {
                    $pjtu_primer_nombre = '';
                 }

                 if (!isset($pjtu_segundo_nomnbre)) {
                    $pjtu_segundo_nomnbre = '';
                 }

                 if (!isset($pjtu_apellido_parterno)) {
                    $pjtu_apellido_parterno = '';
                 }

                 if (!isset($pjtu_apellido_materno)) {
                    $pjtu_apellido_materno = '';
                 }

                 if (!isset($pjtu_apellido_casada)) {
                    $pjtu_apellido_casada = '';
                 }

                 if (!isset($pjtu_pais_nacimiento)) {
                    $pjtu_pais_nacimiento = '';
                 }

                 if (!isset($pjtu_fecha_nacimiento)) {
                    $pjtu_fecha_nacimiento = '';
                 }

                 if (!isset($pjtu_genero)) {
                    $pjtu_genero = '';
                 }

                 if (!isset($pjtu_nacionalidad)) {
                    $pjtu_nacionalidad = '';
                 }

                 if (!isset($pjtu_estado_civil)) {
                    $pjtu_estado_civil = '';
                 }

                 if (!isset($pjtu_cedula_pasaporte)) {
                    $pjtu_cedula_pasaporte = '';
                 }

                 if (!isset($pjtu_pais_residencia)) {
                    $pjtu_pais_residencia = '';
                 }

                 if (!isset($pjtu_direccion_residencia)) {
                    $pjtu_direccion_residencia = '';
                 }

                 if (!isset($pjtu_pais_residencia_fiscal)) {
                    $pjtu_pais_residencia_fiscal = '';
                 }

                 if (!isset($pjtu_correo)) {
                    $pjtu_correo = '';
                 }

                 if (!isset($pjtu_telefono_residencial)) {
                    $pjtu_telefono_residencial = '';
                 }

                 if (!isset($pjtu_telefono_celular)) {
                    $pjtu_telefono_celular = '';
                 }

                 if (!isset($pjtu_profesion)) {
                    $pjtu_profesion = '';
                 }

                 if (!isset($pjtu_ocupacion)) {
                    $pjtu_ocupacion = '';
                 }

                 if (!isset($pjtu_lugar_trabajo)) {
                    $pjtu_lugar_trabajo = '';
                 }

                 if (!isset($pjtu_direccion_trabajo)) {
                    $pjtu_direccion_trabajo = '';
                 }

                 if($pjtu_fecha_nacimiento=='1970-01-01'){ $pjtu_fecha_nacimiento = ''; } else{ $pjtu_fecha_nacimiento = $value['pjtu_fecha_nacimiento']; }

                   $html.=' <table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>TERCEROS AUTORIZADOS</b></td>
                        </tr>
                        <tr>
                            <td><b>RELACIÓN CON EL CLIENTE.</b></td>
                            <td>'.$pjtu_relacion_cliente.'</td>
                            <td><b>Primer Nombre</b></td>
                            <td>'.$pjtu_primer_nombre.'</td>
                        </tr>
                        <tr>
                            <td><b>Segundo Nombre</b></td>
                            <td>'.$pjtu_segundo_nomnbre.'</td>
                            <td><b>Apellido Paterno</b></td>
                            <td>'.$pjtu_apellido_parterno.'</td>
                        </tr>
                        <tr>
                            <td><b>Apellido Materno</b></td>
                            <td>'.$pjtu_apellido_materno.'</td>
                            <td><b>Apellido de Casada</b></td>
                            <td>'.$pjtu_apellido_casada.'</td>
                        </tr>
                        <tr>
                            <td><b>País de Naciemiento</b></td>
                            <td>'.$pjtu_pais_nacimiento.'</td>
                            <td><b>Fecha Nacimiento</b></td>
                            <td>'.$pjtu_fecha_nacimiento.'</td>
                        </tr>
                        <tr>
                            <td><b>Género</b></td>
                            <td>'.$pjtu_genero.'</td>
                            <td><b>Nacionalidad</b></td>
                            <td>'.$pjtu_nacionalidad.'</td>
                        </tr>
                        <tr>
                            <td><b>Estado Civil</b></td>
                            <td>'.$pjtu_estado_civil.'</td>   
                            <td><b>Cédula/N# Pasaporte</b></td>
                            <td>'.$pjtu_cedula_pasaporte.'</td>
                        </tr>
                        <tr>
                            <td><b>País de Residencia</b></td>
                            <td>'.$pjtu_pais_residencia.'</td>
                            <td><b>Dirección Residencial</b></td>
                            <td>'.$pjtu_direccion_residencia.'</td>
                        </tr>
                        <tr>
                            <td><b>País de Residencia Fiscal</b></td>
                            <td>'.$pjtu_pais_residencia_fiscal.'</td>
                            <td><b>Correo Electrónico</b></td>
                            <td>'.$pjtu_correo.'</td>
                        </tr>
                        <tr>
                            <td><b>Teléfono Residencial</b></td>
                            <td>'.$pjtu_telefono_residencial.'</td>
                            <td><b>Teléfono Móvil</b></td>
                            <td>'.$pjtu_telefono_celular.'</td>
                        </tr>

                        <tr>
                            <td><b>Profesión</b></td>
                            <td>'.$pjtu_profesion.'</td>
                            <td><b>Ocupación</b></td>
                            <td>'.$pjtu_ocupacion.'</td>
                        </tr>
                        <tr>
                            <td><b>Lugar de trabajo</b></td>
                            <td>'.$pjtu_lugar_trabajo.'</td>
                            <td><b>Dirección de trabajo</b></td>
                            <td>'.$pjtu_direccion_trabajo.'</td>
                        </tr>
                    </table>
                    <br> ';

                    foreach ($expuestas as $key => $value) { 

                        $pjpx_relacion_directa = $value['pjpx_relacion_directa'];
                        $pjpx_nombre_completo = $value['pjpx_nombre_completo'];
                        $pjpx_cargo_actual = $value['pjpx_cargo_actual'];
                        $pjpx_fecha_cargo_actual = $value['pjpx_fecha_cargo_actual'];
                        $pjpx_cargo_anterior = $value['pjpx_cargo_anterior'];
                        $pjpx_fecha_cargo_anterior = $value['pjpx_fecha_cargo_anterior'];
                        $pjpx_pep_relacion_directa = $value['pjpx_pep_relacion_directa'];
                        $pjpx_nombre_completo_2 = $value['pjpx_nombre_completo_2'];
                        $pjpx_cargo_actual_2 = $value['pjpx_cargo_actual_2'];
                        $pjpx_fecha_cargo_actual_2 = $value['pjpx_fecha_cargo_actual_2'];
                        $pjpx_cargo_anterior_2 = $value['pjpx_cargo_anterior_2'];
                        $pjpx_fecha_cargo_anterior_2 = $value['pjpx_fecha_cargo_anterior_2'];
                        $pjpx_comentarios_2 = $value['pjpx_comentarios_2'];

                 } 

                 if (!isset($pjpx_relacion_directa)) {
                    $pjpx_relacion_directa='';
                 }

                 if (!isset($pjpx_nombre_completo)) {
                    $pjpx_nombre_completo='';
                 }

                 if (!isset($pjpx_cargo_actual)) {
                    $pjpx_cargo_actual='';
                 }

                 if (!isset($pjpx_fecha_cargo_actual)) {
                    $pjpx_fecha_cargo_actual='';
                 }
                 
                 if (!isset($pjpx_cargo_anterior)) {
                    $pjpx_cargo_anterior='';
                 }

                 if (!isset($pjpx_fecha_cargo_anterior)) {
                    $pjpx_fecha_cargo_anterior='';
                 }

                 if (!isset($pjpx_pep_relacion_directa)) {
                    $pjpx_pep_relacion_directa='';
                 }

                 if (!isset($pjpx_nombre_completo_2)) {
                    $pjpx_nombre_completo_2='';
                 }
                 if (!isset($pjpx_cargo_actual_2)) {
                    $pjpx_cargo_actual_2='';
                 }

                 if (!isset($pjpx_fecha_cargo_actual_2)) {
                    $pjpx_fecha_cargo_actual_2='';
                 }

                 if (!isset($pjpx_cargo_anterior_2)) {
                    $pjpx_cargo_anterior_2='';
                 }

                 if (!isset($pjpx_fecha_cargo_anterior_2)) {
                    $pjpx_fecha_cargo_anterior_2='';
                 }
                 
                 if (!isset($pjpx_comentarios_2)) {
                    $pjpx_comentarios_2='';
                 }

                 if($pjpx_fecha_cargo_actual=='1970-01-01'){ $pjpx_fecha_cargo_actual = ''; } else{ $pjpx_fecha_cargo_actual = $value['pjpx_fecha_cargo_actual']; }
                 if($pjpx_fecha_cargo_anterior=='1970-01-01'){ $pjpx_fecha_cargo_anterior = ''; } else{ $pjpx_fecha_cargo_anterior = $value['pjpx_fecha_cargo_anterior']; }
                 if($pjpx_fecha_cargo_actual_2=='1970-01-01'){ $pjpx_fecha_cargo_actual_2 = ''; } else{ $pjpx_fecha_cargo_actual_2 = $value['pjpx_fecha_cargo_actual_2']; }
                 if($pjpx_fecha_cargo_anterior_2=='1970-01-01'){ $pjpx_fecha_cargo_anterior_2 = ''; } else{ $pjpx_fecha_cargo_anterior_2 = $value['pjpx_fecha_cargo_anterior_2']; }

                    $html .='<table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>PERSONAS EXPUESTAS POLÍTICAMENTE</b></td>
                        </tr>
                        <tr>
                            <td><b>¿ES EL REPRESENTANTE LEGAL, APODERADO, DIRECTOR O DIGNATARIO UN PEP, FAMILIAR CERCANO O ESTRECHO COLABORADOR DE UN PEP?</b></td>
                            <td>'.$pjpx_relacion_directa.'</td>
                            <td><b>Nombre completo</b></td>
                            <td>'.$pjpx_nombre_completo.'</td>
                        </tr>
                        <tr>
                            <td><b>Cargo actual</b></td>
                            <td>'.$pjpx_cargo_actual.'</td>
                            <td><b>Fecha</b></td>
                            <td>'.$pjpx_fecha_cargo_actual.'</td>
                        </tr>
                        <tr>
                            <td><b>Cargo Anterior</b></td>
                            <td>'.$pjpx_cargo_anterior.'</td>
                            <td><b>Fecha anterior</b></td>
                            <td>'.$pjpx_fecha_cargo_anterior.'</td>
                        </tr>
                        <tr>
                            <td><b>¿ES EL BENEFICIARIO FINAL UN PEP, FAMILIAR CERCANO O ESTRECHO COLABORADOR DE UN PEP?</b></td>
                            <td colspan="3">'.$pjpx_pep_relacion_directa.'</td>
                        </tr>
                        <tr>
                            <td><b>Nombre completo</b></td>
                            <td>'.$pjpx_nombre_completo_2.'</td>
                            <td><b>Cargo actual</b></td>
                            <td>'.$pjpx_cargo_actual_2.'</td>
                        </tr>
                        <tr>
                            <td><b>Fecha</b></td>
                            <td>'.$pjpx_fecha_cargo_actual_2.'</td>   
                            <td><b>Cargo Anterior</b></td>
                            <td>'.$pjpx_cargo_anterior_2.'</td>
                        </tr>
                        <tr>
                            <td><b>Fecha anterior</b></td>
                            <td>'.$pjpx_fecha_cargo_anterior_2.'</td>
                            <td><b>Comentarios</b></td>
                            <td>'.$pjpx_comentarios_2.'</td>
                        </tr>
                    </table>
                    <br>';

                foreach ($referencias as $key => $value) { 

                    $pjrf_nombre_razon_social = $value['pjrf_nombre_razon_social'];
                    $pjrf_actividad = $value['pjrf_actividad'];
                    $pjrf_relacion = $value['pjrf_relacion'];
                    $pjrf_telefono = $value['pjrf_telefono'];
                    $pjrf_correo_electronico = $value['pjrf_correo_electronico'];
                 } 

                 if (isset($pjrf_nombre_razon_social)) {
                    $pjrf_nombre_razon_social = '';
                 }

                 if (isset($pjrf_actividad)) {
                    $pjrf_actividad = '';
                 }

                 if (isset($pjrf_relacion)) {
                    $pjrf_relacion = '';
                 }

                 if (isset($pjrf_telefono)) {
                    $pjrf_telefono = '';
                 }

                 if (isset($pjrf_correo_electronico)) {
                    $pjrf_correo_electronico = '';
                 }

                    $html .='<table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>REFERENCIAS</b></td>
                        </tr>
                        <tr>
                            <td><b>Nombre o razón social</b></td>
                            <td>'.$pjrf_nombre_razon_social.'</td>
                            <td><b>Actividad</b></td>
                            <td>'.$pjrf_actividad.'</td>
                        </tr>
                        <tr>
                            <td><b>Relacón</b></td>
                            <td>'.$pjrf_relacion.'</td>
                            <td><b>Teléfono</b></td>
                            <td>'.$pjrf_telefono.'</td>
                        </tr>
                        <tr>
                            <td><b>Correo Electrónico</b></td>
                            <td>'.$pjrf_correo_electronico.'</td>
                            <td></td>
                            <td></td>
                        </tr>
                       
                    </table>
                    <br>
                    <br>

                        <table class="table" style="width:100%; font-size: 10px;">
                            <tr>
                                <td>____________________________________________</td>
                                <td>____________________________________________</td>
                                <td>____________________________________________</td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">Firma del cliente</td>
                                <td style="text-align: center;">Firma del Ejecutivo de ventas</td>
                                <td style="text-align: center;">Firma del encargado de la sucursal</td>
                            </tr>
                        </table>

                </div>
            </div>
        </div>';

$mpdf->WriteHTML($html);
$mpdf->Output();


