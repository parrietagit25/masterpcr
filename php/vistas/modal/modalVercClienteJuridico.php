<?php 
session_start();
$modalDocu =1;
$id = $_GET['id']; 
#require_once("../../controladores/ReportesController.php");
require_once("../../controladores/CcclientePjController.php");
$cCclienteController = new CcclienteController();

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

if (isset($_GET['editar_formulario_cc'])) { ?>

<form method="POST" action="" enctype="multipart/form-data">
    <div class="col-xxl-12">
        <h5 class="mb-3">Tabs</h5>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link mb-2 active" id="portada-tab" data-bs-toggle="pill" href="#portada" role="tab" aria-controls="portada" aria-selected="true">PORTADA FILE VENTAS</a>
                            <a class="nav-link mb-2" id="generales-tab" data-bs-toggle="pill" href="#generales" role="tab" aria-controls="generales" aria-selected="true">GENERALES</a>
                            <a class="nav-link mb-2" id="declaracion-tab" data-bs-toggle="pill" href="#declaracion" role="tab" aria-controls="declaracion" aria-selected="false">DECLARACION</a>
                            <a class="nav-link mb-2" id="representante_legal-tab" data-bs-toggle="pill" href="#representante_legal" role="tab" aria-controls="representante_legal" aria-selected="false">REPRESENTANTE LEGAL</a>
                            <a class="nav-link" id="directiva-tab" data-bs-toggle="pill" href="#directiva" role="tab" aria-controls="directiva" aria-selected="false">DIRECTIVA Y DIGNATARIOS</a>
                            <a class="nav-link mb-2" id="apoderados-tab" data-bs-toggle="pill" href="#apoderados" role="tab" aria-controls="apoderados" aria-selected="false">APODERADOS</a>
                            <a class="nav-link mb-2" id="propietarios-tab" data-bs-toggle="pill" href="#propietarios" role="tab" aria-controls="propietarios" aria-selected="false">PROPIETARIOS</a>
                            <a class="nav-link" id="declaracion_accionistas-tab" data-bs-toggle="pill" href="#declaracion_accionistas" role="tab" aria-controls="declaracion_accionistas" aria-selected="false">DECLARACIÓN DE ACCIONISTAS</a>
                            <a class="nav-link mb-2" id="beneficio_final-tab" data-bs-toggle="pill" href="#beneficio_final" role="tab" aria-controls="beneficio_final" aria-selected="false">BENEFICIARIO FINAL</a>
                            <a class="nav-link mb-2" id="terceros_autorizados-tab" data-bs-toggle="pill" href="#terceros_autorizados" role="tab" aria-controls="terceros_autorizados" aria-selected="false">TERCEROS AUTORIZADOS</a>
                            <a class="nav-link" id="expuestas_politicamente-tab" data-bs-toggle="pill" href="#expuestas_politicamente" role="tab" aria-controls="expuestas_politicamente" aria-selected="false">EXPUESTAS POLÍTICAMENTE</a>
                            <a class="nav-link" id="referencias-tab" data-bs-toggle="pill" href="#referencias" role="tab" aria-controls="referencias" aria-selected="false">REFERENCIAS</a>
                            <a class="nav-link mb-2" id="jurada-tab" data-bs-toggle="pill" href="#jurada" role="tab" aria-controls="jurada" aria-selected="false">DECLARACIÓN JURADA</a>
                            <a class="nav-link mb-2" id="adjuntar-tab" data-bs-toggle="pill" href="#adjuntar" role="tab" aria-controls="adjuntar" aria-selected="false">ADJUNTOS</a>
                            <a class="nav-link" id="interno-tab" data-bs-toggle="pill" href="#interno" role="tab" aria-controls="interno" aria-selected="false">USO INTERNO</a>
                            <a class="nav-link" id="generales_beneficiarios_natural-tab" data-bs-toggle="pill" href="#generales_beneficiarios_natural" role="tab" aria-controls="generales_beneficiarios_natural" aria-selected="false">GENERALES B.F. P.N.</a>
                            <a class="nav-link mb-2" id="generales_beneficiarios_juridica-tab" data-bs-toggle="pill" href="#generales_beneficiarios_juridica" role="tab" aria-controls="generales_beneficiarios_juridica" aria-selected="false">GENERALES B.F. P.J.</a>
                            <a class="nav-link mb-2" id="propietarios_juridica-tab" data-bs-toggle="pill" href="#propietarios_juridica" role="tab" aria-controls="propietarios_juridica" aria-selected="false">PROPIETARIOS B.F. P.J.</a>
                            <a class="nav-link" id="declaracion_jurada-tab" data-bs-toggle="pill" href="#declaracion_jurada" role="tab" aria-controls="declaracion_jurada" aria-selected="false">DECLARACIÓN JURADA</a>
                            <a class="nav-link" id="aviso_legal-tab" data-bs-toggle="pill" href="#aviso_legal" role="tab" aria-controls="aviso_legal" aria-selected="false">AVISO LEGAL</a>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-10">
                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                            <!-- Expediente -->
                            <div class="tab-pane fade show active" id="portada" role="tabpanel" aria-labelledby="portada-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">CONTROL DE ENTREGA DE EXPEDIENTES  DE VENTAS DE AUTOS | PERSONA JURIDICA</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <?php foreach ($expedienete as $key => $value) { ?>
                                                        
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjexp_fecha" value="<?php echo $value['pjexp_fecha']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cliente</label>
                                                                    <input type="text" class="form-control" id="nombre_completo_inp" name="pjexp_cliente" value="<?php echo $value['pjexp_cliente']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Marca</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_marca" value="<?php echo $value['pjexp_marca']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Modelo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_modelo" value="<?php echo $value['pjexp_modelo']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Año</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_anio" value="<?php echo $value['pjexp_anio']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Placa</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_placa" value="<?php echo $value['pjexp_placa']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Chasis</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_chasis" value="<?php echo $value['pjexp_chasis']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Motor</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_motor" value="<?php echo $value['pjexp_motor']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Color</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_color" value="<?php echo $value['pjexp_color']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Código Dollar</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_codigo_dollar" value="<?php echo $value['pjexp_codigo_dollar']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">N° INTELISIS</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_n_intelisis" value="<?php echo $value['pjexp_n_intelisis']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                        <?php } ?>
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>

                                </div>
                            </div>
                            <!-- Datos generales -->
                            <div class="tab-pane fade" id="generales" role="tabpanel" aria-labelledby="generales-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">DATOS GENERALES</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                    <?php foreach ($generales as $key => $value) {
                                                        
                                                        $stado_general = $value['pjgn_stat'];
                                                        
                                                        ?>
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Razón solcial</label>
                                                                    <input type="text" class="form-control" name="pjgn_razon_social" value="<?php echo $value['pjgn_razon_social']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre Comercial</label>
                                                                    <input type="text" class="form-control" name="pjgn_nombre_comercial" value="<?php echo $value['pjgn_nombre_comercial']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Datos de inscripción</label>
                                                                    <input type="text" class="form-control" name="pjgn_datos_inscripcion" value="<?php echo $value['pjgn_datos_inscripcion']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Tipo de persona</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjgn_tipo_persona">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($tipo_persona as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjgn_tipo_persona']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Dirección Fisíca</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjgn_direccion_fisica"><?php echo $value['pjgn_direccion_fisica']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">País de constitución</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjgn_pais_constitucion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjgn_pais_constitucion']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Residencia Fiscal</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjgn_residencia_fiscal"><?php echo $value['pjgn_residencia_fiscal']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">RUC & DV</label>
                                                                    <input type="text" class="form-control" name="pjgn_ruc_dv" value="<?php echo $value['pjgn_ruc_dv']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Teléfono</label>
                                                                    <input type="text" class="form-control" name="pjgn_telefono" value="<?php echo $value['pjgn_telefono']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apartado Postal</label>
                                                                    <input type="text" class="form-control" name="pjgn_apartado_postal" value="<?php echo $value['pjgn_apartado_postal']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aviso de operación</label>
                                                                    <input type="text" class="form-control" name="pjgn_aviso_operacion" value="<?php echo $value['pjgn_aviso_operacion']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Licencia</label>
                                                                    <input type="text" class="form-control" name="pjgn_licencia" value="<?php echo $value['pjgn_licencia']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Entidad reguladora</label>
                                                                    <input type="text" class="form-control" name="pjgn_entidad_reguladora" value="<?php echo $value['pjgn_entidad_reguladora']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Activida principal a la que se dedica</label>
                                                                    <input type="text" class="form-control" name="pjgn_actividad_principal_dedica" value="<?php echo $value['pjgn_actividad_principal_dedica']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Descripcion del negocio 
                                                                        <small>(SUMINISTRE UN RESUMEN ACTUALIZADO DE LOS PRINCIPALES ACTIVIDADES O NEGOCIOS A LAS CUALES SE DEDICA)</small>
                                                                    </label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjgn_descripcion_negocio"><?php echo $value['pjgn_descripcion_negocio']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Paises donde ofrece sus productos o servicios</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjgn_paises_ofrece_productos_servicios">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjgn_paises_ofrece_productos_servicios']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">E-mail </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="pjgn_email" value="<?php echo $value['pjgn_email']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cargo</label>
                                                                    <input type="text" class="form-control" name="pjgn_cargo" value="<?php echo $value['pjgn_cargo']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    <?php } ?>
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>

                                </div>
                            </div>
                            <!-- Declaracion -->
                            <div class="tab-pane fade" id="declaracion" role="tabpanel" aria-labelledby="declaracion-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">DECLARACIÓN DE FUENTES Y ORIGEN DE LOS FONDOS.</h4>
                                                </div><!-- end card header -->
                                                
                                                <div class="card-body">
                                                    <p>
                                                    DECLARO QUE LOS FONDOS PARA EFECTUAR LA TRANSACCIÓN DE COMPRAVENTA PROVIENEN DE FUENTES LÍCITAS Y PROPIAS DETALLADAS A 
                                                    CONTINUACIÓN Y QUE NO REALIZARÉ O ADMITIRÉ QUE SE EFECTÚEN PAGOS A NOMBRE MÍO O DE LA PERSONA QUE REPRESENTO CON FONDOS 
                                                    PROVENIENTES DE ACTIVIDADES ILÍCITAS, NI EFECTUARÉ TRANSACCIONES DESTINADAS A TALES ACTIVIDADES O A FAVOR DE PERSONAS RELACIONADAS A LAS MISMAS.
                                                    </p>
                                                    <div class="live-preview">
                                                        <?php foreach ($declaracion as $key => $value) { 

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

                                                         ?>
                                                        
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Actividaad principal</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjdf_actividad_principal"><?php echo $pjdf_actividad_principal; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Actividad secundaria</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjdf_actividad_secundaria"><?php echo $pjdf_actividad_secundaria; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Otras fuentes</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjdf_otras_fuentes"><?php echo $pjdf_otras_fuentes; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Otras fuentes 2</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjdf_otras_fuentes_secundaria"><?php echo $pjdf_otras_fuentes_secundaria; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Limite de compra</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjdf_limite_compra">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($limite as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $pjdf_limite_compra){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Forma de pago</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjdf_forma_pago">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $pjdf_forma_pago){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Método de pago</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjdf_metodo_pago_1">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($motodo_pago as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $pjdf_metodo_pago_1){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Método de pago 2</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjdf_metodo_pago_2">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($motodo_pago as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $pjdf_metodo_pago_2){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                        
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>

                                </div>
                            </div>
                            <!-- Representante legal -->
                            <div class="tab-pane fade" id="representante_legal" role="tabpanel" aria-labelledby="representante_legal-tab">
                                <div class="d-flex mb-2">
                                    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">DATOS DEL REPRESENTANTE LEGAL.</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body"></div>
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <?php foreach ($representante_legal as $key => $value) { ?>
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre Completo</label>
                                                                    <input type="text" class="form-control" name="pjrl_nombre_completo" value="<?php echo $value['pjrl_nombre_completo']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cedula / N# Pasaporte.</label>
                                                                    <input type="text" class="form-control" name="pjrl_cedula_pasaporte" value="<?php echo $value['pjrl_cedula_pasaporte']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Estado Civil</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjrl_estado_civil">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($estado_civil as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjrl_estado_civil']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjrl_nacionalidada">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjrl_nacionalidada']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha de nacimiento</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjrl_fecha_nacimiento" value="<?php echo $value['pjrl_fecha_nacimiento']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Dirección</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjrl_direccion"><?php echo $value['pjrl_direccion']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electronico </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="pjrl_correo" value="<?php echo $value['pjrl_correo']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Profesión.</label>
                                                                    <input type="text" class="form-control" name="pjrl_profesion" value="<?php echo $value['pjrl_profesion']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Lugar de trabajo.</label>
                                                                    <input type="text" class="form-control" name="pjrl_lugar_trabajo" value="<?php echo $value['pjrl_lugar_trabajo']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Teléfono.</label>
                                                                    <input type="text" class="form-control" name="pjrl_telefono" value="<?php echo $value['pjrl_telefono']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                        <?php } ?>
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>

                                </div>
                            </div>
                            <!-- Junta directiva temporal -->
                            <div class="tab-pane fade" id="directiva" role="tabpanel" aria-labelledby="directiva-tab">
                                <div class="d-flex mb-2">
                                    
                                    <div class="row" style="width:100%;">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">JUNTA DIRECTIVA Y DIGNATARIOS.</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">DETALLE LOS DIRECTORES Y DIGNATARIOS. AGREGUE MÁS LÍNEAS SEGÚN SEA NECESARIO.</div>
                                                    <div class="card-body">
                                                        <div class="live-preview">
                                                            
                                                            <a href="#" onclick="mostrar_ocultar_modal('junta_directiva', 'cClienteFormulario', '', '', 'jd_temp_id_general', <?php echo $id; ?>)" class="btn btn-primary">Agregar</a>

                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nombre Completo</th>
                                                                        <th>Cargo</th>
                                                                        <th>Nacionalidad</th>
                                                                        <th>I.D.</th>
                                                                        <th>Correo</th>
                                                                        <th>Dirección</th>
                                                                        <th>Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="contenido_junta_directiva_modal">
                                                                    <?php foreach ($junta_directiva_dignatarios as $key => $value) { ?>
                                                                            <tr>
                                                                                <td><input value="<?php echo $value['pjdd_nombre_completo']; ?>" name="pjdd_nombre_completo[]" class="form-control"> </td>
                                                                                <td><input value="<?php echo $value['pjdd_cargo']; ?>" name="pjdd_cargo[]" class="form-control"></td>
                                                                                <td><input value="<?php echo $value['pjdd_nacionalidad']; ?>" name="pjdd_nacionalidad[]" class="form-control"></td>
                                                                                <td><input value="<?php echo $value['pjdd_id']; ?>" name="pjdd_id[]" class="form-control"></td>
                                                                                <td><input value="<?php echo $value['pjdd_correo']; ?>" name="pjdd_correo[]" class="form-control"></td>
                                                                                <td><input value="<?php echo $value['pjdd_direccion']; ?>" name="pjdd_direccion[]" class="form-control"></td>
                                                                                <td><a href="#" onclick="eliminar_dd_final(<?php echo $value['id']; ?>, <?php echo $id; ?>)" class="btn btn-danger">Eliminar</a></td>
                                                                                <input type="hidden" name="pjdd_telefono[]" value="<?php echo $value['pjdd_telefono']; ?>">
                                                                            </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table> 
                                                            <!--end row-->
                                                        </div>
                                                        <div class="d-none code-view">
                                                            <pre class="language-markup" style="height: 450px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                    </div>
                                </div>
                            
                            <!-- Apoderados temporal -->
                            <div class="tab-pane fade" id="apoderados" role="tabpanel" aria-labelledby="apoderados-tab">
                                <div class="d-flex mb-2">

                                    <div class="row" style="width:100%;">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">APODERADOS</h4>
                                                </div><!-- end card header -->
                                                
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        
                                                        <a href="#" onclick="mostrar_ocultar_modal('apoderados', 'cClienteFormulario', '', '', 'a_id_general', <?php echo $id; ?>)" class="btn btn-primary">Agregar</a>

                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nombre Completo</th>
                                                                    <th>Cargo</th>
                                                                    <th>Nacionalidad</th>
                                                                    <th>I.D.</th>
                                                                    <th>Correo</th>
                                                                    <th>Dirección</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="apoderados_tabla_modal">
                                                                <?php foreach ($obtener_registros_apot as $key => $value) { ?>
                                                                    <tr>
                                                                        <td><input value="<?php echo $value['pja_nombre_completo']; ?>" name="pja_nombre_completo[]" class="form-control"> </td>
                                                                        <td><input value="<?php echo $value['pja_cargo']; ?>" name="pja_cargo[]" class="form-control"></td>
                                                                        <td><input value="<?php echo $value['pja_nacionalidad']; ?>" name="pja_nacionalidad[]" class="form-control"></td>
                                                                        <td><input value="<?php echo $value['pja_id']; ?>" name="pja_id[]" class="form-control"></td>
                                                                        <td><input value="<?php echo $value['pja_correo']; ?>" name="pja_correo[]" class="form-control"></td>
                                                                        <td><input value="<?php echo $value['pja_direccion']; ?>" name="pja_direccion[]" class="form-control"></td>
                                                                        <td><a href="#" onclick="eliminar_apoderados(<?php echo $value['id']; ?>, <?php echo $id; ?>)" class="btn btn-danger">Eliminar</a></td>
                                                                        <input type="hidden" name="pja_telefono[]" value="<?php echo $value['pja_telefono']; ?>">
                                                                    </tr>
                                                                <?php }  ?>
                                                            </tbody>
                                                        </table>
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div> 
                                </div>
                            </div>
                            <!-- Propietarios -->
                            <div class="tab-pane fade" id="propietarios" role="tabpanel" aria-labelledby="propietarios-tab">
                                <div class="d-flex mb-2">
                                    <?php foreach ($propietario as $key => $value) { ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">PROPIETARIOS</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">¿ESTA EMPRESA ES PÚBLICA O PRIVADA?  </label>
                                                                    <br>
                                                                    <label for="basiInput" class="form-label">Publica</label>
                                                                    <input class="form-check-input" type="radio" name="pjpr_publica_privada" <?php if($value['pjpr_publica_privada'] == '109BFF'){ echo 'checked'; } ?> id="formradioRight6" value="109BFF">
                                                                    <label for="basiInput" class="form-label">Privada</label>
                                                                    <input class="form-check-input" type="radio" name="pjpr_publica_privada" <?php if($value['pjpr_publica_privada'] == '111BFF'){ echo 'checked'; } ?> id="formradioRight6" value="111BFF">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">¿ESTA EMPRESA LICITA CON EL ESTADO?  </label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjpr_licita_estado">
                                                                        <option value="">Seleccione</option>
                                                                        <option value="SI" <?php if($value['pjpr_licita_estado'] == 'SI'){ echo 'selected'; } ?>>SI</option>
                                                                        <option value="NO" <?php if($value['pjpr_licita_estado'] == 'NO'){ echo 'selected'; } ?>>NO</option>
                                                                        <option value="NO_APLICA" <?php if($value['pjpr_licita_estado'] == 'NO_APLICA'){ echo 'selected'; } ?>>NO APLICA</option>
                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">País</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjpr_licita_pais">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['pjpr_licita_pais'] == $value['pjpr_licita_pais']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">¿LAS ACCIONES DE ESTA EMPRESA COTIZAN EN UNA BOLSA DE VALORES?  </label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjpr_cotiza_bolsa">
                                                                        <option value="">Seleccione</option>
                                                                        <option value="SI" <?php if($value['pjpr_cotiza_bolsa'] == 'SI'){ echo 'selected'; } ?>>SI</option>
                                                                        <option value="NO" <?php if($value['pjpr_cotiza_bolsa'] == 'NO'){ echo 'selected'; } ?>>NO</option>
                                                                        <option value="NO_APLICA" <?php if($value['pjpr_cotiza_bolsa'] == 'NO_APLICA'){ echo 'selected'; } ?>>NO APLICA</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">SI LA RESPUESTA ES AFIRMATIVA INDIQUE:</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjpr_descripcion_cotiza_bolsa" value="<?php echo $value['pjpr_descripcion_cotiza_bolsa']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">NOMBRE DE LA BOLSA DE VALORES Y TICKER:</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjpr_nombre_bolsa_ticker" value="<?php echo $value['pjpr_nombre_bolsa_ticker']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                        <br>
                                                        <br>
                                                        <p>
                                                        EN CASO AFIRMATIVO NO DEBE COMPLETAR SECCIÓN DE DECLARACIÓN DE ACCIONISTAS.
                                                        </p>
                                                        <p>
                                                        SI LA RESPUESTA ES NEGATIVA COMPLETE LA SECCIÓN DE DECLARACIÓN DE ACCIONISTAS.   
                                                        </p>
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- DECLARACION DE ACCIONISTAS -->
                            <div class="tab-pane fade" id="declaracion_accionistas" role="tabpanel" aria-labelledby="declaracion_accionistas-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">DECLARACIÓN DE ACCIONISTAS</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                        <p>DETALLE LOS NOMBRES DE LOS ACCIONISTAS QUE TENGAN EL DERECHO A EJERCER EL VOTO CON RESPECTO AL VEINTICINCO POR CIENTO (25%) O MÁS DE LAS ACCIONES EMITIDAS Y EN CIRCULACIÓN. ADICIONAL DEBERÁ COMPLETAR LA DECLARACIÓN JURADA DE BENEFICIARIOS FINALES PERSONA JURÍDICA.</p>
                                                            <?php foreach ($declaracion_accionistas as $key => $value) { ?>
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre del accionista(Natural o Jurídica).</label>
                                                                    <input class="form-control" type="text" name="pjda_nombre_completo_accionista[]" value="<?php echo $value['pjda_nombre_completo_accionista']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Participación Accionarias</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjda_participacion_accionaria[]" value="<?php echo $value['pjda_participacion_accionaria']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col -->                        
                                                            <?php } ?>
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>

                                </div>
                            </div>
                            <!-- Beneficiario final -->
                            <div class="tab-pane fade" id="beneficio_final" role="tabpanel" aria-labelledby="beneficio_final-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">BENEFICIARIO FINAL.</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <?php foreach ($beneficiarioFinal as $key => $value) { ?>
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">INDIQUE SI EL AUTO SERÁ TRASPASADO A NOMBRE DEL CLIENTE O DE UN TERCERO. ?  </label>
                                                                    <br>
                                                                    <label for="basiInput" class="form-label">Cliente </label>
                                                                    <input class="form-check-input" type="radio" name="pjbf_transpaso_cliente_tercero" id="formradioRight6" <?php if($value['pjbf_transpaso_cliente_tercero'] == '109BFF'){ echo 'checked'; } ?> value="109BFF">
                                                                    <label for="basiInput" class="form-label">Tercero </label>
                                                                    <input class="form-check-input" type="radio" name="pjbf_transpaso_cliente_tercero" id="formradioRight6" <?php if($value['pjbf_transpaso_cliente_tercero'] == '110BFF'){ echo 'checked'; } ?> value="110BFF">
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                            <div class="col-xxl-8 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">EN ESTE ÚLTIMO CASO, COMPLETE CON LOS DATOS DEL BENEFICIARIO FINAL DE LA TRANSACCIÓN. DE SER PERSONA JURÍDICA, UTILIZAR EL FORMULARIO DE DEBIDA DILIGENCIA PERSONA JURÍDICA PCR-CUMP-FORM02 Y LA DECLARACIÓN JURADA DE BENEFICIARIOS FINALES DE LAS PERSONAS JURÍDICAS.</label>
                                                                    <br>
                                                                    <label for="basiInput" class="form-label">Familiar </label>
                                                                    <input class="form-check-input" type="radio" name="pjbf_relacion_cliente" id="formradioRight6" <?php if($value['pjbf_relacion_cliente'] == '111BFF'){ echo 'checked'; } ?> value="111BFF">
                                                                    <label for="basiInput" class="form-label">Tercero </label>
                                                                    <input class="form-check-input" type="radio" name="pjbf_relacion_cliente" id="formradioRight6" <?php if($value['pjbf_relacion_cliente'] == '110BFF'){ echo 'checked'; } ?> value="110BFF">
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Primer Nombre</label>
                                                                    <input type="text" class="form-control" id="primer_nombre" name="pjbf_primer_nombre" value="<?php echo $value['pjbf_primer_nombre']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Segundo Nombre</label>
                                                                    <input type="text" class="form-control" id="segundo_nombre" name="pjbf_segundo_nomnbre" value="<?php echo $value['pjbf_segundo_nomnbre']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Paterno</label>
                                                                    <input type="text" class="form-control" id="apellido_paterno" name="pjbf_apellido_parterno" value="<?php echo $value['pjbf_apellido_parterno']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Materno</label>
                                                                    <input type="text" class="form-control" id="apellido_materno" name="pjbf_apellido_materno" value="<?php echo $value['pjbf_apellido_materno']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido de Casada</label>
                                                                    <input type="text" class="form-control" id="apellido_casada" name="pjbf_apellido_casada" value="<?php echo $value['pjbf_apellido_casada']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">País de Naciemiento</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjbf_pais_nacimiento">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjbf_pais_nacimiento']){ echo 'selected'; } ?> ><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha Nacimiento</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjbf_fecha_nacimiento" value="<?php echo $value['pjbf_fecha_nacimiento']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Género</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjbf_genero">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($genero as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjbf_genero']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjbf_nacionalidad">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjbf_nacionalidad']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Estado Civil</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjbf_estado_civil">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($estado_civil as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjbf_estado_civil']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cédula/N# Pasaporte</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjbf_cedula_pasaporte" value="<?php echo $value['pjbf_cedula_pasaporte']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">País de Residencia</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjbf_pais_residencia">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjbf_pais_residencia']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Dirección Residencial</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjbf_direccion_residencia"><?php echo $value['pjbf_direccion_residencia']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">País de Residencia Fiscal</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjbf_pais_residencia_fiscal">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjbf_pais_residencia_fiscal']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electrónico </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="pjbf_correo" value="<?php echo $value['pjbf_correo']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Teléfono Residencial</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjbf_telefono_residencial" value="<?php echo $value['pjbf_telefono_residencial']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Teléfono Móvil</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjbf_telefono_celular" value="<?php echo $value['pjbf_telefono_celular']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Profesión</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjbf_profesion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjbf_profesion']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Ocupación</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjbf_ocupacion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjbf_ocupacion']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjbf_lugar_trabajo"><?php echo $value['pjbf_lugar_trabajo']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Dirección de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjbf_direccion_trabajo"><?php echo $value['pjbf_direccion_trabajo']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                        <?php } ?>
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>

                                </div>
                            </div>
                            <!-- Terceros autorizados -->
                            <div class="tab-pane fade" id="terceros_autorizados" role="tabpanel" aria-labelledby="terceros_autorizados-tab">
                                <div class="d-flex mb-2">
                                    <?php foreach ($tercerosAutorizados as $key => $value) { ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">TERCEROS AUTORIZADOS</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body" >

                                                <p>¿LOS PAGOS PARCIALES (ABONOS) O TOTALES AL PRECIO DE VENTA SERÁN REALIZADOS POR UNA TERCERA PERSONA DISTINTA DEL CLIENTE O DEL BENEFICIARIO FINAL? (NO ENTIDAD BANCARIA) 
                                                    EN CASO AFIRMATIVO, COMPLETE CON LOS DATOS DEL TERCERO AUTORIZADO. DE SER PERSONA JURÍDICA, UTILIZAR EL FORMULARIO DE DEBIDA DILIGENCIA PERSONA JURÍDICA PCR-CUMP-FORM02.</p>
                                                <p>
                                                    EN CASO AFIRMATIVO, COMPLETE CON LOS DATOS DEL TERCERO AUTORIZADO. DE SER PERSONA JURÍDICA, UTILIZAR EL FORMULARIO DE DEBIDA DILIGENCIA PERSONA JURÍDICA PCR-CUMP-FORM02.
                                                </p>

                                                </div>
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-3">
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">RELACIÓN CON EL CLIENTE.  </label>
                                                                    <br>
                                                                    <label for="basiInput" class="form-label">Familiar </label>
                                                                    <input class="form-check-input" type="radio" name="pjtu_relacion_cliente" <?php if($value['pjtu_relacion_cliente'] == '111BFF'){ echo 'checked'; } ?> id="formradioRight6" value="111BFF">
                                                                    <label for="basiInput" class="form-label">Tercero </label>
                                                                    <input class="form-check-input" type="radio" name="pjtu_relacion_cliente" <?php if($value['pjtu_relacion_cliente'] == '110BFF'){ echo 'checked'; } ?> id="formradioRight6" value="110BFF">
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Primer Nombre</label>
                                                                    <input type="text" class="form-control" id="primer_nombre" name="pjtu_primer_nombre" value="<?php echo $value['pjtu_primer_nombre']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Segundo Nombre</label>
                                                                    <input type="text" class="form-control" id="segundo_nombre" name="pjtu_segundo_nomnbre" value="<?php echo $value['pjtu_segundo_nomnbre']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Paterno</label>
                                                                    <input type="text" class="form-control" id="apellido_paterno" name="pjtu_apellido_parterno" value="<?php echo $value['pjtu_apellido_parterno']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Materno</label>
                                                                    <input type="text" class="form-control" id="apellido_materno" name="pjtu_apellido_materno" value="<?php echo $value['pjtu_apellido_materno']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido de Casada</label>
                                                                    <input type="text" class="form-control" id="apellido_casada" name="pjtu_apellido_casada" value="<?php echo $value['pjtu_apellido_casada']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">País de Naciemiento</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjtu_pais_nacimiento">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjtu_pais_nacimiento']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha Nacimiento</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjtu_fecha_nacimiento" value="<?php echo $value['pjtu_fecha_nacimiento']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Género</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjtu_genero">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($genero as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjtu_genero']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjtu_nacionalidad">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjtu_nacionalidad']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Estado Civil</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjtu_estado_civil">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($estado_civil as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjtu_estado_civil']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cédula/N# Pasaporte</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjtu_cedula_pasaporte" value="<?php echo $value['pjtu_cedula_pasaporte']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">País de Residencia</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjtu_pais_residencia">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjtu_pais_residencia']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Dirección Residencial</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjtu_direccion_residencia"><?php echo $value['pjtu_direccion_residencia']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">País de Residencia Fiscal</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjtu_pais_residencia_fiscal">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjtu_pais_residencia_fiscal']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electrónico </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="pjtu_correo" value="<?php echo $value['pjtu_correo']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Teléfono Residencial</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjtu_telefono_residencial" value="<?php echo $value['pjtu_telefono_residencial']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Teléfono Móvil</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjtu_telefono_celular" value="<?php echo $value['pjtu_telefono_celular']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Profesión</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjtu_profesion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjtu_profesion']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Ocupación</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjtu_ocupacion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjtu_ocupacion']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjtu_lugar_trabajo"><?php echo $value['pjtu_lugar_trabajo']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Dirección de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjtu_direccion_trabajo"><?php echo $value['pjtu_direccion_trabajo']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- Personas expuestas politicamente -->
                            <div class="tab-pane fade" id="expuestas_politicamente" role="tabpanel" aria-labelledby="expuestas_politicamente-tab">
                                <div class="d-flex mb-2">
                                    <?php foreach ($expuestas as $key => $value) { ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">PERSONAS EXPUESTAS POLÍTICAMENTE</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <p>
                                                    LAS PERSONAS EXPUESTAS POLÍTICAMENTE SON LAS PERSONAS NACIONALES O EXTRANJERAS QUE CUMPLEN FUNCIONES PÚBLICAS DESTACADAS 
                                                    DE ALTO NIVEL O CON MANDO Y JURISDICCIÓN EN UN ESTADO, COMO (PERO SIN LIMITARSE) LOS JEFES DE ESTADO O DE UN GOBIERNO, 
                                                    LOS POLÍTICOS DE ALTO PERFIL, LOS FUNCIONARIOS GUBERNAMENTALES, JUDICIALES O MILITARES DE ALTA JERARQUÍA, LOS EJECUTIVOS 
                                                    DE EMPRESAS O CORPORACIONES ESTATALES LOS FUNCIONARIOS PÚBLICOS QUE OCUPEN POSICIONES DE ELECCIÓN POPULAR, ENTRE OTROS QUE 
                                                    EJERZAN LA TOMA DE DECISIONES EN LAS ENTIDADES PÚBLICAS; PERSONAS QUE CUMPLEN  O A QUIÉNES SE LES HA CONFIADO FUNCIONES IMPORTANTES 
                                                    POR UNA ORGANIZACIÓN INSTITUCIONAL, COMO LOS MIEMBROS DE LA ALTA GERENCIA, ES DECIR DIRECTORES, SUBDIRECTORES Y MIEMBROS DE LA JUNTA
                                                        DIRECTIVA O FUNCIONES EQUIVALENTES.
                                                    </p>
                                                </div>
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">¿ES EL REPRESENTANTE LEGAL, APODERADO, DIRECTOR O DIGNATARIO UN PEP, FAMILIAR CERCANO O ESTRECHO COLABORADOR DE UN PEP?</label>
                                                                    <br>
                                                                    <label for="basiInput" class="form-label">SI</label>
                                                                    <input class="form-check-input" type="radio" name="pjpx_relacion_directa" id="formradioRight6" <?php if($value['pjpx_relacion_directa'] == 'SI'){ echo 'checked'; } ?> value="SI">
                                                                    <label for="basiInput" class="form-label">NO</label>
                                                                    <input class="form-check-input" type="radio" name="pjpx_relacion_directa" id="formradioRight6" <?php if($value['pjpx_relacion_directa'] == 'NO'){ echo 'checked'; } ?> value="NO">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre completo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjpx_nombre_completo" value="<?php echo $value['pjpx_nombre_completo']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Cargo actual</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjpx_cargo_actual">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion_personas_expuestas as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjpx_cargo_actual']){ echo 'selected'; } ?> ><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjpx_fecha_cargo_actual" value="<?php echo $value['pjpx_fecha_cargo_actual']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Cargo Anterior</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjpx_cargo_anterior">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion_personas_expuestas as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjpx_cargo_anterior']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha anterior</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjpx_fecha_cargo_anterior" value="<?php echo $value['pjpx_fecha_cargo_anterior']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Comentarios</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjpx_comentarios"><?php echo $value['pjpx_comentarios']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">¿ES EL BENEFICIARIO FINAL UN PEP, FAMILIAR CERCANO O ESTRECHO COLABORADOR DE UN PEP?</label>
                                                                    <br>
                                                                    <label for="basiInput" class="form-label">SI</label>
                                                                    <input class="form-check-input" type="radio" name="pjpx_pep_relacion_directa" id="formradioRight6" <?php if($value['pjpx_pep_relacion_directa'] == 'SI'){ echo 'checked'; } ?> value="SI">
                                                                    <label for="basiInput" class="form-label">NO</label>
                                                                    <input class="form-check-input" type="radio" name="pjpx_pep_relacion_directa" id="formradioRight6" <?php if($value['pjpx_pep_relacion_directa'] == 'NO'){ echo 'checked'; } ?> value="NO">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre completo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjpx_nombre_completo_2" value="<?php echo $value['pjpx_nombre_completo_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Cargo actual</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjpx_cargo_actual_2">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion_personas_expuestas as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjpx_cargo_actual_2']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjpx_fecha_cargo_actual_2" value="<?php echo $value['pjpx_fecha_cargo_actual_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Cargo Anterior</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjpx_cargo_anterior_2">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion_personas_expuestas as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjpx_cargo_anterior_2']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha anterior</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjpx_fecha_cargo_anterior_2" value="<?php echo $value['pjpx_fecha_cargo_anterior_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Comentarios</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjpx_comentarios_2"><?php echo $value['pjpx_comentarios_2']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- Referencias -->
                            <div class="tab-pane fade" id="referencias" role="tabpanel" aria-labelledby="referencias-tab">
                                <div class="d-flex mb-2">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">REFERENCIAS</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <p>REFERENCIAS BANCARIAS.</p>
                                                </div>
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <?php foreach ($referencias as $key => $value) { ?>
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre o razón social</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjrf_nombre_razon_social[]" value="<?php echo $value['pjrf_nombre_razon_social']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Actividad</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjrf_actividad[]" value="<?php echo $value['pjrf_actividad']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Relacón</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjrf_relacion[]" value="<?php echo $value['pjrf_relacion']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Teléfono</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjrf_telefono[]" value="<?php echo $value['pjrf_telefono']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electrónico</label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="pjrf_correo_electronico[]" value="<?php echo $value['pjrf_correo_electronico']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                        <br>
                                                        <br>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- jurada -->
                            <div class="tab-pane fade" id="jurada" role="tabpanel" aria-labelledby="jurada-tab">
                                <div class="d-flex mb-2">
                                    <?php foreach ($declaracion_jurada as $key => $value) { ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">DECLARACIÓN JURADA</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    DECLARO QUE LA INFORMACIÓN ANTERIOR ES VERAZ Y HA SIDO PROPORCIONADA EN CUMPLIMIENTO DE LO ESTABLECIDO POR LAS LEYES 
                                                    Y REGULACIONES RELACIONADAS CON LA PREVENCIÓN DEL BLANQUEO DE CAPITALES, FINANCIAMIENTO DEL TERRORISMO Y FINANCIAMIENTO
                                                    DE LA PROLIFERACIÓN DE ARMAS DE DESTRUCCIÓN MASIVA DE LA REPÚBLICA DE PANAMÁ. ACEPTO PROPORCIONAR CUALQUIER INFORMACIÓN 
                                                    Y/O DOCUMENTACIÓN ADICIONAL A LA DESCRITA EN EL PRESENTE FORMULARIO, QUE PANAMA CAR RENTAL, S.A. REQUIERA PARA LA APLICACIÓN 
                                                    DE LAS MEDIDAS DE DEBIDA DILIGENCIA.
                                                </div>
                                                    <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre completo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjdj_nombre_completo" value="<?php echo $value['pjdj_nombre_completo']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjdj_fecha" value="<?php echo $value['pjdj_fecha']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Firma</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="pjdj_firma">
                                                                    <br>
                                                                    <br>
                                                                    <a href="<?php echo $value['pjdj_firma']; ?>" target="_blank">Firma adjunta</a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- Adjuntar -->
                            <div class="tab-pane fade" id="adjuntar" role="tabpanel" aria-labelledby="adjuntar-tab">
                                <div class="d-flex mb-2">
                                <?php foreach ($documentos_adjuntos as $key => $value) { ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">ADJUNTAR LOS SIGUIENTES DOCUMENTOS E INFORMACIÓN DE SOPORTE</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                </div>
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <!--end col-->
                                                            <p>Recuerde adjuntar un unico documento, donde este escaneada en un pdf los siguientes recaudos:<br>
                                                                -COPIA DE CÉDULA O PASAPORTE DEL REPRESENTANTE LEGAL, APODERADOS, DIRECTORES, DIGNATARIOS, TERCEROS AUTORIZADOS Y BENEFICIARIOS FINALES <br> 
                                                                -COPIA DE PACTO SOCIAL, CERTIFICADO DE REGISTRO PÚBLICO O SU EQUIVALENTE, CON UNA VIGENCIA NO MENOR DE 90 DÍAS CALENDARIO<br>
                                                                -AVISO DE OPERACIONES O LICENCIA COMERCIAL<br>
                                                                -EVIDENCIA DE INGRESO (DE ACUERDO CON PERFIL FINANCIERO)</p>
                                                            <div class="col-xxl-12 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Adjuntar PDF.</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="pjad_identificacion">
                                                                </div>
                                                                <br>
                                                                <a href="<?php echo $value['pjad_identificacion']; ?>" target="_blank">pdf Adjuntos</a>
                                                            </div>
                                                            <!--end col-->
                                                            <div style="display:none;">
                                                                <div class="col-xxl-6 col-md-6">
                                                                    <div>
                                                                        <label for="basiInput" class="form-label">COPIA DE PACTO SOCIAL, CERTIFICADO DE REGISTRO PÚBLICO O SU EQUIVALENTE, CON UNA VIGENCIA NO MENOR DE 90 DÍAS CALENDARIO</label>
                                                                        <input type="file" class="form-control" id="basiInput" name="pjad_pacto_social">
                                                                    </div>
                                                                    <br>
                                                                    <a href="<?php echo $value['pjad_pacto_social']; ?>" target="_blank">Pacto social adjunto</a>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-6 col-md-6">
                                                                    <div>
                                                                        <label for="basiInput" class="form-label">AVISO DE OPERACIONES O LICENCIA COMERCIAL</label>
                                                                        <input type="file" class="form-control" id="basiInput" name="pjad_aviso_operaciones">
                                                                    </div>
                                                                    <br>
                                                                    <a href="<?php echo $value['pjad_aviso_operaciones']; ?>" target="_blank">Pacto social adjunto</a>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-6 col-md-6">                                                           
                                                                    <div>
                                                                        <label for="basiInput" class="form-label">EVIDENCIA DE INGRESO (DE ACUERDO CON PERFIL FINANCIERO)</label>
                                                                        <input type="file" class="form-control" id="basiInput" name="pjad_evidencia_ingreso">
                                                                    </div>
                                                                    <br>
                                                                    <a href="<?php echo $value['pjad_evidencia_ingreso']; ?>" target="_blank">Evidencia de ingreso adjunto</a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div> 
                                <?php } ?>
                                </div>
                            </div>
                            <!-- uso interno -->
                            <div class="tab-pane fade" id="interno" role="tabpanel" aria-labelledby="interno-tab">
                                <div class="d-flex mb-2">
                                <?php foreach ($uso_interno as $key => $value) { ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">PARA USO INTERNO DE PANAMA CAR RENTAL, S.A.</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del vendedor</label>
                                                                    <input class="form-control" id="basiInput" name="pjui_nombre_completo_1" value="<?php echo $value['pjui_nombre_completo_1']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <input class="form-control" id="basiInput" name="pjui_aprobacion_1" value="<?php echo $value['pjui_aprobacion_1']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjui_fecha_1" value="<?php echo $value['pjui_fecha_1']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del encargado de sucursal</label>
                                                                    <input class="form-control" id="basiInput" name="pjui_nombre_completo_2" value="<?php echo $value['pjui_nombre_completo_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <input class="form-control" id="basiInput" name="pjui_aprobacion_2" value="<?php echo $value['pjui_aprobacion_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjui_fecha_2" value="<?php echo $value['pjui_fecha_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del analista de cumplimiento</label>
                                                                    <input class="form-control" id="basiInput" name="pjui_nombre_completo_3" value="<?php echo $value['pjui_nombre_completo_3']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <input class="form-control" id="basiInput" name="pjui_aprobacion_3" value="<?php echo $value['pjui_aprobacion_3']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjui_fecha_3" value="<?php echo $value['pjui_fecha_3']; ?>">
                                                                </div>
                                                            </div>

                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del gerente de venta de autos (solo para PEPs)</label>
                                                                    <input class="form-control" id="basiInput" name="pjui_nombre_completo_4" value="<?php echo $value['pjui_nombre_completo_4']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <input class="form-control" id="basiInput" name="pjui_aprobacion_4" value="<?php echo $value['pjui_aprobacion_4']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjui_fecha_4" value="<?php echo $value['pjui_fecha_4']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                            <!-- I. GENERALES DE LOS BENEFICIARIOS FINALES- PERSONA NATURAL -->
                            <div class="tab-pane fade" id="generales_beneficiarios_natural" role="tabpanel" aria-labelledby="generales_beneficiarios_natural-tab">
                                <div class="d-flex mb-2">

                                    <div class="row" style="width:100%;">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">GENERALES DE LOS BENEFICIARIOS FINALES- PERSONA NATURAL</h4>
                                                </div><!-- end card header -->
                                                    <div class="card-body">COMPLETE CON LOS DATOS DE LAS PERSONAS NATURALES QUE OSTENTAN UNA PARTICIPACIÓN DEL 25% O MÁS EN EL CLIENTE O PROVEEDOR.</div>
                                                    <div class="card-body">
                                                        <div class="live-preview">
                                                            
                                                            <a href="#" onclick="mostrar_ocultar_modal('generales_beneficiarios', 'cClienteFormulario', '', '', 'id_general_bfn', <?php echo $id; ?>)" class="btn btn-primary">Agregar</a>
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nombre Completo</th>
                                                                        <th>Participación</th>
                                                                        <th>Nacionalidad</th>ó
                                                                        <th>Profesión</th>
                                                                        <th>Correo</th>
                                                                        <th>Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="generales_beneficiarios_final_natural">
                                                                <?php 
                                                                foreach ($obtener_registros_bfn as $key => $value) { ?>
                                                                <tr>
                                                                    <td><input value="<?php echo $value['pjgbf_nombre_completo']; ?>" name="pjgbf_nombre_completo[]" class="form-control"> </td>
                                                                    <td><input value="<?php echo $value['pjgbf_porcentaje_participacion']; ?>" name="pjgbf_porcentaje_participacion[]" class="form-control"></td>
                                                                    <td><input value="<?php echo $value['pjgbf_nacionalidad']; ?>" name="pjgbf_nacionalidad[]" class="form-control"></td>
                                                                    <td><input value="<?php echo $value['pjgbf_profesion_oficio']; ?>" name="pjgbf_profesion_oficio[]" class="form-control"></td>
                                                                    <td><input value="<?php echo $value['pjgbf_correo']; ?>" name="pjgbf_correo[]" class="form-control"></td>
                                                                    <td><a href="#" onclick="eliminar_generales_bfn(<?php echo $value['id']; ?>, <?php echo $id; ?>)" class="btn btn-danger">Eliminar</a></td>
                                                                    <input type="hidden" name="pjgbf_telefono[]" value="<?php echo $value['pjgbf_telefono']; ?>">
                                                                    <input type="hidden" name="pjgbf_genero[]" value="<?php echo $value['pjgbf_genero']; ?>">
                                                                    <input type="hidden" name="pjgbf_identificacion[]" value="<?php echo $value['pjgbf_identificacion']; ?>">
                                                                    <input type="hidden" name="pjgbf_pais_nacimiento[]" value="<?php echo $value['pjgbf_pais_nacimiento']; ?>">
                                                                    <input type="hidden" name="pjgbf_fecha_nacimiento[]" value="<?php echo $value['pjgbf_fecha_nacimiento']; ?>">
                                                                    <input type="hidden" name="pjgbf_pais_residencia[]" value="<?php echo $value['pjgbf_pais_residencia']; ?>">
                                                                    <input type="hidden" name="pjgbf_pais_residencia_fiscal[]" value="<?php echo $value['pjgbf_pais_residencia_fiscal']; ?>">
                                                                    <input type="hidden" name="pjgbf_lugar_trabajo[]" value="<?php echo $value['pjgbf_lugar_trabajo']; ?>">
                                                                    <input type="hidden" name="pjgbf_domicilio_personal[]" value="<?php echo $value['pjgbf_domicilio_personal']; ?>">
                                                                </tr>
                                                                <?php } ?>
                                                                </tbody>
                                                            </table> 
                                                            <!--end row-->
                                                        </div>
                                                        <div class="d-none code-view">
                                                            <pre class="language-markup" style="height: 450px;">
                                                        </div>
                                                    </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                    </div><!--end col-->

                                </div>
                            </div>
                            <!-- II. GENERALES DE LOS BENEFICIARIOS FINALES- PERSONA JURÍDICA -->
                            <div class="tab-pane fade" id="generales_beneficiarios_juridica" role="tabpanel" aria-labelledby="generales_beneficiarios_juridica-tab">
                                <div class="d-flex mb-2">

                                    <div class="row" style="width:100%;">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">GENERALES DE LOS BENEFICIARIOS FINALES- PERSONA JURÍDICA</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">COMPLETE CON LOS DATOS DE LAS PERSONAS JURÍDICAS QUE OSTENTAN UNA PARTICIPACIÓN DEL 25% O MÁS EN EL CLIENTE O PROVEEDOR.</div>
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        
                                                        <a href="#" onclick="mostrar_ocultar_modal('generales_beneficiarios_juridicos', 'cClienteFormulario', '', '', 'id_general_gbfpj', <?php echo $id; ?>)" class="btn btn-primary">Agregar</a>

                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nombre de accionistas</th>
                                                                    <th>Fecha de construcción</th>
                                                                    <th>Pais de contrucción</th>
                                                                    <th>Telefono</th>
                                                                    <th>RUC</th>
                                                                    <th>Acciones</th>
                                                                </tr>
                                                            </thead> 
                                                            <tbody id="generales_beneficiarios_persona_juridica">
                                                            <?php 
                                                                foreach ($obtener_registros_bfpj as $key => $value) { ?>
                                                                    <tr>
                                                                        <td><input value="<?php echo $value['gbfpj_nombre_completo_accionista']; ?>" name="gbfpj_nombre_completo_accionista[]" class="form-control"> </td>
                                                                        <td><input value="<?php echo $value['gbfpj_fecha_constitucion']; ?>" name="gbfpj_fecha_constitucion[]" class="form-control"></td>
                                                                        <td><input value="<?php echo $value['gbfpj_pais_constitucion']; ?>" name="gbfpj_pais_constitucion[]" class="form-control"></td>
                                                                        <td><input value="<?php echo $value['gbfpj_telefono']; ?>" name="gbfpj_telefono[]" class="form-control"></td>
                                                                        <td><input value="<?php echo $value['gbfpj_ruc']; ?>" name="gbfpj_ruc[]" class="form-control"></td>
                                                                        <td><a href="#" onclick="eliminar_pj_beneficiario_final_pj(<?php echo $value['id']; ?>,  <?php echo $id; ?>)" class="btn btn-danger">Eliminar</a></td>
                                                                        <input type="hidden" name="gbfpj_porcentaje_participacion[]" value="<?php echo $value['gbfpj_porcentaje_participacion']; ?>">
                                                                        <input type="hidden" name="gbfpj_sector_economico[]" value="<?php echo $value['gbfpj_sector_economico']; ?>">
                                                                        <input type="hidden" name="gbfpj_direccion[]" value="<?php echo $value['gbfpj_direccion']; ?>">
                                                                        <input type="hidden" name="gbfpj_tipo_pj[]" value="<?php echo $value['gbfpj_tipo_pj']; ?>">
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table> 
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                    </div><!--end col-->

                                </div>
                            </div>
                            <!-- III. PROPIETARIOS DE LOS BENEFICIARIOS FINALES- PERSONA JURÍDICA -->
                            <div class="tab-pane fade" id="propietarios_juridica" role="tabpanel" aria-labelledby="propietarios_juridica-tab">
                                <div class="d-flex mb-2">

                                    <div class="row" style="width:100%;">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">PROPIETARIOS DE LOS BENEFICIARIOS FINALES- PERSONA JURÍDICA</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">INDIQUE LOS ACCIONISTAS PERSONA NATURAL DE LAS ENTIDADES JURÍDICAS LISTADAS EN LA SECCIÓN II.
                                                    <div class="live-preview">
                                                        <a href="#" onclick="mostrar_ocultar_modal('propietarios_beneficiarios_juridicos', 'cClienteFormulario', '', '', 'id_general_gprpj', <?php echo $id; ?>)" class="btn btn-primary">Agregar</a>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nombre Completo</th>
                                                                    <th>Nacionalidad</th>
                                                                    <th>Fecha N.</th>
                                                                    <th>Correo</th>
                                                                    <th>Porcentaje</th>
                                                                    <th>Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="propietarios_propietario_persona_juridica">
                                                            <?php foreach ($obtener_registros_propietario as $key => $value) { ?>
                                                                <tr>
                                                                    <td><input value="<?php echo $value['pjpbj_nombre_completo']; ?>" name="pjpbj_nombre_completo[]" class="form-control"> </td>
                                                                    <td><input value="<?php echo $value['pjpbj_nacionalidad']; ?>" name="pjpbj_nacionalidad[]" class="form-control"></td>
                                                                    <td><input value="<?php echo $value['pjpbj_pais_nacimineto']; ?>" name="pjpbj_fecha_nacimiento[]" class="form-control"></td>
                                                                    <td><input value="<?php echo $value['pjpbj_correo']; ?>" name="pjpbj_correo[]" class="form-control"></td>
                                                                    <td><input value="<?php echo $value['pjpbj_porcentaje_participacion']; ?>" name="pjpbj_porcentaje_participacion[]" class="form-control"></td>
                                                                    <td><a href="#" onclick="eliminar_pj_propietario_bf(<?php echo $value['id']; ?>, <?php echo $id; ?>)" class="btn btn-danger">Eliminar</a></td>
                                                                    <input type="hidden" name="pjpbj_genero[]" value="<?php echo $value['pjpbj_genero']; ?>">
                                                                    <input type="hidden" name="pjpbj_cedula_pasaporte[]" value="<?php echo $value['pjpbj_cedula_pasaporte']; ?>">
                                                                    <input type="hidden" name="pjpbj_pais_nacimineto[]" value="<?php echo $value['pjpbj_pais_nacimineto']; ?>">
                                                                    <input type="hidden" value="<?php echo $value['pjpbj_profesion_oficio']; ?>" name="pjpbj_profesion_oficio[]">
                                                                    <input type="hidden" name="pjpbj_pais_residencia[]" value="<?php echo $value['pjpbj_pais_residencia']; ?>">
                                                                    <input type="hidden" name="pjpbj_pais_residencia_fiscal[]" value="<?php echo $value['pjpbj_pais_residencia_fiscal']; ?>">
                                                                    <input type="hidden" name="pjpbj_lugar_trabajo[]" value="<?php echo $value['pjpbj_lugar_trabajo']; ?>">
                                                                    <input type="hidden" name="pjpbj_telefono[]" value="<?php echo $value['pjpbj_telefono']; ?>">
                                                                    <input type="hidden" name="pjpbj_domicilio_laboral[]" value="<?php echo $value['pjpbj_domicilio_laboral']; ?>">
                                                                    <input type="hidden" name="pjpbj_domicilio_personal[]" value="<?php echo $value['pjpbj_domicilio_personal']; ?>">
                                                                    <input type="hidden" name="pjpbj_entidad_participa[]" value="<?php echo $value['pjpbj_entidad_participa']; ?>">
                                                                </tr>

                                                                <?php } ?>
                                                            </tbody>
                                                        </table> 
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>

                                </div>
                            </div>
                            <!--DECLARACIÓN JURADA -->
                            <div class="tab-pane fade" id="declaracion_jurada" role="tabpanel" aria-labelledby="declaracion_jurada-tab">
                                <div class="d-flex mb-2">
                                    <?php foreach ($declaracion_jurada_2 as $key => $value) { 

                                         $p_jdj_nombre_completo_2 =  $value['p_jdj_nombre_completo_2']; 
                                         $p_jdj_firma_2 = $value['p_jdj_firma_2']; 
                                         $p_jdj_fecha_2 = $value['p_jdj_fecha_2']; 

                                         if (is_null($p_jdj_firma_2)) {
                                            $p_jdj_firma_2 = '';
                                            
                                         }else {
                                            $p_jdj_firma_2 = '<a href="'.$p_jdj_firma_2.'" target="_blank">Firma adjunta</a>';
                                         }

                                     }

                                     if (!isset($p_jdj_nombre_completo_2)) {
                                        $p_jdj_nombre_completo_2 = '';
                                     }

                                     if (!isset($p_jdj_fecha_2)) {
                                        $p_jdj_fecha_2 = '';
                                     }
                                     
                                     if (!isset($p_jdj_firma_2)) {
                                        $p_jdj_firma_2 = '';
                                     }
                                     
                                     ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">DECLARACIÓN JURADA</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <p>
                                                    POR ESTE MEDIO DECLARO QUE TODA LA INFORMACIÓN ANTES MENCIONADA ES VERDADERA A LOS DÍAS ____ DEL   _____ DE 20__; Y 
                                                    NOS OBLIGAMOS A NOTIFICAR INMEDIATAMENTE CUALQUIER CAMBIO QUE SE DÉ. ACEPTAMOS QUE CUALQUIER CAMBIO EN LOS BENEFICIARIOS 
                                                    FINALES DE ESTA ENTIDAD, SERÁ DEBIDAMENTE NOTIFICADO A PANAMÁ CAR RENTAL, S.A. EN UN PERIODO NO MAYOR A TREINTA (30) DÍAS 
                                                    CALENDARIOS DESPUÉS DE REALIZADO DICHO CAMBIO.
                                                    </p>
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre completo</label>
                                                                    <input class="form-control" id="basiInput" name="p_jdj_nombre_completo_2" value="<?php echo $p_jdj_nombre_completo_2; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Firma</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="p_jdj_firma_2">
                                                                </div>
                                                                <br>
                                                                <?php echo $p_jdj_firma_2; ?>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="date" class="form-control" name="p_jdj_fecha_2" value="<?php echo $p_jdj_fecha_2; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    
                                </div>
                            </div> 
                            <!-- aviso legal -->
                            <div class="tab-pane fade" id="aviso_legal" role="tabpanel" aria-labelledby="aviso_legal-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">AVISO LEGAL</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                        <p>PANAMA CAR RENTAL, S.A. ES SUJETO OBLIGADO NO FINANCIERO DE ACUERDO CON LA LEY 124 DE 7 DE ENERO DE 2020 "QUE CREA LA 
                                                        SUPERINTENDENCIA DE SUJETOS NO FINANCIEROS Y DICTA OTRAS DISPOSICIONES", LA LEY 23 DEL 27 DE ABRIL DE 2015 "QUE ADOPTA 
                                                        MEDIDAS PARA PREVENIR EL BLANQUEO DE CAPITALES, EL FINANCIAMIENTO DEL TERRORISMO Y DEL FINANCIAMIENTO DE LA PROLIFERACIÓN 
                                                        DE ARMAS DE DESTRUCCIÓN MASIVA Y OTRAS DISPOSICIONES", SUS MODIFICACIONES Y DEMÁS REGLAMENTACIONES</p>
                                                        <p>
                                                        AUTOMARKET SEMINUEVOS SE REFIERE A LA MARCA BAJO LA CUAL PANAMA CAR RENTAL, S.A. OFRECE SUS PRODUCTOS Y SERVICIOS. EL NOMBRE 
                                                        “AUTOMARKET SEMINUEVOS” Y SU LOGOTIPO ES UNA MARCA REGISTRADA DE PROPIEDAD DE SEMINUEVOS, S.A. LA SOCIEDAD SEMINUEVOS, S.A. NO 
                                                        TIENE RELACIÓN COMERCIAL Y/O CONTRACTUAL NI PRESTA SERVICIOS A LOS CLIENTES DE PANAMA CAR RENTAL, S.A. 
                                                        </p>
                                                        </div>
                                                        <!--end row
                                                        <input type="submit" class="btn btn-primary" value="Actualizar" name="actualizar_cc_pj">-->
                                                        <button type="button" class="btn btn-primary btn-sm" id="sa-success" style="display:none;"></button>
                                                        <input type="hidden" name="id_general" value="<?php echo $_GET['id']; ?>">
                                                        
                                                        <?php /* if ($_SESSION["usuario"][0]["tipo_user"] == "vendedor" || $_SESSION["usuario"][0]["tipo_user"] == "admin" && $stado_general == 1) { ?>
                                                            <input type="submit" class="btn btn-primary" value="Actualizar" name="actualizar_cc_pj">
                                                            <a class="btn btn-primary" onclick="solicitar_aprobacion_pj(<?php echo $id; ?>, 'solicitar_aprobacion', 'contenido_modal_solicitar_aprobacion')">Solicitar Aprobacion</a>
                                                        <?php }elseif ($_SESSION["usuario"][0]["tipo_user"] == "vendedor" || $_SESSION["usuario"][0]["tipo_user"] == "admin" && $stado_general == 2) { ?>
                                                            <a class="btn btn-warning" onclick="revicion_cc_pj(<?php echo $id; ?>, 'solicitar_revicion', 'contenido_modal_solicitar_revicion')">Revicion</a>
                                                            <a class="btn btn-success" onclick="aprobacion_cc_pj(<?php echo $id; ?>, 'solicitar_aprobacion', 'contenido_modal_solicitar_aprobacion')">Aprobar</a>
                                                        <?php }elseif ($_SESSION["usuario"][0]["tipo_user"] == "vendedor" || $_SESSION["usuario"][0]["tipo_user"] == "admin" && $stado_general == 3) { ?>
                                                           <input type="submit" class="btn btn-primary" value="Actualizar" name="actualizar_cc_pj">
                                                           <a class="btn btn-primary" onclick="solicitar_aprobacion_pj(<?php echo $id; ?>, 'solicitar_aprobacion', 'contenido_modal_solicitar_aprobacion')">Solicitar Aprobacion</a>
                                                        <?php }else{
                                                            echo '<h4>Este master ha sido aprobado</h4>';
                                                        }  */ ?>
                                                        
                                                        <?php if (($_SESSION["usuario"][0]["tipo_user"] == "vendedor" || $_SESSION["usuario"][0]["tipo_user"] == "admin" || $_SESSION["usuario"][0]["tipo_user"] == "gerencia") && $stado_general == 1) { ?>
                                                            
                                                            <input type="submit" class="btn btn-primary" value="Actualizar" name="actualizar_cc_pj">
                                                            <a class="btn btn-primary" onclick="solicitar_aprobacion_pj(<?php echo $id; ?>, 'solicitar_aprobacion', 'contenido_modal_solicitar_aprobacion')">Solicitar Aprobacion al supervisor</a>

                                                        <?php }elseif (($_SESSION["usuario"][0]["tipo_user"] == "analista" || $_SESSION["usuario"][0]["tipo_user"] == "admin" || $_SESSION["usuario"][0]["tipo_user"] == "gerencia") && $stado_general == 5) { ?>
                                                            
                                                            <a class="btn btn-warning" onclick="revicion_cc_pj(<?php echo $id; ?>, 'solicitar_revicion', 'contenido_modal_solicitar_revicion')">Revicion</a>
                                                            <a class="btn btn-success" onclick="aprobacion_cc_pj(<?php echo $id; ?>, 'solicitar_aprobacion', 'contenido_modal_solicitar_aprobacion')">Aprobar</a>
                                                        
                                                        <?php }elseif (($_SESSION["usuario"][0]["tipo_user"] == "supervisor" || $_SESSION["usuario"][0]["tipo_user"] == "admin" || $_SESSION["usuario"][0]["tipo_user"] == "gerencia") && $stado_general == 2) { ?>
                                                            
                                                            <!--<input type="submit" class="btn btn-primary" value="Actualizar" name="actualizar_cc_pj">-->
                                                            <a class="btn btn-warning" onclick="revicion_cc_pj(<?php echo $id; ?>, 'solicitar_revicion', 'contenido_modal_solicitar_revicion')">Revicion</a>
                                                            <a class="btn btn-primary" onclick="solicitar_aprobacion_analista_pj(<?php echo $id; ?>, 'solicitar_aprobacion', 'contenido_modal_solicitar_aprobacion')">Solicitar Aprobacion al analista</a>
                                                        
                                                        <?php }elseif (($_SESSION["usuario"][0]["tipo_user"] == "vendedor" || $_SESSION["usuario"][0]["tipo_user"] == "admin" || $_SESSION["usuario"][0]["tipo_user"] == "gerencia") && $stado_general == 3) { ?>
                                                           
                                                           <input type="submit" class="btn btn-primary" value="Actualizar" name="actualizar_cc_pj">
                                                           <a class="btn btn-primary" onclick="solicitar_aprobacion_pj(<?php echo $id; ?>, 'solicitar_aprobacion', 'contenido_modal_solicitar_aprobacion')">Solicitar Aprobacion</a>

                                                        <?php }elseif ($stado_general == 4) {
                                                             echo '<h4>Este registro ha sido finalizado</h4>';
                                                              }else{
                                                            echo '<h4>Este registro esta en revicion</h4>';
                                                        } ?>

                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    </div><!--  end col -->
                </div><!--end row-->
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!--end col-->
</form>

<?php 

}elseif(isset($_GET['eliminar_formulario_cc'])){ ?>

<form method="POST" action="" enctype="multipart/form-data">
    <div class="col-xxl-12">
        <h5 class="mb-3" style="color:red;">Eliminar</h5>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link mb-2 active" id="portada-tab" data-bs-toggle="pill" href="#portada" role="tab" aria-controls="portada" aria-selected="true">PORTADA FILE VENTAS</a>
                            <a class="nav-link mb-2" id="generales-tab" data-bs-toggle="pill" href="#generales" role="tab" aria-controls="generales" aria-selected="true">GENERALES</a>
                            <a class="nav-link mb-2" id="declaracion-tab" data-bs-toggle="pill" href="#declaracion" role="tab" aria-controls="declaracion" aria-selected="false">DECLARACION</a>
                            <a class="nav-link mb-2" id="representante_legal-tab" data-bs-toggle="pill" href="#representante_legal" role="tab" aria-controls="representante_legal" aria-selected="false">REPRESENTANTE LEGAL</a>
                            <a class="nav-link" id="directiva-tab" data-bs-toggle="pill" href="#directiva" role="tab" aria-controls="directiva" aria-selected="false">DIRECTIVA Y DIGNATARIOS</a>
                            <a class="nav-link mb-2" id="apoderados-tab" data-bs-toggle="pill" href="#apoderados" role="tab" aria-controls="apoderados" aria-selected="false">APODERADOS</a>
                            <a class="nav-link mb-2" id="propietarios-tab" data-bs-toggle="pill" href="#propietarios" role="tab" aria-controls="propietarios" aria-selected="false">PROPIETARIOS</a>
                            <a class="nav-link" id="declaracion_accionistas-tab" data-bs-toggle="pill" href="#declaracion_accionistas" role="tab" aria-controls="declaracion_accionistas" aria-selected="false">DECLARACIÓN DE ACCIONISTAS</a>
                            <a class="nav-link mb-2" id="beneficio_final-tab" data-bs-toggle="pill" href="#beneficio_final" role="tab" aria-controls="beneficio_final" aria-selected="false">BENEFICIARIO FINAL</a>
                            <a class="nav-link mb-2" id="terceros_autorizados-tab" data-bs-toggle="pill" href="#terceros_autorizados" role="tab" aria-controls="terceros_autorizados" aria-selected="false">TERCEROS AUTORIZADOS</a>
                            <a class="nav-link" id="expuestas_politicamente-tab" data-bs-toggle="pill" href="#expuestas_politicamente" role="tab" aria-controls="expuestas_politicamente" aria-selected="false">EXPUESTAS POLÍTICAMENTE</a>
                            <a class="nav-link" id="referencias-tab" data-bs-toggle="pill" href="#referencias" role="tab" aria-controls="referencias" aria-selected="false">REFERENCIAS</a>
                            <a class="nav-link mb-2" id="jurada-tab" data-bs-toggle="pill" href="#jurada" role="tab" aria-controls="jurada" aria-selected="false">DECLARACIÓN JURADA</a>
                            <a class="nav-link mb-2" id="adjuntar-tab" data-bs-toggle="pill" href="#adjuntar" role="tab" aria-controls="adjuntar" aria-selected="false">ADJUNTOS</a>
                            <a class="nav-link" id="interno-tab" data-bs-toggle="pill" href="#interno" role="tab" aria-controls="interno" aria-selected="false">USO INTERNO</a>
                            <a class="nav-link" id="generales_beneficiarios_natural-tab" data-bs-toggle="pill" href="#generales_beneficiarios_natural" role="tab" aria-controls="generales_beneficiarios_natural" aria-selected="false">GENERALES B.F. P.N.</a>
                            <a class="nav-link mb-2" id="generales_beneficiarios_juridica-tab" data-bs-toggle="pill" href="#generales_beneficiarios_juridica" role="tab" aria-controls="generales_beneficiarios_juridica" aria-selected="false">GENERALES B.F. P.J.</a>
                            <a class="nav-link mb-2" id="propietarios_juridica-tab" data-bs-toggle="pill" href="#propietarios_juridica" role="tab" aria-controls="propietarios_juridica" aria-selected="false">PROPIETARIOS B.F. P.J.</a>
                            <a class="nav-link" id="declaracion_jurada-tab" data-bs-toggle="pill" href="#declaracion_jurada" role="tab" aria-controls="declaracion_jurada" aria-selected="false">DECLARACIÓN JURADA</a>
                            <a class="nav-link" id="aviso_legal-tab" data-bs-toggle="pill" href="#aviso_legal" role="tab" aria-controls="aviso_legal" aria-selected="false">AVISO LEGAL</a>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-10">
                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                            <!-- Expediente -->
                            <div class="tab-pane fade show active" id="portada" role="tabpanel" aria-labelledby="portada-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">CONTROL DE ENTREGA DE EXPEDIENTES  DE VENTAS DE AUTOS | PERSONA JURIDICA</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <?php foreach ($expedienete as $key => $value) { ?>
                                                        
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjexp_fecha" value="<?php echo $value['pjexp_fecha']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cliente</label>
                                                                    <input type="text" class="form-control" id="nombre_completo_inp" name="pjexp_cliente" value="<?php echo $value['pjexp_cliente']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Marca</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_marca" value="<?php echo $value['pjexp_marca']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Modelo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_modelo" value="<?php echo $value['pjexp_modelo']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Año</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_anio" value="<?php echo $value['pjexp_anio']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Placa</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_placa" value="<?php echo $value['pjexp_placa']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Chasis</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_chasis" value="<?php echo $value['pjexp_chasis']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Motor</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_motor" value="<?php echo $value['pjexp_motor']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Color</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_color" value="<?php echo $value['pjexp_color']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Código Dollar</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_codigo_dollar" value="<?php echo $value['pjexp_codigo_dollar']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">N° INTELISIS</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_n_intelisis" value="<?php echo $value['pjexp_n_intelisis']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                        <?php } ?>
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>

                                </div>
                            </div>
                            <!-- Datos generales -->
                            <div class="tab-pane fade" id="generales" role="tabpanel" aria-labelledby="generales-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">DATOS GENERALES</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                    <?php foreach ($generales as $key => $value) { ?>
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Razón solcial</label>
                                                                    <input type="text" class="form-control" name="pjgn_razon_social" value="<?php echo $value['pjgn_razon_social']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre Comercial</label>
                                                                    <input type="text" class="form-control" name="pjgn_nombre_comercial" value="<?php echo $value['pjgn_nombre_comercial']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Datos de inscripción</label>
                                                                    <input type="text" class="form-control" name="pjgn_datos_inscripcion" value="<?php echo $value['pjgn_datos_inscripcion']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Tipo de persona</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjgn_tipo_persona">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($tipo_persona as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjgn_tipo_persona']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Dirección Fisíca</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjgn_direccion_fisica"><?php echo $value['pjgn_direccion_fisica']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">País de constitución</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjgn_pais_constitucion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjgn_pais_constitucion']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Residencia Fiscal</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjgn_residencia_fiscal"><?php echo $value['pjgn_residencia_fiscal']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">RUC & DV</label>
                                                                    <input type="text" class="form-control" name="pjgn_ruc_dv" value="<?php echo $value['pjgn_ruc_dv']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Teléfono</label>
                                                                    <input type="text" class="form-control" name="pjgn_telefono" value="<?php echo $value['pjgn_telefono']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apartado Postal</label>
                                                                    <input type="text" class="form-control" name="pjgn_apartado_postal" value="<?php echo $value['pjgn_apartado_postal']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aviso de operación</label>
                                                                    <input type="text" class="form-control" name="pjgn_aviso_operacion" value="<?php echo $value['pjgn_aviso_operacion']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Licencia</label>
                                                                    <input type="text" class="form-control" name="pjgn_licencia" value="<?php echo $value['pjgn_licencia']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Entidad reguladora</label>
                                                                    <input type="text" class="form-control" name="pjgn_entidad_reguladora" value="<?php echo $value['pjgn_entidad_reguladora']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Activida principal a la que se dedica</label>
                                                                    <input type="text" class="form-control" name="pjgn_actividad_principal_dedica" value="<?php echo $value['pjgn_actividad_principal_dedica']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Descripcion del negocio 
                                                                        <small>(SUMINISTRE UN RESUMEN ACTUALIZADO DE LOS PRINCIPALES ACTIVIDADES O NEGOCIOS A LAS CUALES SE DEDICA)</small>
                                                                    </label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjgn_descripcion_negocio"><?php echo $value['pjgn_descripcion_negocio']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Paises donde ofrece sus productos o servicios</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjgn_paises_ofrece_productos_servicios">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjgn_paises_ofrece_productos_servicios']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">E-mail </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="pjgn_email" value="<?php echo $value['pjgn_email']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cargo</label>
                                                                    <input type="text" class="form-control" name="pjgn_cargo" value="<?php echo $value['pjgn_cargo']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    <?php } ?>
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>

                                </div>
                            </div>
                            <!-- Declaracion -->
                            <div class="tab-pane fade" id="declaracion" role="tabpanel" aria-labelledby="declaracion-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">DECLARACIÓN DE FUENTES Y ORIGEN DE LOS FONDOS.</h4>
                                                </div><!-- end card header -->
                                                
                                                <div class="card-body">
                                                    <p>
                                                    DECLARO QUE LOS FONDOS PARA EFECTUAR LA TRANSACCIÓN DE COMPRAVENTA PROVIENEN DE FUENTES LÍCITAS Y PROPIAS DETALLADAS A 
                                                    CONTINUACIÓN Y QUE NO REALIZARÉ O ADMITIRÉ QUE SE EFECTÚEN PAGOS A NOMBRE MÍO O DE LA PERSONA QUE REPRESENTO CON FONDOS 
                                                    PROVENIENTES DE ACTIVIDADES ILÍCITAS, NI EFECTUARÉ TRANSACCIONES DESTINADAS A TALES ACTIVIDADES O A FAVOR DE PERSONAS RELACIONADAS A LAS MISMAS.
                                                    </p>
                                                    <div class="live-preview">
                                                        <?php foreach ($declaracion as $key => $value) { ?>
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Actividaad principal</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjdf_actividad_principal"><?php echo $value['pjdf_actividad_principal']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Actividad secundaria</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjdf_actividad_secundaria"><?php echo $value['pjdf_actividad_secundaria']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Otras fuentes</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjdf_otras_fuentes"><?php echo $value['pjdf_otras_fuentes']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Otras fuentes 2</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjdf_otras_fuentes_secundaria"><?php echo $value['pjdf_otras_fuentes_secundaria']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Limite de compra</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjdf_limite_compra">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($limite as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjdf_limite_compra']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Forma de pago</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjdf_forma_pago">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjdf_forma_pago']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Método de pago</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjdf_metodo_pago_1">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($motodo_pago as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjdf_metodo_pago_1']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Método de pago 2</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjdf_metodo_pago_2">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($motodo_pago as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjdf_metodo_pago_2']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                        <?php } ?>
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>

                                </div>
                            </div>
                            <!-- Representante legal -->
                            <div class="tab-pane fade" id="representante_legal" role="tabpanel" aria-labelledby="representante_legal-tab">
                                <div class="d-flex mb-2">
                                    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">DATOS DEL REPRESENTANTE LEGAL.</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body"></div>
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <?php foreach ($representante_legal as $key => $value) { ?>
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre Completo</label>
                                                                    <input type="text" class="form-control" name="pjrl_nombre_completo" value="<?php echo $value['pjrl_nombre_completo']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cedula / N# Pasaporte.</label>
                                                                    <input type="text" class="form-control" name="pjrl_cedula_pasaporte" value="<?php echo $value['pjrl_cedula_pasaporte']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Estado Civil</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjrl_estado_civil">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($estado_civil as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjrl_estado_civil']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjrl_nacionalidada">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjrl_nacionalidada']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha de nacimiento</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjrl_fecha_nacimiento" value="<?php echo $value['pjrl_fecha_nacimiento']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Dirección</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjrl_direccion"><?php echo $value['pjrl_direccion']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electronico </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="pjrl_correo" value="<?php echo $value['pjrl_correo']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Profesión.</label>
                                                                    <input type="text" class="form-control" name="pjrl_profesion" value="<?php echo $value['pjrl_profesion']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Lugar de trabajo.</label>
                                                                    <input type="text" class="form-control" name="pjrl_lugar_trabajo" value="<?php echo $value['pjrl_lugar_trabajo']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Teléfono.</label>
                                                                    <input type="text" class="form-control" name="pjrl_telefono" value="<?php echo $value['pjrl_telefono']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                        <?php } ?>
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>

                                </div>
                            </div>
                            <!-- Junta directiva temporal -->
                            <?php /*
                            <div class="tab-pane fade" id="directiva" role="tabpanel" aria-labelledby="directiva-tab">
                                <div class="d-flex mb-2">
                                    
                                    <div class="row" style="width:100%;">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">JUNTA DIRECTIVA Y DIGNATARIOS.</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">DETALLE LOS DIRECTORES Y DIGNATARIOS. AGREGUE MÁS LÍNEAS SEGÚN SEA NECESARIO.</div>
                                                    <div class="card-body">
                                                        <div class="live-preview">
                                                            
                                                            <a href="#" data-bs-toggle="modal" data-bs-target=".junta_directiva" class="btn btn-primary">Agregar</a>

                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nombre Completo</th>
                                                                        <th>Cargo</th>
                                                                        <th>Nacionalidad</th>
                                                                        <th>I.D.</th>
                                                                        <th>Correo</th>
                                                                        <th>Dirección</th>
                                                                        <th>Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="contenido_junta_directiva_modal">
                                                                    <?php foreach ($junta_directiva_dignatarios as $key => $value) { ?>
                                                                            <tr>
                                                                                <td><input value="<?php echo $value['jd_temp_nombre_completo']; ?>" name="pjdd_nombre_completo[]" class="form-control"> </td>
                                                                                <td><input value="<?php echo $value['jd_temp_cargo']; ?>" name="pjdd_cargo[]" class="form-control"></td>
                                                                                <td><input value="<?php echo $value['jd_temp_nacionalidad']; ?>" name="pjdd_nacionalidad[]" class="form-control"></td>
                                                                                <td><input value="<?php echo $value['jd_temp_id']; ?>" name="pjdd_id[]" class="form-control"></td>
                                                                                <td><input value="<?php echo $value['jd_temp_correo']; ?>" name="pjdd_correo[]" class="form-control"></td>
                                                                                <td><input value="<?php echo $value['jd_temp_direccion']; ?>" name="pjdd_direccion[]" class="form-control"></td>
                                                                                <td><a href="#" onclick="eliminar_dd_temp(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
                                                                                <input type="hidden" name="pjdd_telefono[]" value="<?php echo $value['jd_temp_telefono']; ?>">
                                                                            </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table> 
                                                            <!--end row-->
                                                        </div>
                                                        <div class="d-none code-view">
                                                            <pre class="language-markup" style="height: 450px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                    </div>
                                </div>
                            
                                <?php */ ?>
                           
                                <!-- Apoderados temporal -->
                            <div class="tab-pane fade" id="apoderados" role="tabpanel" aria-labelledby="apoderados-tab">
                                <div class="d-flex mb-2">

                                    <div class="row" style="width:100%;">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">APODERADOS</h4>
                                                </div><!-- end card header -->
                                                
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        
                                                        <a href="#" data-bs-toggle="modal" data-bs-target=".apoderados" class="btn btn-primary">Agregar</a>

                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nombre Completo</th>
                                                                    <th>Cargo</th>
                                                                    <th>Nacionalidad</th>
                                                                    <th>I.D.</th>
                                                                    <th>Correo</th>
                                                                    <th>Dirección</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="apoderados_tabla">
                                                                <?php foreach ($obtener_registros_temp_apot as $key => $value) { ?>
                                                                            <tr>
                                                                                <td><input value="<?php echo $value['a_temp_nombre_completo']; ?>" name="pja_nombre_completo[]" class="form-control"> </td>
                                                                                <td><input value="<?php echo $value['a_temp_cargo']; ?>" name="pja_cargo[]" class="form-control"></td>
                                                                                <td><input value="<?php echo $value['a_temp_nacionalidad']; ?>" name="pja_nacionalidad[]" class="form-control"></td>
                                                                                <td><input value="<?php echo $value['a_temp_id']; ?>" name="pja_id[]" class="form-control"></td>
                                                                                <td><input value="<?php echo $value['a_temp_correo']; ?>" name="pja_correo[]" class="form-control"></td>
                                                                                <td><input value="<?php echo $value['a_temp_direccion']; ?>" name="pja_direccion[]" class="form-control"></td>
                                                                                <td><a href="#" onclick="eliminar_a_temp(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
                                                                                <input type="hidden" name="pja_telefono[]" value="<?php echo $value['a_temp_telefono']; ?>">
                                                                            </tr>
                                                                    <?php }  ?>
                                                            </tbody>
                                                        </table>
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div> 
                                </div>
                            </div>
                            <!-- Propietarios -->
                            <div class="tab-pane fade" id="propietarios" role="tabpanel" aria-labelledby="propietarios-tab">
                                <div class="d-flex mb-2">
                                    <?php foreach ($propietario as $key => $value) { ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">PROPIETARIOS</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">¿ESTA EMPRESA ES PÚBLICA O PRIVADA?  </label>
                                                                    <br>
                                                                    <label for="basiInput" class="form-label">Publica</label>
                                                                    <input class="form-check-input" type="radio" name="pjpr_publica_privada" <?php if($value['pjpr_publica_privada'] == '109BFF'){ echo 'checked'; } ?> id="formradioRight6" value="109BFF">
                                                                    <label for="basiInput" class="form-label">Privada</label>
                                                                    <input class="form-check-input" type="radio" name="pjpr_publica_privada" <?php if($value['pjpr_publica_privada'] == '111BFF'){ echo 'checked'; } ?> id="formradioRight6" value="111BFF">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">¿ESTA EMPRESA LICITA CON EL ESTADO?  </label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjpr_licita_estado">
                                                                        <option value="">Seleccione</option>
                                                                        <option value="SI" <?php if($value['pjpr_licita_estado'] == 'SI'){ echo 'selected'; } ?>>SI</option>
                                                                        <option value="NO" <?php if($value['pjpr_licita_estado'] == 'NO'){ echo 'selected'; } ?>>NO</option>
                                                                        <option value="NO_APLICA" <?php if($value['pjpr_licita_estado'] == 'NO_APLICA'){ echo 'selected'; } ?>>NO APLICA</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">País</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjpr_licita_pais">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['pjpr_licita_pais'] == $value['pjpr_licita_pais']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">¿LAS ACCIONES DE ESTA EMPRESA COTIZAN EN UNA BOLSA DE VALORES?  </label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjpr_cotiza_bolsa">
                                                                        <option value="">Seleccione</option>
                                                                        <option value="SI" <?php if($value['pjpr_cotiza_bolsa'] == 'SI'){ echo 'selected'; } ?>>SI</option>
                                                                        <option value="NO" <?php if($value['pjpr_cotiza_bolsa'] == 'NO'){ echo 'selected'; } ?>>NO</option>
                                                                        <option value="NO_APLICA" <?php if($value['pjpr_cotiza_bolsa'] == 'NO_APLICA'){ echo 'selected'; } ?>>NO APLICA</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">SI LA RESPUESTA ES AFIRMATIVA INDIQUE:</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjpr_descripcion_cotiza_bolsa" value="<?php echo $value['pjpr_descripcion_cotiza_bolsa']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">NOMBRE DE LA BOLSA DE VALORES Y TICKER:</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjpr_nombre_bolsa_ticker" value="<?php echo $value['pjpr_nombre_bolsa_ticker']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                        <br>
                                                        <br>
                                                        <p>
                                                        EN CASO AFIRMATIVO NO DEBE COMPLETAR SECCIÓN DE DECLARACIÓN DE ACCIONISTAS.
                                                        </p>
                                                        <p>
                                                        SI LA RESPUESTA ES NEGATIVA COMPLETE LA SECCIÓN DE DECLARACIÓN DE ACCIONISTAS.   
                                                        </p>
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- DECLARACION DE ACCIONISTAS -->
                            <div class="tab-pane fade" id="declaracion_accionistas" role="tabpanel" aria-labelledby="declaracion_accionistas-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">DECLARACIÓN DE ACCIONISTAS.</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                        <p>DETALLE LOS NOMBRES DE LOS ACCIONISTAS QUE TENGAN EL DERECHO A EJERCER EL VOTO CON RESPECTO AL VEINTICINCO POR CIENTO (25%) O MÁS DE LAS ACCIONES EMITIDAS Y EN CIRCULACIÓN. ADICIONAL DEBERÁ COMPLETAR LA DECLARACIÓN JURADA DE BENEFICIARIOS FINALES PERSONA JURÍDICA.</p>
                                                            <?php foreach ($declaracion_accionistas as $key => $value) { ?>
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre del accionista(Natural o Jurídica).</label>
                                                                    <input class="form-control" type="text" name="pjda_nombre_completo_accionista[]" value="<?php echo $value['pjda_nombre_completo_accionista']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Participación Accionarias</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjda_participacion_accionaria[]" value="<?php echo $value['pjda_participacion_accionaria']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col -->                        
                                                            <?php } ?>
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>

                                </div>
                            </div>
                            <!-- Beneficiario final -->
                            <div class="tab-pane fade" id="beneficio_final" role="tabpanel" aria-labelledby="beneficio_final-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">BENEFICIARIO FINAL.</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <?php foreach ($beneficiarioFinal as $key => $value) { ?>
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">INDIQUE SI EL AUTO SERÁ TRASPASADO A NOMBRE DEL CLIENTE O DE UN TERCERO. ?  </label>
                                                                    <br>
                                                                    <label for="basiInput" class="form-label">Cliente </label>
                                                                    <input class="form-check-input" type="radio" name="pjbf_transpaso_cliente_tercero" id="formradioRight6" <?php if($value['pjbf_transpaso_cliente_tercero'] == '109BFF'){ echo 'checked'; } ?> value="109BFF">
                                                                    <label for="basiInput" class="form-label">Tercero </label>
                                                                    <input class="form-check-input" type="radio" name="pjbf_transpaso_cliente_tercero" id="formradioRight6" <?php if($value['pjbf_transpaso_cliente_tercero'] == '110BFF'){ echo 'checked'; } ?> value="110BFF">
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                            <div class="col-xxl-8 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">EN ESTE ÚLTIMO CASO, COMPLETE CON LOS DATOS DEL BENEFICIARIO FINAL DE LA TRANSACCIÓN. DE SER PERSONA JURÍDICA, UTILIZAR EL FORMULARIO DE DEBIDA DILIGENCIA PERSONA JURÍDICA PCR-CUMP-FORM02 Y LA DECLARACIÓN JURADA DE BENEFICIARIOS FINALES DE LAS PERSONAS JURÍDICAS.</label>
                                                                    <br>
                                                                    <label for="basiInput" class="form-label">Familiar </label>
                                                                    <input class="form-check-input" type="radio" name="pjbf_relacion_cliente" id="formradioRight6" <?php if($value['pjbf_relacion_cliente'] == '111BFF'){ echo 'checked'; } ?> value="111BFF">
                                                                    <label for="basiInput" class="form-label">Tercero </label>
                                                                    <input class="form-check-input" type="radio" name="pjbf_relacion_cliente" id="formradioRight6" <?php if($value['pjbf_relacion_cliente'] == '110BFF'){ echo 'checked'; } ?> value="110BFF">
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Primer Nombre</label>
                                                                    <input type="text" class="form-control" id="primer_nombre" name="pjbf_primer_nombre" value="<?php echo $value['pjbf_primer_nombre']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Segundo Nombre</label>
                                                                    <input type="text" class="form-control" id="segundo_nombre" name="pjbf_segundo_nomnbre" value="<?php echo $value['pjbf_segundo_nomnbre']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Paterno</label>
                                                                    <input type="text" class="form-control" id="apellido_paterno" name="pjbf_apellido_parterno" value="<?php echo $value['pjbf_apellido_parterno']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Materno</label>
                                                                    <input type="text" class="form-control" id="apellido_materno" name="pjbf_apellido_materno" value="<?php echo $value['pjbf_apellido_materno']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido de Casada</label>
                                                                    <input type="text" class="form-control" id="apellido_casada" name="pjbf_apellido_casada" value="<?php echo $value['pjbf_apellido_casada']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">País de Naciemiento</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjbf_pais_nacimiento">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjbf_pais_nacimiento']){ echo 'selected'; } ?> ><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha Nacimiento</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjbf_fecha_nacimiento" value="<?php echo $value['pjbf_fecha_nacimiento']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Género</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjbf_genero">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($genero as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjbf_genero']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjbf_nacionalidad">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjbf_nacionalidad']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Estado Civil</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjbf_estado_civil">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($estado_civil as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjbf_estado_civil']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cédula/N# Pasaporte</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjbf_cedula_pasaporte" value="<?php echo $value['pjbf_cedula_pasaporte']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">País de Residencia</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjbf_pais_residencia">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjbf_pais_residencia']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Dirección Residencial</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjbf_direccion_residencia"><?php echo $value['pjbf_direccion_residencia']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">País de Residencia Fiscal</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjbf_pais_residencia_fiscal">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjbf_pais_residencia_fiscal']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electrónico </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="pjbf_correo" value="<?php echo $value['pjbf_correo']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Teléfono Residencial</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjbf_telefono_residencial" value="<?php echo $value['pjbf_telefono_residencial']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Teléfono Móvil</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjbf_telefono_celular" value="<?php echo $value['pjbf_telefono_celular']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Profesión</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjbf_profesion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjbf_profesion']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Ocupación</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjbf_ocupacion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjbf_ocupacion']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjbf_lugar_trabajo"><?php echo $value['pjbf_lugar_trabajo']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Dirección de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjbf_direccion_trabajo"><?php echo $value['pjbf_direccion_trabajo']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                        <?php } ?>
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>

                                </div>
                            </div>
                            <!-- Terceros autorizados -->
                            <div class="tab-pane fade" id="terceros_autorizados" role="tabpanel" aria-labelledby="terceros_autorizados-tab">
                                <div class="d-flex mb-2">
                                    <?php foreach ($tercerosAutorizados as $key => $value) { ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">TERCEROS AUTORIZADOS.</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body" >

                                                <p>¿LOS PAGOS PARCIALES (ABONOS) O TOTALES AL PRECIO DE VENTA SERÁN REALIZADOS POR UNA TERCERA PERSONA DISTINTA DEL CLIENTE O DEL BENEFICIARIO FINAL? (NO ENTIDAD BANCARIA) 
                                                    EN CASO AFIRMATIVO, COMPLETE CON LOS DATOS DEL TERCERO AUTORIZADO. DE SER PERSONA JURÍDICA, UTILIZAR EL FORMULARIO DE DEBIDA DILIGENCIA PERSONA JURÍDICA PCR-CUMP-FORM02.</p>
                                                <p>
                                                    EN CASO AFIRMATIVO, COMPLETE CON LOS DATOS DEL TERCERO AUTORIZADO. DE SER PERSONA JURÍDICA, UTILIZAR EL FORMULARIO DE DEBIDA DILIGENCIA PERSONA JURÍDICA PCR-CUMP-FORM02.
                                                </p>

                                                </div>
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-3">
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">RELACIÓN CON EL CLIENTE.  </label>
                                                                    <br>
                                                                    <label for="basiInput" class="form-label">Familiar </label>
                                                                    <input class="form-check-input" type="radio" name="pjtu_relacion_cliente" <?php if($value['pjtu_relacion_cliente'] == '111BFF'){ echo 'checked'; } ?> id="formradioRight6" value="111BFF">
                                                                    <label for="basiInput" class="form-label">Tercero </label>
                                                                    <input class="form-check-input" type="radio" name="pjtu_relacion_cliente" <?php if($value['pjtu_relacion_cliente'] == '110BFF'){ echo 'checked'; } ?> id="formradioRight6" value="110BFF">
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Primer Nombre</label>
                                                                    <input type="text" class="form-control" id="primer_nombre" name="pjtu_primer_nombre" value="<?php echo $value['pjtu_primer_nombre']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Segundo Nombre</label>
                                                                    <input type="text" class="form-control" id="segundo_nombre" name="pjtu_segundo_nomnbre" value="<?php echo $value['pjtu_segundo_nomnbre']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Paterno</label>
                                                                    <input type="text" class="form-control" id="apellido_paterno" name="pjtu_apellido_parterno" value="<?php echo $value['pjtu_apellido_parterno']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Materno</label>
                                                                    <input type="text" class="form-control" id="apellido_materno" name="pjtu_apellido_materno" value="<?php echo $value['pjtu_apellido_materno']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido de Casada</label>
                                                                    <input type="text" class="form-control" id="apellido_casada" name="pjtu_apellido_casada" value="<?php echo $value['pjtu_apellido_casada']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">País de Naciemiento</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjtu_pais_nacimiento">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjtu_pais_nacimiento']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha Nacimiento</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjtu_fecha_nacimiento" value="<?php echo $value['pjtu_fecha_nacimiento']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Género</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjtu_genero">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($genero as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjtu_genero']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjtu_nacionalidad">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjtu_nacionalidad']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Estado Civil</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjtu_estado_civil">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($estado_civil as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjtu_estado_civil']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cédula/N# Pasaporte</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjtu_cedula_pasaporte" value="<?php echo $value['pjtu_cedula_pasaporte']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">País de Residencia</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjtu_pais_residencia">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjtu_pais_residencia']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Dirección Residencial</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjtu_direccion_residencia"><?php echo $value['pjtu_direccion_residencia']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">País de Residencia Fiscal</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjtu_pais_residencia_fiscal">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjtu_pais_residencia_fiscal']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electrónico </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="pjtu_correo" value="<?php echo $value['pjtu_correo']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Teléfono Residencial</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjtu_telefono_residencial" value="<?php echo $value['pjtu_telefono_residencial']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Teléfono Móvil</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjtu_telefono_celular" value="<?php echo $value['pjtu_telefono_celular']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Profesión</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjtu_profesion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjtu_profesion']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Ocupación</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjtu_ocupacion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjtu_ocupacion']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjtu_lugar_trabajo"><?php echo $value['pjtu_lugar_trabajo']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Dirección de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjtu_direccion_trabajo"><?php echo $value['pjtu_direccion_trabajo']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- Personas expuestas politicamente -->
                            <div class="tab-pane fade" id="expuestas_politicamente" role="tabpanel" aria-labelledby="expuestas_politicamente-tab">
                                <div class="d-flex mb-2">
                                    <?php foreach ($expuestas as $key => $value) { ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">PERSONAS EXPUESTAS POLÍTICAMENTE.</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <p>
                                                    LAS PERSONAS EXPUESTAS POLÍTICAMENTE SON LAS PERSONAS NACIONALES O EXTRANJERAS QUE CUMPLEN FUNCIONES PÚBLICAS DESTACADAS 
                                                    DE ALTO NIVEL O CON MANDO Y JURISDICCIÓN EN UN ESTADO, COMO (PERO SIN LIMITARSE) LOS JEFES DE ESTADO O DE UN GOBIERNO, 
                                                    LOS POLÍTICOS DE ALTO PERFIL, LOS FUNCIONARIOS GUBERNAMENTALES, JUDICIALES O MILITARES DE ALTA JERARQUÍA, LOS EJECUTIVOS 
                                                    DE EMPRESAS O CORPORACIONES ESTATALES LOS FUNCIONARIOS PÚBLICOS QUE OCUPEN POSICIONES DE ELECCIÓN POPULAR, ENTRE OTROS QUE 
                                                    EJERZAN LA TOMA DE DECISIONES EN LAS ENTIDADES PÚBLICAS; PERSONAS QUE CUMPLEN  O A QUIÉNES SE LES HA CONFIADO FUNCIONES IMPORTANTES 
                                                    POR UNA ORGANIZACIÓN INSTITUCIONAL, COMO LOS MIEMBROS DE LA ALTA GERENCIA, ES DECIR DIRECTORES, SUBDIRECTORES Y MIEMBROS DE LA JUNTA
                                                        DIRECTIVA O FUNCIONES EQUIVALENTES.
                                                    </p>
                                                </div>
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">¿ES EL REPRESENTANTE LEGAL, APODERADO, DIRECTOR O DIGNATARIO UN PEP, FAMILIAR CERCANO O ESTRECHO COLABORADOR DE UN PEP?</label>
                                                                    <br>
                                                                    <label for="basiInput" class="form-label">SI</label>
                                                                    <input class="form-check-input" type="radio" name="pjpx_relacion_directa" id="formradioRight6" <?php if($value['pjpx_relacion_directa'] == 'SI'){ echo 'checked'; } ?> value="SI">
                                                                    <label for="basiInput" class="form-label">NO</label>
                                                                    <input class="form-check-input" type="radio" name="pjpx_relacion_directa" id="formradioRight6" <?php if($value['pjpx_relacion_directa'] == 'NO'){ echo 'checked'; } ?> value="NO">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre completo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjpx_nombre_completo" value="<?php echo $value['pjpx_nombre_completo']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Cargo actual</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjpx_cargo_actual">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion_personas_expuestas as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjpx_cargo_actual']){ echo 'selected'; } ?> ><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjpx_fecha_cargo_actual" value="<?php echo $value['pjpx_fecha_cargo_actual']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Cargo Anterior</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjpx_cargo_anterior">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion_personas_expuestas as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjpx_cargo_anterior']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha anterior</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjpx_fecha_cargo_anterior" value="<?php echo $value['pjpx_fecha_cargo_anterior']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Comentarios</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjpx_comentarios"><?php echo $value['pjpx_comentarios']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">¿ES EL BENEFICIARIO FINAL UN PEP, FAMILIAR CERCANO O ESTRECHO COLABORADOR DE UN PEP?</label>
                                                                    <br>
                                                                    <label for="basiInput" class="form-label">SI</label>
                                                                    <input class="form-check-input" type="radio" name="pjpx_pep_relacion_directa" id="formradioRight6" <?php if($value['pjpx_pep_relacion_directa'] == 'SI'){ echo 'checked'; } ?> value="SI">
                                                                    <label for="basiInput" class="form-label">NO</label>
                                                                    <input class="form-check-input" type="radio" name="pjpx_pep_relacion_directa" id="formradioRight6" <?php if($value['pjpx_pep_relacion_directa'] == 'NO'){ echo 'checked'; } ?> value="NO">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre completo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjpx_nombre_completo_2" value="<?php echo $value['pjpx_nombre_completo_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Cargo actual</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjpx_cargo_actual_2">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion_personas_expuestas as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjpx_cargo_actual_2']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjpx_fecha_cargo_actual_2" value="<?php echo $value['pjpx_fecha_cargo_actual_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Cargo Anterior</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="pjpx_cargo_anterior_2">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion_personas_expuestas as $key => $value2) { ?>
                                                                        <option value="<?php echo $value2['codigo']; ?>" <?php if($value2['codigo'] == $value['pjpx_cargo_anterior_2']){ echo 'selected'; } ?>><?php echo utf8_encode($value2['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha anterior</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjpx_fecha_cargo_anterior_2" value="<?php echo $value['pjpx_fecha_cargo_anterior_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Comentarios</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="pjpx_comentarios_2"><?php echo $value['pjpx_comentarios_2']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- Referencias -->
                            <div class="tab-pane fade" id="referencias" role="tabpanel" aria-labelledby="referencias-tab">
                                <div class="d-flex mb-2">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">REFERENCIAS</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <p>REFERENCIAS BANCARIAS.</p>
                                                </div>
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <?php foreach ($referencias as $key => $value) { ?>
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre o razón social</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjrf_nombre_razon_social[]" value="<?php echo $value['pjrf_nombre_razon_social']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Actividad</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjrf_actividad[]" value="<?php echo $value['pjrf_actividad']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Relacón</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjrf_relacion[]" value="<?php echo $value['pjrf_relacion']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Teléfono</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjrf_telefono[]" value="<?php echo $value['pjrf_telefono']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electrónico</label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="pjrf_correo_electronico[]" value="<?php echo $value['pjrf_correo_electronico']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                        <br>
                                                        <br>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- jurada -->
                            <div class="tab-pane fade" id="jurada" role="tabpanel" aria-labelledby="jurada-tab">
                                <div class="d-flex mb-2">
                                    <?php foreach ($declaracion_jurada as $key => $value) { ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">DECLARACIÓN JURADA</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    DECLARO QUE LA INFORMACIÓN ANTERIOR ES VERAZ Y HA SIDO PROPORCIONADA EN CUMPLIMIENTO DE LO ESTABLECIDO POR LAS LEYES 
                                                    Y REGULACIONES RELACIONADAS CON LA PREVENCIÓN DEL BLANQUEO DE CAPITALES, FINANCIAMIENTO DEL TERRORISMO Y FINANCIAMIENTO
                                                    DE LA PROLIFERACIÓN DE ARMAS DE DESTRUCCIÓN MASIVA DE LA REPÚBLICA DE PANAMÁ. ACEPTO PROPORCIONAR CUALQUIER INFORMACIÓN 
                                                    Y/O DOCUMENTACIÓN ADICIONAL A LA DESCRITA EN EL PRESENTE FORMULARIO, QUE PANAMA CAR RENTAL, S.A. REQUIERA PARA LA APLICACIÓN 
                                                    DE LAS MEDIDAS DE DEBIDA DILIGENCIA.
                                                </div>
                                                    <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre completo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pjdj_nombre_completo" value="<?php echo $value['pjdj_nombre_completo']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjdj_fecha" value="<?php echo $value['pjdj_fecha']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Firma</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="pjdj_firma">
                                                                    <br>
                                                                    <br>
                                                                    <a href="<?php echo $value['pjdj_firma']; ?>" target="_blank">Firma adjunta</a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- Adjuntar -->
                            <div class="tab-pane fade" id="adjuntar" role="tabpanel" aria-labelledby="adjuntar-tab">
                                <div class="d-flex mb-2">
                                <?php foreach ($documentos_adjuntos as $key => $value) { ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">ADJUNTAR LOS SIGUIENTES DOCUMENTOS E INFORMACIÓN DE SOPORTE.</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                </div>
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">COPIA DE CÉDULA O PASAPORTE DEL REPRESENTANTE LEGAL, APODERADOS, DIRECTORES, DIGNATARIOS, TERCEROS AUTORIZADOS Y BENEFICIARIOS FINALES.</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="pjad_identificacion">
                                                                </div>
                                                                <br>
                                                                <a href="<?php echo $value['pjad_identificacion']; ?>" target="_blank">Identificacion adjunta</a>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">COPIA DE PACTO SOCIAL, CERTIFICADO DE REGISTRO PÚBLICO O SU EQUIVALENTE, CON UNA VIGENCIA NO MENOR DE 90 DÍAS CALENDARIO</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="pjad_pacto_social">
                                                                </div>
                                                                <br>
                                                                <a href="<?php echo $value['pjad_pacto_social']; ?>" target="_blank">Pacto social adjunto</a>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">AVISO DE OPERACIONES O LICENCIA COMERCIAL</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="pjad_aviso_operaciones">
                                                                </div>
                                                                <br>
                                                                <a href="<?php echo $value['pjad_aviso_operaciones']; ?>" target="_blank">Pacto social adjunto</a>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">                                                           
                                                                <div>
                                                                    <label for="basiInput" class="form-label">EVIDENCIA DE INGRESO (DE ACUERDO CON PERFIL FINANCIERO)</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="pjad_evidencia_ingreso">
                                                                </div>
                                                                <br>
                                                                <a href="<?php echo $value['pjad_evidencia_ingreso']; ?>" target="_blank">Evidencia de ingreso adjunto</a>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div> 
                                <?php } ?>
                                </div>
                            </div>
                            <!-- uso interno -->
                            <div class="tab-pane fade" id="interno" role="tabpanel" aria-labelledby="interno-tab">
                                <div class="d-flex mb-2">
                                <?php foreach ($uso_interno as $key => $value) { ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">PARA USO INTERNO DE PANAMA CAR RENTAL, S.A.</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del vendedor</label>
                                                                    <input class="form-control" id="basiInput" name="pjui_nombre_completo_1" value="<?php echo $value['pjui_nombre_completo_1']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <input class="form-control" id="basiInput" name="pjui_aprobacion_1" value="<?php echo $value['pjui_aprobacion_1']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjui_fecha_1" value="<?php echo $value['pjui_fecha_1']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del encargado de sucursal</label>
                                                                    <input class="form-control" id="basiInput" name="pjui_nombre_completo_2" value="<?php echo $value['pjui_nombre_completo_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <input class="form-control" id="basiInput" name="pjui_aprobacion_2" value="<?php echo $value['pjui_aprobacion_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjui_fecha_2" value="<?php echo $value['pjui_fecha_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del analista de cumplimiento</label>
                                                                    <input class="form-control" id="basiInput" name="pjui_nombre_completo_3" value="<?php echo $value['pjui_nombre_completo_3']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <input class="form-control" id="basiInput" name="pjui_aprobacion_3" value="<?php echo $value['pjui_aprobacion_3']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjui_fecha_3" value="<?php echo $value['pjui_fecha_3']; ?>">
                                                                </div>
                                                            </div>

                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del gerente de venta de autos (solo para PEPs)</label>
                                                                    <input class="form-control" id="basiInput" name="pjui_nombre_completo_4" value="<?php echo $value['pjui_nombre_completo_4']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <input class="form-control" id="basiInput" name="pjui_aprobacion_4" value="<?php echo $value['pjui_aprobacion_4']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="pjui_fecha_4" value="<?php echo $value['pjui_fecha_4']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                            <!-- I. GENERALES DE LOS BENEFICIARIOS FINALES- PERSONA NATURAL -->
                            <div class="tab-pane fade" id="generales_beneficiarios_natural" role="tabpanel" aria-labelledby="generales_beneficiarios_natural-tab">
                                <div class="d-flex mb-2">

                                    <div class="row" style="width:100%;">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">GENERALES DE LOS BENEFICIARIOS FINALES- PERSONA NATURAL.</h4>
                                                </div><!-- end card header -->
                                                    <div class="card-body">COMPLETE CON LOS DATOS DE LAS PERSONAS NATURALES QUE OSTENTAN UNA PARTICIPACIÓN DEL 25% O MÁS EN EL CLIENTE O PROVEEDOR.</div>
                                                    <div class="card-body">
                                                        <div class="live-preview">
                                                            
                                                            <a href="#" data-bs-toggle="modal" data-bs-target=".generales_beneficiarios" class="btn btn-primary">Agregar</a>

                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nombre Completo</th>
                                                                        <th>Participación</th>
                                                                        <th>Nacionalidad</th>ó
                                                                        <th>Profesión</th>
                                                                        <th>Correo</th>
                                                                        <th>Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="generales_bf">
                                                                <?php 
                                                                foreach ($obtener_registros_temp as $key => $value) { ?>
                                                                <tr>
                                                                    <td><input value="<?php echo $value['gbf_temp_nombre_completo']; ?>" name="pjgbf_nombre_completo[]" class="form-control"> </td>
                                                                    <td><input value="<?php echo $value['gbf_temp_participacion']; ?>" name="pjgbf_porcentaje_participacion[]" class="form-control"></td>
                                                                    <td><input value="<?php echo $value['gbf_temp_nacionalidad']; ?>" name="pjgbf_nacionalidad[]" class="form-control"></td>
                                                                    <td><input value="<?php echo $value['gbf_temp_profesion']; ?>" name="pjgbf_profesion_oficio[]" class="form-control"></td>
                                                                    <td><input value="<?php echo $value['gbf_temp_correo_electronico']; ?>" name="pjgbf_correo[]" class="form-control"></td>
                                                                    <td><a href="#" onclick="eliminar_generales_bf_temp(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
                                                                    <input type="hidden" name="pjgbf_telefono[]" value="<?php echo $value['gbf_temp_telefono']; ?>">
                                                                    <input type="hidden" name="pjgbf_genero[]" value="<?php echo $value['gbf_temp_genero']; ?>">
                                                                    <input type="hidden" name="pjgbf_identificacion[]" value="<?php echo $value['gbf_temp_identificacion']; ?>">
                                                                    <input type="hidden" name="pjgbf_pais_nacimiento[]" value="<?php echo $value['gbf_temp_pais_nacimiento']; ?>">
                                                                    <input type="hidden" name="pjgbf_fecha_nacimiento[]" value="<?php echo $value['gbf_temp_fecha_nacimiento']; ?>">
                                                                    <input type="hidden" name="pjgbf_pais_residencia[]" value="<?php echo $value['gbf_temp_pais_residencia']; ?>">
                                                                    <input type="hidden" name="pjgbf_pais_residencia_fiscal[]" value="<?php echo $value['gbf_temp_pais_residencia_fiscal']; ?>">
                                                                    <input type="hidden" name="pjgbf_lugar_trabajo[]" value="<?php echo $value['gbf_temp_lugar_trabajo']; ?>">
                                                                    <input type="hidden" name="pjgbf_domicilio_personal[]" value="<?php echo $value['gbf_temp_domicilio_personal']; ?>">
                                                                </tr>
                                                                <?php } ?>
                                                                </tbody>
                                                            </table> 
                                                            <!--end row-->
                                                        </div>
                                                        <div class="d-none code-view">
                                                            <pre class="language-markup" style="height: 450px;">
                                                        </div>
                                                    </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                    </div><!--end col-->

                                </div>
                            </div>
                            <!-- II. GENERALES DE LOS BENEFICIARIOS FINALES- PERSONA JURÍDICA -->
                            <div class="tab-pane fade" id="generales_beneficiarios_juridica" role="tabpanel" aria-labelledby="generales_beneficiarios_juridica-tab">
                                <div class="d-flex mb-2">

                                    <div class="row" style="width:100%;">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">GENERALES DE LOS BENEFICIARIOS FINALES- PERSONA JURÍDICA</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">COMPLETE CON LOS DATOS DE LAS PERSONAS JURÍDICAS QUE OSTENTAN UNA PARTICIPACIÓN DEL 25% O MÁS EN EL CLIENTE O PROVEEDOR.</div>
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        
                                                        <a href="#" data-bs-toggle="modal" data-bs-target=".generales_beneficiarios_juridicos" class="btn btn-primary">Agregar</a>

                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nombre de accionistas</th>
                                                                    <th>Fecha de construcción</th>
                                                                    <th>Pais de contrucción</th>
                                                                    <th>Telefono</th>
                                                                    <th>RUC</th>
                                                                    <th>Acciones</th>
                                                                </tr>
                                                            </thead> 
                                                            <tbody id="generales_beneficiarios_persona_juridica">
                                                            <?php 
                                                                foreach ($obtener_registros_temp_bf as $key => $value) { ?>
                                                                    <tr>
                                                                        <td><input value="<?php echo $value['gbfpj_temp_nombre_completo_accionista']; ?>" name="gbfpj_nombre_completo_accionista[]" class="form-control"> </td>
                                                                        <td><input value="<?php echo $value['gbfpj_temp_fecha_constitucion']; ?>" name="gbfpj_fecha_constitucion[]" class="form-control"></td>
                                                                        <td><input value="<?php echo $value['gbfpj_temp_pais_constitucion']; ?>" name="gbfpj_pais_constitucion[]" class="form-control"></td>
                                                                        <td><input value="<?php echo $value['gbfpj_temp_telefono']; ?>" name="gbfpj_telefono[]" class="form-control"></td>
                                                                        <td><input value="<?php echo $value['gbfpj_temp_ruc']; ?>" name="gbfpj_ruc[]" class="form-control"></td>
                                                                        <td><a href="#" onclick="eliminar_pj_beneficiario_generales_temp(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
                                                                        <input type="hidden" name="gbfpj_porcentaje_participacion[]" value="<?php echo $value['gbfpj_temp_porcentaje_participacion']; ?>">
                                                                        <input type="hidden" name="gbfpj_sector_economico[]" value="<?php echo $value['gbfpj_temp_sector_economico']; ?>">
                                                                        <input type="hidden" name="gbfpj_direccion[]" value="<?php echo $value['gbfpj_temp_direccion']; ?>">
                                                                        <input type="hidden" name="gbfpj_tipo_pj[]" value="<?php echo $value['gbfpj_temp_tipo_pj']; ?>">
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table> 
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                    </div><!--end col-->

                                </div>
                            </div>
                            <!-- III. PROPIETARIOS DE LOS BENEFICIARIOS FINALES- PERSONA JURÍDICA -->
                            <div class="tab-pane fade" id="propietarios_juridica" role="tabpanel" aria-labelledby="propietarios_juridica-tab">
                                <div class="d-flex mb-2">

                                    <div class="row" style="width:100%;">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">PROPIETARIOS DE LOS BENEFICIARIOS FINALES- PERSONA JURÍDICA.</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">INDIQUE LOS ACCIONISTAS PERSONA NATURAL DE LAS ENTIDADES JURÍDICAS LISTADAS EN LA SECCIÓN II.
                                                    <div class="live-preview">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target=".propietarios_beneficiarios_juridicos" class="btn btn-primary">Agregar</a>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nombre Completo</th>
                                                                    <th>Porcentaje</th>
                                                                    <th>Nacionalidad</th>
                                                                    <th>Profesión</th>
                                                                    <th>Correo</th>
                                                                    <th>Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="propietarios_beneficiarios_persona_juridica">
                                                            <?php foreach ($obtener_registros_temp_propietario as $key => $value) { ?>
                                                                <tr>
                                                                    <td><input value="<?php echo $value['pjpbj_temp_nombre_completo']; ?>" name="pjpbj_nombre_completo[]" class="form-control"> </td>
                                                                    <td><input value="<?php echo $value['pjpbj_temp_nacionalidad']; ?>" name="pjpbj_nacionalidad[]" class="form-control"></td>
                                                                    <td><input value="<?php echo $value['pjpbj_temp_profesion_oficio']; ?>" name="pjpbj_profesion_oficio[]" class="form-control"></td>
                                                                    <td><input value="<?php echo $value['pjpbj_temp_correo']; ?>" name="pjpbj_correo[]" class="form-control"></td>
                                                                    <td><input value="<?php echo $value['pjpbj_temp_porcentaje_participacion']; ?>" name="pjpbj_porcentaje_participacion[]" class="form-control"></td>
                                                                    <td><a href="#" onclick="eliminar_pj_propietario_bf_temp(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
                                                                    <input type="hidden" name="pjpbj_genero[]" value="<?php echo $value['pjpbj_temp_genero']; ?>">
                                                                    <input type="hidden" name="pjpbj_cedula_pasaporte[]" value="<?php echo $value['pjpbj_temp_cedula_pasaporte']; ?>">
                                                                    <input type="hidden" name="pjpbj_pais_nacimineto[]" value="<?php echo $value['pjpbj_temp_pais_nacimiento']; ?>">
                                                                    <input type="hidden" name="pjpbj_fecha_nacimiento[]" value="<?php echo $value['pjpbj_temp_fecha_nacimiento']; ?>">
                                                                    <input type="hidden" name="pjpbj_pais_residencia[]" value="<?php echo $value['pjpbj_temp_pais_residencia']; ?>">
                                                                    <input type="hidden" name="pjpbj_pais_residencia_fiscal[]" value="<?php echo $value['pjpbj_temp_pais_residencia_fiscal']; ?>">
                                                                    <input type="hidden" name="pjpbj_lugar_trabajo[]" value="<?php echo $value['pjpbj_temp_lugar_trabajo']; ?>">
                                                                    <input type="hidden" name="pjpbj_telefono[]" value="<?php echo $value['pjpbj_temp_telefono']; ?>">
                                                                    <input type="hidden" name="pjpbj_domicilio_laboral[]" value="<?php echo $value['pjpbj_temp_domicilio_laboral']; ?>">
                                                                    <input type="hidden" name="pjpbj_domicilio_personal[]" value="<?php echo $value['pjpbj_temp_domicilio_personal']; ?>">
                                                                    <input type="hidden" name="pjpbj_entidad_participa[]" value="<?php echo $value['pjpbj_temp_entidad_participa']; ?>">
                                                                </tr>

                                                                <?php } ?>
                                                            </tbody>
                                                        </table> 
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>

                                </div>
                            </div>
                            <!--DECLARACIÓN JURADA -->
                            <div class="tab-pane fade" id="declaracion_jurada" role="tabpanel" aria-labelledby="declaracion_jurada-tab">
                                <div class="d-flex mb-2">
                                    <?php foreach ($declaracion_jurada_2 as $key => $value) { 

                                         $p_jdj_nombre_completo_2 =  $value['p_jdj_nombre_completo_2']; 
                                         $p_jdj_firma_2 = $value['p_jdj_firma_2']; 
                                         $p_jdj_fecha_2 = $value['p_jdj_fecha_2']; 

                                         if (is_null($p_jdj_firma_2)) {
                                            $p_jdj_firma_2 = '';
                                            
                                         }else {
                                            $p_jdj_firma_2 = '<a href="'.$p_jdj_firma_2.'" target="_blank">Firma adjunta</a>';
                                         }

                                     } ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">DECLARACIÓN JURADA.</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <p>
                                                    POR ESTE MEDIO DECLARO QUE TODA LA INFORMACIÓN ANTES MENCIONADA ES VERDADERA A LOS DÍAS ____ DEL   _____ DE 20__; Y 
                                                    NOS OBLIGAMOS A NOTIFICAR INMEDIATAMENTE CUALQUIER CAMBIO QUE SE DÉ. ACEPTAMOS QUE CUALQUIER CAMBIO EN LOS BENEFICIARIOS 
                                                    FINALES DE ESTA ENTIDAD, SERÁ DEBIDAMENTE NOTIFICADO A PANAMÁ CAR RENTAL, S.A. EN UN PERIODO NO MAYOR A TREINTA (30) DÍAS 
                                                    CALENDARIOS DESPUÉS DE REALIZADO DICHO CAMBIO.
                                                    </p>
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre completo</label>
                                                                    <input class="form-control" id="basiInput" name="p_jdj_nombre_completo_2" value="<?php echo $p_jdj_nombre_completo_2; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Firma</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="p_jdj_firma_2">
                                                                </div>
                                                                <br>
                                                                <?php echo $p_jdj_firma_2; ?>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="p_jdj_fecha_2" value="<?php echo $p_jdj_fecha_2; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    
                                </div>
                            </div> 
                            <!-- aviso legal -->
                            <div class="tab-pane fade" id="aviso_legal" role="tabpanel" aria-labelledby="aviso_legal-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">AVISO LEGAL</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                        <p>PANAMA CAR RENTAL, S.A. ES SUJETO OBLIGADO NO FINANCIERO DE ACUERDO CON LA LEY 124 DE 7 DE ENERO DE 2020 "QUE CREA LA 
                                                        SUPERINTENDENCIA DE SUJETOS NO FINANCIEROS Y DICTA OTRAS DISPOSICIONES", LA LEY 23 DEL 27 DE ABRIL DE 2015 "QUE ADOPTA 
                                                        MEDIDAS PARA PREVENIR EL BLANQUEO DE CAPITALES, EL FINANCIAMIENTO DEL TERRORISMO Y DEL FINANCIAMIENTO DE LA PROLIFERACIÓN 
                                                        DE ARMAS DE DESTRUCCIÓN MASIVA Y OTRAS DISPOSICIONES", SUS MODIFICACIONES Y DEMÁS REGLAMENTACIONES</p>
                                                        <p>
                                                        AUTOMARKET SEMINUEVOS SE REFIERE A LA MARCA BAJO LA CUAL PANAMA CAR RENTAL, S.A. OFRECE SUS PRODUCTOS Y SERVICIOS. EL NOMBRE 
                                                        “AUTOMARKET SEMINUEVOS” Y SU LOGOTIPO ES UNA MARCA REGISTRADA DE PROPIEDAD DE SEMINUEVOS, S.A. LA SOCIEDAD SEMINUEVOS, S.A. NO 
                                                        TIENE RELACIÓN COMERCIAL Y/O CONTRACTUAL NI PRESTA SERVICIOS A LOS CLIENTES DE PANAMA CAR RENTAL, S.A. 
                                                        </p>
                                                        </div>
                                                        <!--end row-->
                                                        <input type="submit" class="btn btn-danger" value="Eliminar" name="eliminar_cc_cliente_pj">
                                                        <input type="hidden" name="id_eliminar" value="<?php echo $id; ?>">
                                                    </div>
                                                    <div class="d-none code-view">
                                                        <pre class="language-markup" style="height: 450px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    </div><!--  end col -->
                </div><!--end row-->
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!--end col-->
</form>

<?php }elseif(isset($_GET['portada_formulario_cc'])){ ?>
    <div class="col-xl-3 col-lg-4 col-sm-6" style="margin-left:75px;">
        <a href="vistas/documentos_generados/general_pdf_pj_.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bxs-file-pdf" style="font-size: 100px;" ></i></a>
    </div>
<?php }elseif(isset($_GET['recaudos_contratos_formulario_cc'])){ ?> 
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                Contrato <br>
                <a href="vistas/documentos_generados/contrato_aut.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-highlight" style="font-size: 100px;" ></i></a>
                <br>
                <!-- <button class="btn btn-success">Enviar por Email</button> -->
            </div>
            <div class="col-sm-4">
                Declaracion de domicilio<br>
                <a href="vistas/documentos_generados/declaracion_domicilio.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-building-house" style="font-size: 100px;" ></i></a>
                <br>
                <!-- <button class="btn btn-success">Enviar por Email</button> -->
            </div>
            <div class="col-sm-4">
                Declaracion de Actividad <br>
                <a href="vistas/documentos_generados/declaracion_actividad.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-show" style="font-size: 100px;" ></i></a>
                <br>
                <!-- <button class="btn btn-success">Enviar por Email</button> -->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Pago de Familiares<br>
                <a href="vistas/documentos_generados/pago_familiares.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bxs-group" style="font-size: 100px;" ></i></a>
                <br>
                <!-- <button class="btn btn-success">Enviar por Email</button> -->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Pago de Terceros<br>
                <a href="vistas/documentos_generados/pago_terceros.php?id=<?php echo $id; ?>" target="_blank"><i class=" bx bx-user-circle" style="font-size: 100px;" ></i></a>
                <br>
                <!-- <button class="btn btn-success">Enviar por Email</button> -->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Traspaso PN<br>
                <a href="vistas/documentos_generados/traspaso_pn.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-repost" style="font-size: 100px;" ></i></a>
                <br>
                <!-- <button class="btn btn-success">Enviar por Email</button> -->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Traspaso PJ<br>
                <a href="vistas/documentos_generados/traspaso_pj.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-rotate-right" style="font-size: 100px;" ></i></a>
                <br>
                <!-- <button class="btn btn-success">Enviar por Email</button> -->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Exoneracion Total<br>
                <a href="vistas/documentos_generados/exoneracion_total.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-user-voice" style="font-size: 100px;" ></i></a>
                <br>
                <!-- <button class="btn btn-success">Enviar por Email</button> -->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Tesoreria Municipal<br>
                <a href="vistas/documentos_generados/tesoreria_municipal.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-building" style="font-size: 100px;" ></i></a>
                <br>
                <!-- <button class="btn btn-success">Enviar por Email</button> -->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Detalle de Transaccion<br>
                <a href="vistas/documentos_generados/detalle_transaccion.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-transfer" style="font-size: 100px;" ></i></a>
                <br>
                <!-- <button class="btn btn-success">Enviar por Email</button> -->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Matriz de Riesgo<br>
                <a href="vistas/documentos_generados/Matriz_Riesgo.xlsx" target="_blank"><i class="ri-file-warning-fill" style="font-size: 100px;" ></i></a>
                <br>
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Recibido Conforme<br>
                <a href="vistas/documentos_generados/RECIBIDO CONFORME _ macro.xlsx" target="_blank"><i class="ri-user-star-line" style="font-size: 100px;" ></i></a>
                <br>
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
        </div>
    </div>
    <?php }elseif(isset($_GET['adjuntos_formulario_cc_pj'])){ ?>
        
        <button class="btn btn-primary" onclick="agregar_adjuntos_pj(<?php echo $_GET['id']; ?>, 'registrar_cClienteAdjuntos', 'registar_ccliente_adjuntos', 'cClienteAdjuntos')">Agregar Adjunto</button>
        <br>
        <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Descripcion del adjunto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($todos_adjuntos_juridicos  as $key => $value) { ?>
                <tr>
                    <td><a href="<?php echo $value['link_desc_pj']; ?>" target="_blank"><?php echo $value['descripcion']; ?></a></td>
                    <td>
                        <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="eliminar_adjunto_pn(<?php echo $value['id']; ?>, 'contenido_modal_ccliente_adjuntos', 'modal_adjuntos_eli', <?php echo $_GET['id']; ?>)"><i class="ri-delete-bin-5-line"></i></button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>    
        </table>

    <?php }elseif(isset($_GET['adjuntos_cc_pj_reg'])){ ?> 

    <div class="card-body">
        <div class="live-preview">
            <div class="row gy-4">
                <!--end col-->
                <div class="col-xxl-6 col-md-6">
                    <div>
                        <label for="basiInput" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" id="basiInput" name="descripcion" value="">
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-6 col-md-6">
                    <div>
                        <label for="basiInput" class="form-label">Adjunto</label>
                        <input type="file" class="form-control" id="basiInput" name="link_desc_pj" value="">
                        <input type="hidden" name="id_general" value="<?php echo $_GET['id']; ?>">
                        <br>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <div class="d-none code-view">
            <pre class="language-markup" style="height: 450px;">
        </div>
    </div>

<?php }elseif(isset($_GET['recaudos_contratos_formulario_cc_pj'])){ ?> 
    <div class="container">
        <div class="row" style="margin-top:20px;">
            <div class="col-sm-4">
                Contrato <br>
                <a href="vistas/documentos_generados/contrato_aut_pj.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-highlight" style="font-size: 100px;" ></i></a>
                <br>
                <!-- <button class="btn btn-success">Enviar por Email</button> -->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Autoridad de Transito<br>
                <a href="vistas/documentos_generados/aut_tras_rdlgo_reg_pj.php?id=<?php echo $id; ?>" target="_blank"><i class=" bx bx-user-circle" style="font-size: 100px;" ></i></a>
                <br>
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Traspaso PN<br>
                <a href="vistas/documentos_generados/traspaso_pn_pj.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-repost" style="font-size: 100px;" ></i></a>
                <br>
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Traspaso PJ<br>
                <a href="vistas/documentos_generados/traspaso_pj_pj.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-rotate-right" style="font-size: 100px;" ></i></a>
                <br>
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Exoneracion Total<br>
                <a href="vistas/documentos_generados/exoneracion_total_pj.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-user-voice" style="font-size: 100px;" ></i></a>
                <br>
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Tesoreria Municipal<br>
                <a href="vistas/documentos_generados/tesoreria_municipal_pj.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-building" style="font-size: 100px;" ></i></a>
                <br>
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Detalle de Transaccion<br>
                <a href="vistas/documentos_generados/detalle_transaccion_pj.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-transfer" style="font-size: 100px;" ></i></a>
                <br>
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Matriz de Riesgo<br>
                <a href="vistas/documentos_generados/Matriz_Riesgo.xlsx" target="_blank"><i class="ri-file-warning-fill" style="font-size: 100px;" ></i></a>
                <br>
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Recibido Conforme<br>
                <a href="vistas/documentos_generados/RECIBIDO CONFORME _ macro.xlsx" target="_blank"><i class="ri-user-star-line" style="font-size: 100px;" ></i></a>
                <br>
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
        </div>
    </div>
<?php }