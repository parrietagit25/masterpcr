<?php require_once '../../vendor/autoload.php'; ?>
<?php $modalDocu = 1; ?>
<?php require_once("../../controladores/CcClienteController.php"); ?>
<?php $cCclienteController = new CcclienteController(); ?>
<?php $id = $_GET['id']; ?>
<?php 

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
$ocupacionales = $cCclienteController->obtenerOcupacionales($id);
$declaracion = $cCclienteController->obtenerDeclaracion($id);
$referencias = $cCclienteController->obtenerReferencias($id);
$beneficiario = $cCclienteController->obntenerBeneficiario($id);
$terceros = $cCclienteController->obtenerTerceros($id);
$expuestas = $cCclienteController->obtenerExpuestas($id);
$declaracion_jurada = $cCclienteController->obtenerDeclaracionJurada($id);
$documentos_adjuntos = $cCclienteController->ontenerDocumentosAdjuntos($id);
$uso_interno = $cCclienteController->obtenerUsoInterno($id);
$todos_adjuntos = $cCclienteController->obtenerTodosAdjuntos($id);



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

                    foreach ($generales as $key => $value) { 

                        // pais de nacimiento
                        $pais_nacimiento = $cCclienteController->obtener_pais_id($value['fg_pais_nacimiento']);
                        foreach ($pais_nacimiento as $key => $valuePais) {
                            $pais_n = $valuePais['nombre'];
                        }  

                        if(!isset($pais_n)){
                            $pais_n = '';
                        }

                        // pais de residencia
                        $pais_residencia = $cCclienteController->obtener_pais_id($value['fg_pais_residencia']);
                        foreach ($pais_residencia as $key => $valuePais) {
                            $pais_r = $valuePais['nombre'];
                        }  

                        if(!isset($pais_naci)){
                            $pais_naci = '';
                        }

                        // Nacionalidad
                        $nacionalidad = $cCclienteController->obtener_pais_id($value['fg_nacionalidad']);
                        foreach ($nacionalidad as $key => $valuePais) {
                            $pais_naci = $valuePais['nombre'];
                        }  

                        if(!isset($pais_naci)){
                            $pais_naci = '';
                        }

                        // Genero
                        $genero_descripcion = $cCclienteController->obtener_codigo_id($value['fg_genero']);
                        foreach ($genero_descripcion as $key => $valueGenero) {
                            $genero_descripcion = $valueGenero['descripcion'];
                        }  

                        if(!isset($genero_descripcion)){
                            $genero_descripcion = '';
                        }

                        // Estado Civil
                        $estado_civil = $cCclienteController->obtener_codigo_id($value['fg_estado_civil']);
                        foreach ($estado_civil as $key => $valueGenero) {
                            $estado_civil_descripcion = $valueGenero['descripcion'];
                        } 

                        if(!isset($estado_civil_descripcion)){
                            $estado_civil_descripcion = '';
                        }

                        // pais de residencia fiscal

                        $residencia_fiscal = $cCclienteController->obtener_pais_id($value['fg_pais_residencia_fiscal']);
                        foreach ($residencia_fiscal as $key => $valuePais) {
                            $pais_rf = $valuePais['nombre'];
                        }  

                        if(!isset($pais_rf)){
                            $pais_rf = '';
                        }

                   $html .= '<table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="6" style="background-color:blue; color: white; text-align: center;"><b>Datos Generales</b></td>
                        </tr>
                        <tr>
                            <td><b>PRIMER NOMBRE</b></td>
                            <td>'.$value['fg_primer_nombre'].'</td>
                            <td><b>SEGUNDO NOMBRE</b></td>
                            <td>'.$value['fg_segundo_nombre'].'</td>
                            <td><b>APELLIDO PATERNO</b></td>
                            <td>'.$value['fg_apellido_paterno'].'</td>
                        </tr>
                        <tr>
                            <td><b>APELLIDO MATERNO</b></td>
                            <td>'.$value['fg_apellido_materno'].'</td>
                            <td><b>APELLIDO DE CASADA</b></td>
                            <td>'.$value['fg_apellido_casada'].'</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>PAÍS DE NACIMIENTO</b></td>
                            <td>'.$pais_n.'</td>
                            <td></td>
                            <td></td>
                            <td><b>FECHA DE NACIMIENTO</b></td>
                            <td>'.$value['fg_fecha_nacimiento'].'</td>
                        </tr>
                        <tr>
                            <td><b>NACIONALIDAD</b></td>
                            <td>'.$pais_naci.'</td>
                            <td></td>
                            <td></td>
                            <td><b>GÉNERO</b></td>
                            <td>'.$genero_descripcion.'</td>
                        </tr>
                        <tr>
                            <td><b>CÉDULA / N° PASAPORTE</b></td>
                            <td>'.$value['fg_cedula'].'</td>
                            <td></td>
                            <td></td>
                            <td><b>ESTADO CIVIL</b></td>
                            <td>'.$estado_civil_descripcion.'</td>
                        </tr>
                        <tr>
                            <td><b>PAÍS DE RESIDENCIA</b></td>
                            <td>'.$pais_r.'</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>PAÍS(ES) DE RESIDENCIA FISCAL</b></td>
                            <td>'.$pais_rf.'</td>
                            <td></td>
                            <td></td>
                            <td><b>DIRECCIÓN RESIDENCIAL</b></td>
                            <td>'.$value['fg_direccion_residencial'].'</td>
                        </tr>
                        <tr>
                            <td><b>CORREO ELECTRÓNICO</b></td>
                            <td>'.$value['fg_email'].'</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>TELÉFONO RESIDENCIAL</b></td>
                            <td>'.$value['fg_telefono_residencia'].'</td>
                            <td></td>
                            <td></td>
                            <td><b>TELÉFONO CELULAR</b></td>
                            <td>'.$value['fg_telefono_movil'].'</td>
                        </tr>
                    </table>
                    <br>';

                    }


        foreach ($ocupacionales as $key => $value) { 
 
            // profesion 
            $profesion = $cCclienteController->obtener_codigo_id($value['fo_profesion']);
            foreach ($profesion as $key => $valueProfesion) {
                $profesion_descripcion = $valueProfesion['descripcion'];
            }  

            if(!isset($profesion_descripcion)){
                $profesion_descripcion = '';
            }

            // ocupaciion 
            $ocupacion = $cCclienteController->obtener_codigo_id($value['fo_ocupacion']);
            foreach ($ocupacion as $key => $valueocupacion) {
                $ocupacion_descripcion = $valueocupacion['descripcion'];
            } 

            if(!isset($ocupacion_descripcion)){
                $ocupacion_descripcion = '';
            }

            $html .= '<table class="table" style="width:100%; font-size: 10px;" border="1">
                    <tr>
                        <td colspan="6" style="background-color:blue; color: white; text-align: center;"><b>Datos Ocupacionales</b></td>
                    </tr>
                    <tr>
                        <td><b>PROFESIÓN:</b></td>
                        <td>'.$profesion_descripcion.'</td>
                        <td><b>OCUPACIÓN:</b></td>
                        <td>'.$ocupacion_descripcion.'</td>
                    </tr>
                    <tr>
                        <td><b>LUGAR DE TRABAJO:</b></td>
                        <td>'.$value['fo_lugar_trabajo'].'</td>
                        <td><b>DIRECCIÓN DE TRABAJO:</b></td>
                        <td>'.$value['fo_direccion_trabajo'].'</td>
                    </tr>
                    <tr>
                        <td><b>CORREO ELECTRÓNICO DE TRABAJO:</b></td>
                        <td>'.$value['fo_correo_trabajo'].'</td>
                        <td><b>TELÉFONO DE TRABAJO:</b></td>
                        <td>'.$value['fo_telefono_trabajo'].'</td>
                    </tr>
                    <tr>
                        <td><b>NOMBRE DEL NEGOCIO (EMPRESARIOS E INDEPENDIENTES):</b></td>
                        <td>'.$value['fo_nombre_negocio'].'</td>
                        <td><b>LICITA CON EL ESTADO:</b></td>
                        <td>'.$value['fo_licita_estado'].'</td>
                    </tr>
                    <tr>
                        <td><b>AVISO DE OPERACIONES (EMPRESARIOS E INDEPENDIENTES):</b></td>
                        <td>'.$value['fo_aviso_operaciones'].'</td>
                        <td><b>EN CASO AFIRMATIVO, PAÍS O PAÍSES CON EL QUE LICITA:</b></td>
                        <td>'.$value['fo_pais_residencia_fiscal'].'</td>
                    </tr>
                    
                </table>
                <br>';

                }

        foreach ($declaracion as $key => $value) { 

            // actiividad principal 
            $actividad_principal_1 = $cCclienteController->obtener_codigo_id($value['fd_actividad_principal']);
            foreach ($actividad_principal_1 as $key => $valueProfesion) {
                $actividad_principal_des = $valueProfesion['descripcion'];
            }  

            if(!isset($actividad_principal_des)){
                $actividad_principal_des = '';
            }

            // otras fuentes 
            $otras_fuentes_1 = $cCclienteController->obtener_codigo_id($value['fd_otras_fuentes']);
            foreach ($otras_fuentes_1 as $key => $valueocupacion) {
                $otras_fuentes = $valueocupacion['descripcion'];
            }
            
            if(!isset($otras_fuentes)){
                $otras_fuentes = '';
            }
            
            // limite de compra 
            $limite_compra_1 = $cCclienteController->obtener_codigo_id($value['fd_limite_compra']);
            foreach ($limite_compra_1 as $key => $valueProfesion) {
                $limite_compra = $valueProfesion['descripcion'];
            }
            
            if(!isset($limite_compra)){
                $limite_compra = '';
            }
            
            // forma de pago 
            $forma_pago_1_1 = $cCclienteController->obtener_codigo_id($value['fd_forma_pago_1']);
            foreach ($forma_pago_1_1 as $key => $valueocupacion) {
                $forma_pago_1 = $valueocupacion['descripcion'];
            }
            
            if(!isset($forma_pago_1)){
                $forma_pago_1 = '';
            }
            
            // metodo de pago 1  
            $fd_metodo_pago_1_1 = $cCclienteController->obtener_codigo_id($value['fd_metodo_pago_1']);
            foreach ($fd_metodo_pago_1_1 as $key => $valueProfesion) {
                $fd_metodo_pago_1 = $valueProfesion['descripcion'];
            }
            
            if(!isset($fd_metodo_pago_1)){
                $fd_metodo_pago_1 = '';
            }

            // metodo de pago 2 
            $metodo_pago_2_1 = $cCclienteController->obtener_codigo_id($value['fd_metodo_pago_2']);
            foreach ($metodo_pago_2_1 as $key => $valueocupacion) {
                $metodo_pago_2 = $valueocupacion['descripcion'];
            } 

            if(!isset($metodo_pago_2)){
                $metodo_pago_2 = '';
            }

            $html .= '<table class="table" style="width:100%; font-size: 10px;" border="1">
                    <tr>
                        <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>Declaracion y origen de fondos</b></td>
                    </tr>
                    <tr>
                        <td colspan="4">DECLARO QUE LOS FONDOS PARA EFECTUAR LA TRANSACCIÓN DE COMPRAVENTA PROVIENEN DE FUENTES LÍCITAS Y PROPIAS DETALLADAS A 
                        CONTINUACIÓN Y QUE NO REALIZARÉ O ADMITIRÉ QUE SE EFECTÚEN PAGOS A NOMBRE MÍO O DE LA PERSONA QUE REPRESENTO CON FONDOS PROVENIENTES 
                        DE ACTIVIDADES ILÍCITAS, NI EFECTUARÉ TRANSACCIONES DESTINADAS A TALES ACTIVIDADES O A FAVOR DE PERSONAS RELACIONADAS A LAS MISMAS</td>
                    </tr>
                    <tr>
                        <td><b>ACTIVIDAD PRINCIPAL:</b></td>
                        <td>'.$actividad_principal_des.'</td>
                        <td><b>OTRAS FUENTES:</b></td>
                        <td>'.$otras_fuentes.'</td>
                    </tr>
                    <tr>
                        <td><b>LÍMITE DE COMPRA:</b></td>
                        <td>'.$limite_compra.'</td>
                        <td><b>FORMA DE PAGO: </b></td>
                        <td>'.$forma_pago_1.'</td>
                    </tr>
                    <tr>
                        <td><b>MÉTODO DE PAGO 1: </b></td>
                        <td>'.$fd_metodo_pago_1.'</td>
                        <td><b>MÉTODO DE PAGO 2:</b></td>
                        <td>'.$metodo_pago_2.'</td>
                    </tr>
                    
                </table>
                <br>';

                }

        foreach ($referencias as $key => $value) { 

            $html .= '<table class="table" style="width:100%; font-size: 10px;" border="1">
                    <tr>
                        <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>Referencias</b></td>
                    </tr>
                    <tr>
                        <td><b>REFERENCIAS BANCARIAS</b></td>
                        <td></td>
                        <td><b>NOMBRE O RAZÓN SOCIAL</b></td>
                        <td>'.$value['fr_razon_social_1'].'</td>
                    </tr>
                    <tr>
                        <td><b>ACTIVIDAD</b></td>
                        <td>'.$value['fr_actividad_1'].'</td>
                        <td><b>RELACIÓN CON CLIENTE</b></td>
                        <td>'.$value['fr_relacion_cliente_1'].'</td>
                    </tr>
                    <tr>
                        <td><b>TELÉFONO</b></td>
                        <td>'.$value['fr_telefono_1'].'</td>
                        <td><b>CORREO ELECTRÓNICO</b></td>
                        <td>'.$value['fr_correo_electronico_1'].'</td>
                    </tr>

                    <tr>
                        <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>Rerefencias personales o comerciales( clientes o proveedores)</b></td>
                    </tr>
                    <tr>
                        <td><b>REFERENCIAS BANCARIAS</b></td>
                        <td></td>
                        <td><b>NOMBRE O RAZÓN SOCIAL</b></td>
                        <td>'.$value['fr_razon_social_2'].'</td>
                    </tr>
                    <tr>
                        <td><b>ACTIVIDAD</b></td>
                        <td>'.$value['fr_actividad_2'].'</td>
                        <td><b>RELACIÓN CON CLIENTE</b></td>
                        <td>'.$value['fr_relacion_cliente_2'].'</td>
                    </tr>
                    <tr>
                        <td><b>TELÉFONO</b></td>
                        <td>'.$value['fr_telefono_2'].'</td>
                        <td><b>CORREO ELECTRÓNICO</b></td>
                        <td>'.$value['fr_correo_electronico_2'].'</td>
                    </tr>
                    
                </table>
                <br>';

                }

        foreach ($beneficiario as $key => $value) { 

            // pais de nacimiento
            $pais_nacimiento = $cCclienteController->obtener_pais_id($value['fb_pais_nacimiento']);
            foreach ($pais_nacimiento as $key => $valuePais) {
                $pais_nbf = $valuePais['nombre'];
            }  

            if(!isset($pais_nbf)){
                $pais_nbf = '';
            }

            // nacionalidad
            $nacionalidad = $cCclienteController->obtener_pais_id($value['fb_nacionaidad']);
            foreach ($nacionalidad as $key => $valuePais) {
                $nacionalidad_bf = $valuePais['nombre'];
            }  

            if(!isset($nacionalidad_bf)){
                $nacionalidad_bf = '';
            }

            // genero 
            $genero_1 = $cCclienteController->obtener_codigo_id($value['fb_genero']);
            foreach ($genero_1 as $key => $valueocupacion) {
                $genero_fb = $valueocupacion['descripcion'];
            } 

            if(!isset($genero_fb)){
                $genero_fb = '';
            }

            // estado civil 
            $estado_civil_1 = $cCclienteController->obtener_codigo_id($value['fb_estado_civil']);
            foreach ($estado_civil_1 as $key => $valueocupacion) {
                $estado_civil_fb = $valueocupacion['descripcion'];
            } 

            if(!isset($estado_civil_fb)){
                $estado_civil_fb = '';
            }

            // pais de recidencia
            $pais_residencia_1 = $cCclienteController->obtener_pais_id($value['fb_pais_residencia_fiscal']);
            foreach ($pais_residencia_1 as $key => $valuePais) {
                $pais_residencia_fb = $valuePais['nombre'];
            }  

            if(!isset($pais_residencia_fb)){
                $pais_residencia_fb = '';
            }

             // profesion 
             $profesion_1 = $cCclienteController->obtener_codigo_id($value['fb_profesion']);
             foreach ($profesion_1 as $key => $valueProfesion) {
                 $profesion_descripcion_1 = $valueProfesion['descripcion'];
             }  
 
             if(!isset($profesion_descripcion_1)){
                 $profesion_descripcion_1 = '';
             }
 
             // ocupaciion 
             $ocupacion_1 = $cCclienteController->obtener_codigo_id($value['fb_ocupacion']);
             foreach ($ocupacion_1 as $key => $valueocupacion) {
                 $ocupacion_descripcion_1 = $valueocupacion['descripcion'];
             } 
 
             if(!isset($ocupacion_descripcion_1)){
                 $ocupacion_descripcion_1 = '';
             }

            $html .= '<table class="table" style="width:100%; font-size: 10px;" border="1">
                        <tr>
                            <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>Beneficiario Final</b></td>
                        </tr>
                        <tr>
                            <td><b>RELACIÓN CON EL CLIENTE</b></td>
                            <td>'.$value['fb_relacion_familiar_tercero'].'</td>
                            <td><b>DETALLE RELACIÓN</b></td>
                            <td>'.$value['fb_relacion_detalle'].'</td>
                        </tr>
                        <tr>
                            <td><b>PRIMER NOMBRE</b></td>
                            <td>'.$value['fb_primer_nombre'].'</td>
                            <td><b>SEGUNDO NOMBRE</b></td>
                            <td>'.$value['fb_segundo_nombre'].'</td>
                        </tr>
                        <tr>
                            <td><b>APELLIDO PATERNO:</b></td>
                            <td>'.$value['fb_apellido_paterno'].'</td>
                            <td><b>APELLIDO MATERNO</b></td>
                            <td>'.$value['fb_apellido_materno'].'</td>
                        </tr>
                        <tr>
                            <td><b>APELLIDO DE CASADA:</b></td>
                            <td>'.$value['fb_apellido_casada'].'</td>
                            <td><b>PAIS DE NACIMIENTO</b></td>
                            <td>'.$pais_nbf.'</td>
                        </tr>
                        <tr>
                            <td><b>FECHA DE NACIMIENTO:</b></td>
                            <td>'.$value['fb_fecha_nacimiento'].'</td>
                            <td><b>NACINALIDAD</b></td>
                            <td>'.$nacionalidad_bf.'</td>
                        </tr>
                        <tr>
                            <td><b>GENERO:</b></td>
                            <td>'.$genero_fb.'</td>
                            <td><b>ESTADO CIVIL</b></td>
                            <td>'.$estado_civil_fb.'</td>
                        </tr>
                        <tr>
                            <td><b>IDENTIFICACION:</b></td>
                            <td>'.$value['fb_identificacion'].'</td>
                            <td><b>PAIS DE RECIDENCIA</b></td>
                            <td>'.$pais_residencia_fb.'</td>
                        </tr>
                        <tr>
                            <td><b>DIRECION DE RESIDENCIA:</b></td>
                            <td>'.$value['fb_direccion_residencial'].'</td>
                            <td><b>PAIS DE RECIDENCIA FISCAL</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>EMAIL:</b></td>
                            <td>'.$value['fb_email'].'</td>
                            <td><b>TELEFONO DE RECIDENCIA</b></td>
                            <td>'.$value['fb_telefono_residencia'].'</td>
                        </tr>
                        <tr>
                            <td><b>TELEFONO MOVIL:</b></td>
                            <td>'.$value['fb_telefono_movil'].'</td>
                            <td><b>PROFESION</b></td>
                            <td>'.$profesion_descripcion_1.'</td>
                        </tr>
                        <tr>
                            <td><b>OCUPACION:</b></td>
                            <td>'.$ocupacion_descripcion_1.'</td>
                            <td><b>LUGAR DE TRABAJO</b></td>
                            <td>'.$value['fb_lugar_trabajo'].'</td>
                        </tr>
                        <tr>
                            <td><b>DIRECCION DE TRABAJO:</b></td>
                            <td>'.$value['fb_direccion_trabajo'].'</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <br>';
                }

    foreach ($terceros as $key => $value) { 

        // pais de nacimiento
        $pais_nacimiento = $cCclienteController->obtener_pais_id($value['ft_pais_nacimiento']);
        foreach ($pais_nacimiento as $key => $valuePais) {
            $pais_nbft = $valuePais['nombre'];
        }  

        if(!isset($pais_nbft)){
            $pais_nbft = '';
        }

        // nacionalidad
        $nacionalidad = $cCclienteController->obtener_pais_id($value['ft_nacionaidad']);
        foreach ($nacionalidad as $key => $valuePais) {
            $nacionalidad_bft = $valuePais['nombre'];
        }  

        if(!isset($nacionalidad_bft)){
            $nacionalidad_bft = '';
        }

        // genero 
        $genero_1_1 = $cCclienteController->obtener_codigo_id($value['ft_genero']);
        foreach ($genero_1_1 as $key => $valueocupacion) {
            $genero_ft = $valueocupacion['descripcion'];
        } 

        if(!isset($genero_ft)){
            $genero_ft = '';
        }

        // estado civil 
        $estado_civil_1 = $cCclienteController->obtener_codigo_id($value['ft_estado_civil']);
        foreach ($estado_civil_1 as $key => $valueocupacion) {
            $estado_civil_ft = $valueocupacion['descripcion'];
        } 

        if(!isset($estado_civil_ft)){
            $estado_civil_ft = '';
        }

        // pais de recidencia
        $pais_residencia_1 = $cCclienteController->obtener_pais_id($value['ft_pais_residencia_fiscal']);
        foreach ($pais_residencia_1 as $key => $valuePais) {
            $pais_residencia_ft = $valuePais['nombre'];
        }  

        if(!isset($pais_residencia_ft)){
            $pais_residencia_ft = '';
        }

        // pais de recidencia fiscal
        $pais_residencia__fiscal_1 = $cCclienteController->obtener_pais_id($value['ft_pais_residencia_fiscal']);
        foreach ($pais_residencia__fiscal_1 as $key => $valuePais) {
            $pais_residencia_fiscal_ft = $valuePais['nombre'];
        }  

        if(!isset($pais_residencia_fiscal_ft)){
            $pais_residencia_fiscal_ft = '';
        }

        // profesion 
        $profesion_1 = $cCclienteController->obtener_codigo_id($value['ft_profesion']);
        foreach ($profesion_1 as $key => $valueProfesion) {
            $profesion_descripcion_1_ft = $valueProfesion['descripcion'];
        }  

        if(!isset($profesion_descripcion_1_ft)){
            $profesion_descripcion_1_ft = '';
        }

        // ocupaciion 
        $ocupacion_1 = $cCclienteController->obtener_codigo_id($value['ft_ocupacion']);
        foreach ($ocupacion_1 as $key => $valueocupacion) {
            $ocupacion_descripcion_1_ft = $valueocupacion['descripcion'];
        } 

        if(!isset($ocupacion_descripcion_1_ft)){
            $ocupacion_descripcion_1_ft = '';
        }

        $html .= '<table class="table" style="width:100%; font-size: 10px;" border="1">
                    <tr>
                        <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>TERCEROS AUTORIZADOS</b></td>
                    </tr>
                    <tr>
                        <td><b>CLIENTE / TERCERO</b></td>
                        <td>'.$value['ft_cliete_tercero'].'</td>
                        <td><b>FAMILIAR / TERCERO</b></td>
                        <td>'.$value['ft_relacion_familiar_tercero'].'</td>
                    </tr>
                    <tr>
                        <td><b>DETALLE DE LA RELACION</b></td>
                        <td>'.$value['ft_relacion_detalle'].'</td>
                        <td><b>PRIMER NOMBRE</b></td>
                        <td>'.$value['ft_primer_nombre'].'</td>
                    </tr>
                    <tr>
                        <td><b>SEGUNDO NOMBRE:</b></td>
                        <td>'.$value['ft_segundo_nombre'].'</td>
                        <td><b>APELLIDO PATERNO</b></td>
                        <td>'.$value['ft_apellido_paterno'].'</td>
                    </tr>
                    <tr>
                        <td><b>APELLIDO MATERNO:</b></td>
                        <td>'.$value['ft_apellido_materno'].'</td>
                        <td><b>APELLIDO CASADA</b></td>
                        <td>'.$value['ft_apellido_casada'].'</td>
                    </tr>
                    <tr>
                        <td><b>PAIS DE NACIMIENTO:</b></td>
                        <td>'.$pais_nbft.'</td>
                        <td><b>FECHA NACIMIENTO</b></td>
                        <td>'.$value['ft_fecha_nacimiento'].'</td>
                    </tr>
                    <tr>
                        <td><b>NACIONALIDAD:</b></td>
                        <td>'.$nacionalidad_bft.'</td>
                        <td><b>GENERO</b></td>
                        <td>'.$genero_ft.'</td>
                    </tr>
                    <tr>
                        <td><b>ESTADO CIVIL:</b></td>
                        <td>'.$estado_civil_ft.'</td>
                        <td><b>IDENTIFICACION</b></td>
                        <td>'.$value['ft_identificacion'].'</td>
                    </tr>
                    <tr>
                        <td><b>PAIS DE RESIDENCIA:</b></td>
                        <td>'.$pais_residencia_ft.'</td>
                        <td><b>DIRECCION FISCAL</b></td>
                        <td>'.$value['ft_direccion_residencial'].'</td>
                    </tr>
                    <tr>
                        <td><b>PAIS RESIDENCIA FISCAL:</b></td>
                        <td>'.$value['ft_pais_residencia_fiscal'].'</td>
                        <td><b>EMAIL</b></td>
                        <td>'.$value['ft_email'].'</td>
                    </tr>
                    <tr>
                        <td><b>TELEFONO DE RESIDENCIA:</b></td>
                        <td>'.$value['ft_telefono_residencia'].'</td>
                        <td><b>TELEFONO MOVIL</b></td>
                        <td>'.$value['ft_telefono_movil'].'</td>
                    </tr>
                    <tr>
                        <td><b>PROFESION:</b></td>
                        <td>'.$profesion_descripcion_1_ft.'</td>
                        <td><b>OCUPACION</b></td>
                        <td>'.$ocupacion_descripcion_1_ft.'</td>
                    </tr>
                    <tr>
                        <td><b>LUGAR DE TRABAJO:</b></td>
                        <td>'.$value['ft_lugar_trabajo'].'</td>
                        <td><b>DIRECCION DE TRABAJO</b></td>
                        <td>'.$value['ft_direccion_trabajo'].'</td>
                    </tr>
                </table>
                <br>';
            }

foreach ($expuestas as $key => $value) { 

    $html .= '<table class="table" style="width:100%; font-size: 10px;" border="1">
                <tr>
                    <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>PERSONAS EXPUESTAS POLÍTICAMENTE (PEPS)</b></td>
                </tr>
                <tr>
                    <td><b>PERSONA O FAMILIAR PEP</b></td>
                    <td>'.$value['fp_beneficiario'].'</td>
                    <td><b>NOMBRE COMPLETO</b></td>
                    <td>'.$value['fp_nombre_completo'].'</td>
                </tr>
                <tr>
                    <td><b>CARGO ACTUAL</b></td>
                    <td>'.$value['fp_cargo_actual'].'</td>
                    <td><b>PRIMER NOMBRE</b></td>
                    <td>'.$value['fp_otro'].'</td>
                </tr>
                <tr>
                    <td><b>SEGUNDO NOMBRE:</b></td>
                    <td>'.$value['fp_fecha'].'</td>
                    <td><b>APELLIDO PATERNO</b></td>
                    <td>'.$value['fp_cargo_anterior'].'</td>
                </tr>
                <tr>
                    <td><b>APELLIDO MATERNO:</b></td>
                    <td>'.$value['fp_fecha_anterior'].'</td>
                    <td><b>APELLIDO CASADA</b></td>
                    <td>'.$value['fp_comentario'].'</td>
                </tr>
            </table>
            <br>';
        }

foreach ($declaracion_jurada as $key => $value) { 

    $html .= '<table class="table" style="width:100%; font-size: 10px;" border="1">
                <tr>
                    <td colspan="4" style="background-color:blue; color: white; text-align: center;"><b>DECLARACIÓN JURADA</b></td>
                </tr>
                <tr>
                    <td><b>NOMBRE COMPLETO</b></td>
                    <td>'.$value['fdc_nombre_completo'].'</td>
                    <td><b>FECHA</b></td>
                    <td>'.$value['fdc_fecha'].'</td>
                </tr>
            </table>
            <br>';
        }

        $html .='
        
        <br>
        <br>

            <table class="table" style="width:100%; font-size: 10px;">
                <tr>
                    <td>____________________________________________</td>
                    <td>____________________________________________</td>
                    <td>____________________________________________</td>
                </tr>
                <tr>
                    <td>Firma del cliente</td>
                    <td>Firma del Ejecutivo de ventas</td>
                    <td>Firma del encargado de la sucursal</td>
                </tr>
            </table>

        
                </div>
            </div>
        </div>';

$mpdf->WriteHTML($html);
$mpdf->Output();


