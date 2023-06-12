<?php 
session_start();
$modalDocu =1;
$id = $_GET['id']; 
#require_once("../../controladores/ReportesController.php");
require_once("../../controladores/CcClienteController.php");
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
                            <a class="nav-link mb-2" id="ocupacionales-tab" data-bs-toggle="pill" href="#ocupacionales" role="tab" aria-controls="ocupacionales" aria-selected="false">OCUPACIONALES</a>
                            <a class="nav-link mb-2" id="declaracion-tab" data-bs-toggle="pill" href="#declaracion" role="tab" aria-controls="declaracion" aria-selected="false">DECLARACION</a>
                            <a class="nav-link" id="referencia-tab" data-bs-toggle="pill" href="#referencia" role="tab" aria-controls="referencia" aria-selected="false">REFERENCIAS</a>
                            <a class="nav-link mb-2" id="beneficiario-tab" data-bs-toggle="pill" href="#beneficiario" role="tab" aria-controls="beneficiario" aria-selected="false">BENEFICIARIO</a>
                            <a class="nav-link mb-2" id="tercero-tab" data-bs-toggle="pill" href="#tercero" role="tab" aria-controls="tercero" aria-selected="false">TERCEROS</a>
                            <a class="nav-link" id="expuestas-tab" data-bs-toggle="pill" href="#expuestas" role="tab" aria-controls="expuestas" aria-selected="false">P.EXPUESTAS</a>
                            <a class="nav-link mb-2" id="jurada-tab" data-bs-toggle="pill" href="#jurada" role="tab" aria-controls="jurada" aria-selected="false">D. JURADA</a>
                            <a class="nav-link mb-2" id="adjuntar-tab" data-bs-toggle="pill" href="#adjuntar" role="tab" aria-controls="adjuntar" aria-selected="false">ADJUNTAR</a>
                            <a class="nav-link" id="interno-tab" data-bs-toggle="pill" href="#interno" role="tab" aria-controls="interno" aria-selected="false">USO INTERNO</a>
                            <a class="nav-link" id="aviso_legal-tab" data-bs-toggle="pill" href="#aviso_legal" role="tab" aria-controls="aviso_legal" aria-selected="false">AVISO LEGAL</a>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-10">
                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="portada" role="tabpanel" aria-labelledby="portada-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">CONTROL DE ENTREGA DE EXPEDIENTES  DE VENTAS DE AUTOS</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                    <?php foreach ($expedienete as $key => $value) { ?>
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="exp_fecha" value="<?php echo $value['exp_fecha']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cliente</label>
                                                                    <input type="text" class="form-control" id="nombre_completo_inp" name="exp_cliente" readonly value="<?php echo $value['exp_cliente']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Marca</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_marca" value="<?php echo $value['exp_marca']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Modelo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_modelo" value="<?php echo $value['exp_modelo']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Año</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_anio" value="<?php echo $value['exp_anio']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Placa</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_placa" value="<?php echo $value['exp_placa']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Chasis</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_chasis" value="<?php echo $value['exp_placa']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Motor</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_motor" value="<?php echo $value['exp_motor']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Color</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_color" value="<?php echo $value['exp_color']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Código Dollar</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_codigo_dollar" value="<?php echo $value['exp_codigo_dollar']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">N° INTELISIS</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_n_intelisis" value="<?php echo $value['exp_n_intelisis']; ?>">
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
                                                        <div class="row gy-4">
                                                            <?php foreach ($generales as $key => $valueGenerales) {

                                                                    $stado_general = $valueGenerales['fg_stat'];
                                                                ?>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Primer Nombre</label>
                                                                    <input type="text" class="form-control" id="primer_nombre" name="fg_primer_nombre" onkeyup="nombre_completo()" value="<?php echo $valueGenerales['fg_primer_nombre']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Segundo Nombre</label>
                                                                    <input type="text" class="form-control" id="segundo_nombre" name="fg_segundo_nombre"  onkeyup="nombre_completo()" value="<?php echo $valueGenerales['fg_segundo_nombre']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Paterno</label>
                                                                    <input type="text" class="form-control" id="apellido_paterno" name="fg_apellido_paterno"  onkeyup="nombre_completo()" value="<?php echo $valueGenerales['fg_apellido_paterno']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Materno</label>
                                                                    <input type="text" class="form-control" id="apellido_materno" name="fg_apellido_materno"  onkeyup="nombre_completo()" value="<?php echo $valueGenerales['fg_apellido_materno']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido de Casada</label>
                                                                    <input type="text" class="form-control" id="apellido_casada" name="fg_apellido_casada" onkeyup="nombre_completo()" value="<?php echo $valueGenerales['fg_apellido_casada']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Pais de Naciemiento</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fg_pais_nacimiento">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueGenerales['fg_pais_nacimiento'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha Nacimiento</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fg_fecha_nacimiento" value="<?php echo $valueGenerales['fg_fecha_nacimiento']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Genero</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fg_genero">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($genero as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueGenerales['fg_genero'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fg_nacionalidad">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueGenerales['fg_nacionalidad'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Estado Civil</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fg_estado_civil">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($estado_civil as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueGenerales['fg_estado_civil'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cedula / N# Pasaporte</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fg_cedula" value="<?php echo $valueGenerales['fg_cedula']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Pais de Residencia</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fg_pais_residencia">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueGenerales['fg_pais_residencia'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion residencial</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fg_direccion_residencial"><?php echo $valueGenerales['fg_direccion_residencial']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Pais de Residencia Fiscal</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fg_pais_residencia_fiscal">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueGenerales['fg_pais_residencia_fiscal'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electronico </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="fg_email" value="<?php echo $valueGenerales['fg_email']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono Residencial</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fg_telefono_residencia" value="<?php echo $valueGenerales['fg_telefono_residencia']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono Movil</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fg_telefono_movil" value="<?php echo $valueGenerales['fg_telefono_movil']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
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
                            <div class="tab-pane fade" id="ocupacionales" role="tabpanel" aria-labelledby="ocupacionales-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">DATOS OCUPACIONALES</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <?php foreach ($ocupacionales as $key => $valueOcupacionales) { ?>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Profesion</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fo_profesion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueOcupacionales['fo_profesion'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Ocupacion</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fo_ocupacion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueOcupacionales['fo_ocupacion'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fo_lugar_trabajo"><?php echo $valueOcupacionales['fo_lugar_trabajo']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion de Trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fo_direccion_trabajo"><?php echo $valueOcupacionales['fo_direccion_trabajo']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electronico del trabajo </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="fo_correo_trabajo" value="<?php echo $valueOcupacionales['fo_correo_trabajo']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono del trabajo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fo_telefono_trabajo" value="<?php echo $valueOcupacionales['fo_telefono_trabajo']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre del Negocio (Empresario e independientes)</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fo_nombre_negocio" value="<?php echo $valueOcupacionales['fo_nombre_negocio']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aviso de operaciones (Empresario e independientes)</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fo_aviso_operaciones" value="<?php echo $valueOcupacionales['fo_aviso_operaciones']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Licita con el estado</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fo_licita_estado">
                                                                        <option value="">Seleccione</option>
                                                                        <option value="SI" <?php if($valueOcupacionales['fo_licita_estado'] == 'SI'){ echo 'selected'; } ?>>SI</option>
                                                                        <option value="NO" <?php if($valueOcupacionales['fo_licita_estado'] == 'NO'){ echo 'selected'; } ?>>NO</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">En caso de ser afirmativo, pais o paises con el que licita</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fo_pais_residencia_fiscal">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueOcupacionales['fo_pais_residencia_fiscal'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
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
                            <div class="tab-pane fade" id="declaracion" role="tabpanel" aria-labelledby="declaracion-tab">
                                <div class="d-flex mb-2">
                                    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">DECLARACIÓN DE FUENTE Y ORIGEN DE LOS FONDOS</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <p>DECLARO QUE LOS FONDOS PARA EFECTUAR LA TRANSACCIÓN DE COMPRAVENTA PROVIENEN DE FUENTES LÍCITAS Y PROPIAS DETALLADAS A CONTINUACIÓN Y QUE NO REALIZARÉ O ADMITIRÉ QUE SE 
                                                    EFECTÚEN PAGOS A NOMBRE MÍO O DE LA PERSONA QUE REPRESENTO CON FONDOS PROVENIENTES DE ACTIVIDADES ILÍCITAS, NI EFECTUARÉ TRANSACCIONES DESTINADAS A TALES ACTIVIDADES O A FAVOR DE PERSONAS RELACIONADAS A LAS MISMAS.</p>
                                                </div>
                                                    <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                        <?php foreach ($declaracion as $key => $valueDeclaracion) { ?>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Actividad Principal</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fd_actividad_principal">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($actividad_principal as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueDeclaracion['fd_actividad_principal'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Otras Fuentes</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fd_otras_fuentes">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($actividad_otras as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueDeclaracion['fd_otras_fuentes'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Limite de compra</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fd_limite_compra">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($limite as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueDeclaracion['fd_limite_compra'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Forma de Pago</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fd_forma_pago_1">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($forma_pago as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueDeclaracion['fd_forma_pago_1'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Metodo de Pago</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fd_metodo_pago_1">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($motodo_pago as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueDeclaracion['fd_metodo_pago_1'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Metodo de Pago 2</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fd_metodo_pago_2">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($motodo_pago as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueDeclaracion['fd_metodo_pago_2'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
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
                            <div class="tab-pane fade" id="referencia" role="tabpanel" aria-labelledby="referencia-tab">
                                <div class="d-flex mb-2">
                                    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">REFERENCIAS</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">Referencia Bancarias</div>
                                                    <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <?php foreach ($referencias as $key => $valueReferencia) { ?>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre o razon social</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_razon_social_1" value="<?php echo $valueReferencia['fr_razon_social_1']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Actividad</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_actividad_1" value="<?php echo $valueReferencia['fr_actividad_1']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Relacion con cliente</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_relacion_cliente_1" value="<?php echo $valueReferencia['fr_relacion_cliente_1']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_telefono_1" value="<?php echo $valueReferencia['fr_telefono_1']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electronico </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="fr_correo_electronico_1" value="<?php echo $valueReferencia['fr_correo_electronico_1']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-header align-items-center d-flex">
                                                                <h4 class="card-title mb-0 flex-grow-1">Referencias personales o comerciales(clientes o proveedores)</h4>
                                                            </div>
                                                                <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre o razon social</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_razon_social_2" value="<?php echo $valueReferencia['fr_razon_social_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Actividad</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_actividad_2" value="<?php echo $valueReferencia['fr_actividad_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Relacion con cliente</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_relacion_cliente_2" value="<?php echo $valueReferencia['fr_relacion_cliente_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_telefono_2" value="<?php echo $valueReferencia['fr_telefono_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electronico </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="fr_correo_electronico_2" value="<?php echo $valueReferencia['fr_correo_electronico_2']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
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
                            <div class="tab-pane fade" id="beneficiario" role="tabpanel" aria-labelledby="beneficiario-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">BENEFICIARIO FINAL</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <p>EN ESTE ÚLTIMO CASO, COMPLETE CON LOS DATOS DEL BENEFICIARIO FINAL DE LA TRANSACCIÓN. DE SER PERSONA JURÍDICA,
                                                    UTILIZAR EL FORMULARIO DE DEBIDA DILIGENCIA PERSONA JURÍDICA PCR-CUMP-FORM02 Y LA DECLARACIÓN JURADA DE BENEFICIARIOS
                                                    FINALES DE LAS PERSONAS JURÍDICAS</p>
                                                </div>
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <?php 
                                                            
                                                            $fb_cliete_tercero = "";
                                                            $fb_relacion_familiar_tercero = "";
                                                            $fb_relacion_detalle = "";
                                                            $fb_primer_nombre = "";
                                                            $fb_segundo_nombre = "";
                                                            $fb_apellido_paterno = "";
                                                            $fb_apellido_materno = "";
                                                            $fb_apellido_casada = "";
                                                            $fb_pais_nacimiento = "";
                                                            $fb_fecha_nacimiento = "";
                                                            $fb_nacionaidad = "";
                                                            $fb_genero = "";
                                                            $fb_estado_civil = "";
                                                            $fb_identificacion = "";
                                                            $fb_pais_residencia = "";
                                                            $fb_direccion_residencial = "";
                                                            $fb_email = "";
                                                            $fb_telefono_residencia = "";
                                                            $fb_telefono_movil = "";
                                                            $fb_profesion = "";
                                                            $fb_ocupacion = "";
                                                            $fb_lugar_trabajo = "";
                                                            $fb_direccion_trabajo = "";
                                                            
                                                            foreach ($beneficiario as $key => $valueBeneficiario) { 

                                                                $fb_cliete_tercero = $valueBeneficiario['fb_cliete_tercero'];
                                                                $fb_relacion_familiar_tercero = $valueBeneficiario['fb_relacion_familiar_tercero'];
                                                                $fb_relacion_detalle = $valueBeneficiario['fb_relacion_detalle'];
                                                                $fb_primer_nombre = $valueBeneficiario['fb_primer_nombre'];
                                                                $fb_segundo_nombre = $valueBeneficiario['fb_segundo_nombre'];
                                                                $fb_apellido_paterno = $valueBeneficiario['fb_apellido_paterno'];
                                                                $fb_apellido_materno = $valueBeneficiario['fb_apellido_materno'];
                                                                $fb_apellido_casada = $valueBeneficiario['fb_apellido_casada'];
                                                                $fb_pais_nacimiento = $valueBeneficiario['fb_pais_nacimiento'];
                                                                $fb_fecha_nacimiento = $valueBeneficiario['fb_fecha_nacimiento'];
                                                                $fb_nacionaidad = $valueBeneficiario['fb_nacionaidad'];
                                                                $fb_genero = $valueBeneficiario['fb_genero'];
                                                                $fb_estado_civil = $valueBeneficiario['fb_estado_civil'];
                                                                $fb_identificacion = $valueBeneficiario['fb_identificacion'];
                                                                $fb_pais_residencia = $valueBeneficiario['fb_pais_residencia'];
                                                                $fb_direccion_residencial = $valueBeneficiario['fb_direccion_residencial'];
                                                                $fb_email = $valueBeneficiario['fb_email'];
                                                                $fb_telefono_residencia = $valueBeneficiario['fb_telefono_residencia'];
                                                                $fb_telefono_movil = $valueBeneficiario['fb_telefono_movil'];
                                                                $fb_profesion = $valueBeneficiario['fb_profesion'];
                                                                $fb_ocupacion = $valueBeneficiario['fb_ocupacion'];
                                                                $fb_lugar_trabajo = $valueBeneficiario['fb_lugar_trabajo'];
                                                                $fb_direccion_trabajo = $valueBeneficiario['fb_direccion_trabajo'];

                                                             } ?>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">¿EL AUTO SERÁ TRASPASADO A NOMBRE DEL CLIENTE O DE UN TERCERO?</label>
                                                                    <label for="basiInput" class="form-label">Cliente</label>
                                                                    <input class="form-check-input" type="radio" name="fb_cliete_tercero" id="formradioRight6" value="109BFF" <?php if($fb_cliete_tercero == '109BFF'){ echo 'checked'; } ?>>
                                                                    <label for="basiInput" class="form-label">Tercero</label>
                                                                    <input class="form-check-input" type="radio" name="fb_cliete_tercero" id="formradioRight6" value="110BFF" <?php if($fb_cliete_tercero == '110BFF'){ echo 'checked'; } ?>>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Relacion con el cliente</label>
                                                                    <label for="basiInput" class="form-label">Familiar</label>
                                                                    <input class="form-check-input" type="radio" name="fb_relacion_familiar_tercero" id="formradioRight6" value="111BFF" <?php if($fb_relacion_familiar_tercero == '111BFF'){ echo 'checked'; } ?>>
                                                                    <label for="basiInput" class="form-label">Tercero</label>
                                                                    <input class="form-check-input" type="radio" name="fb_relacion_familiar_tercero" id="formradioRight6" value="110BFF" <?php if($fb_relacion_familiar_tercero == '110BFF'){ echo 'checked'; } ?>>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Detalle relacion</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_relacion_detalle" value="<?php echo $fb_relacion_detalle; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Primer Nombre</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_primer_nombre" value="<?php echo $fb_primer_nombre; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Segundo Nombre</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_segundo_nombre" value="<?php echo $fb_segundo_nombre; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Paterno</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_apellido_paterno" value="<?php echo $fb_apellido_paterno; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Materno</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_apellido_materno" value="<?php echo $fb_apellido_materno; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido de casada</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_apellido_casada" value="<?php echo $fb_apellido_casada; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Pais de Nacimiento</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fb_pais_nacimiento">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($fb_pais_nacimiento == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha Nacimiento</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fb_fecha_nacimiento" value="<?php echo $fb_fecha_nacimiento; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fb_nacionaidad">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($fb_nacionaidad == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->  
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Genero</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fb_genero">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($genero as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($fb_genero == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->  
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Estado Civil</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fb_estado_civil">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($estado_civil as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($fb_estado_civil == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->       
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cedula / N# Pasaporte</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_identificacion" value="<?php echo $fb_identificacion; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->      
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Pais de Residencia</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fb_pais_residencia">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($fb_pais_residencia == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion residencial</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fb_direccion_residencial"><?php echo $fb_direccion_residencial; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col--> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Pais de Residencia Fiscal</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fb_pais_residencia_fiscal">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electronico </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="fb_email" value="<?php echo $fb_email; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->   
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono Residencial</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_telefono_residencia" value="<?php echo $fb_telefono_residencia; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->     
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono Movil</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_telefono_movil" value="<?php echo $fb_telefono_movil; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->    
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Profesion</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fb_profesion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($fb_profesion == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->   
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Ocupacion</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fb_ocupacion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($fb_ocupacion == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col--> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fb_lugar_trabajo"><?php echo $fb_lugar_trabajo; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->   
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fb_direccion_trabajo"><?php echo $fb_direccion_trabajo; ?></textarea>
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
                            <div class="tab-pane fade" id="tercero" role="tabpanel" aria-labelledby="tercero-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">TERCEROS AUTORIZADOS</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <?php 
                                                            
                                                            $ft_cliete_tercero = "";
                                                            $ft_relacion_familiar_tercero = "";
                                                            $ft_relacion_detalle = "";
                                                            $ft_primer_nombre = "";
                                                            $ft_segundo_nombre = "";
                                                            $ft_apellido_paterno = "";
                                                            $ft_apellido_casada = "";
                                                            $ft_pais_nacimiento = "";
                                                            $ft_fecha_nacimiento = "";
                                                            $ft_nacionaidad = "";
                                                            $ft_genero = "";
                                                            $ft_estado_civil = "";
                                                            $ft_identificacion = "";
                                                            $ft_pais_residencia = "";
                                                            $ft_direccion_residencial = "";
                                                            $ft_pais_residencia_fiscal = "";
                                                            $ft_email = "";
                                                            $ft_telefono_residencia = "";
                                                            $ft_telefono_movil = "";
                                                            $ft_profesion = "";
                                                            $ft_ocupacion = "";
                                                            $ft_lugar_trabajo = "";
                                                            $ft_direccion_trabajo = "";

                                                            foreach ($terceros as $key => $valueTerceros) { 

                                                                $ft_cliete_tercero = $valueTerceros['ft_cliete_tercero'];
                                                                $ft_relacion_familiar_tercero = $valueTerceros['ft_relacion_familiar_tercero'];
                                                                $ft_relacion_detalle = $valueTerceros['ft_relacion_detalle'];
                                                                $ft_primer_nombre = $valueTerceros['ft_primer_nombre'];
                                                                $ft_segundo_nombre = $valueTerceros['ft_segundo_nombre'];
                                                                $ft_apellido_paterno = $valueTerceros['ft_apellido_paterno'];
                                                                $ft_apellido_materno = $valueTerceros['ft_apellido_materno'];
                                                                $ft_apellido_casada = $valueTerceros['ft_apellido_casada'];
                                                                $ft_pais_nacimiento = $valueTerceros['ft_pais_nacimiento'];
                                                                $ft_fecha_nacimiento = $valueTerceros['ft_fecha_nacimiento'];
                                                                $ft_nacionaidad = $valueTerceros['ft_nacionaidad'];
                                                                $ft_genero = $valueTerceros['ft_genero'];
                                                                $ft_estado_civil = $valueTerceros['ft_estado_civil'];
                                                                $ft_identificacion = $valueTerceros['ft_identificacion'];
                                                                $ft_pais_residencia = $valueTerceros['ft_pais_residencia'];
                                                                $ft_direccion_residencial = $valueTerceros['ft_direccion_residencial'];
                                                                $ft_pais_residencia_fiscal = $valueTerceros['ft_pais_residencia_fiscal'];
                                                                $ft_email = $valueTerceros['ft_email'];
                                                                $ft_telefono_residencia = $valueTerceros['ft_telefono_residencia'];
                                                                $ft_telefono_movil = $valueTerceros['ft_telefono_movil'];
                                                                $ft_profesion = $valueTerceros['ft_profesion'];
                                                                $ft_ocupacion = $valueTerceros['ft_ocupacion'];
                                                                $ft_lugar_trabajo = $valueTerceros['ft_lugar_trabajo'];
                                                                $ft_direccion_trabajo = $valueTerceros['ft_direccion_trabajo'];

                                                             } ?>

                                                            <p>EN ESTE ÚLTIMO CASO, COMPLETE CON LOS DATOS DEL BENEFICIARIO FINAL DE LA TRANSACCIÓN. DE SER PERSONA JURÍDICA,
                                                            UTILIZAR EL FORMULARIO DE DEBIDA DILIGENCIA PERSONA JURÍDICA PCR-CUMP-FORM02 Y LA DECLARACIÓN JURADA DE BENEFICIARIOS
                                                            FINALES DE LAS PERSONAS JURÍDICAS</p>
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">¿EL AUTO SERÁ TRASPASADO A NOMBRE DEL CLIENTE O DE UN TERCERO?</label>
                                                                    <label for="basiInput" class="form-label">Cliente</label>
                                                                    <input class="form-check-input" type="radio" name="ft_cliete_tercero" id="formradioRight6" value="109BFF" <?php if($ft_cliete_tercero == '109BFF'){ echo 'checked'; } ?>>
                                                                    <label for="basiInput" class="form-label">Tercero</label>
                                                                    <input class="form-check-input" type="radio" name="ft_cliete_tercero" id="formradioRight6" value="111BFF" <?php if($ft_cliete_tercero == '111BFF'){ echo 'checked'; } ?>>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Relacion con el cliente</label>
                                                                    <br>
                                                                    <label for="basiInput" class="form-label">Familiar</label>
                                                                    <input class="form-check-input" type="radio" name="ft_relacion_familiar_tercero" id="formradioRight6" value="111BFF" <?php if($ft_relacion_familiar_tercero == '111BFF'){ echo 'checked'; } ?>>
                                                                    <label for="basiInput" class="form-label">Tercero</label>
                                                                    <input class="form-check-input" type="radio" name="ft_relacion_familiar_tercero" id="formradioRight6" value="110BFF" <?php if($ft_relacion_familiar_tercero == '110BFF'){ echo 'checked'; } ?>>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Detalle relacion</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_relacion_detalle" value="<?php echo $ft_relacion_detalle; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Primer Nombre</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_primer_nombre" value="<?php echo $ft_primer_nombre; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Segundo Nombre</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_segundo_nombre" value="<?php echo $ft_segundo_nombre; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Paterno</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_apellido_paterno" value="<?php echo $ft_apellido_paterno; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Materno</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_apellido_materno" value="<?php echo $ft_apellido_materno; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido de casada</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_apellido_casada" value="<?php echo $ft_apellido_casada; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Pais de Nacimiento</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="ft_pais_nacimiento">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($ft_pais_nacimiento == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha Nacimiento</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="ft_fecha_nacimiento" value="<?php echo $ft_fecha_nacimiento; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="ft_nacionaidad">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($ft_nacionaidad == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>   
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Genero</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="ft_genero">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($genero as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($ft_genero == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Estado Civil</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="ft_estado_civil">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($estado_civil as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($ft_estado_civil == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>      
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cedula / N# Pasaporte</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_identificacion" value="<?php echo $ft_identificacion; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->      
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Pais de Residencia</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="ft_pais_residencia">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($ft_pais_residencia == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion residencial</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="ft_direccion_residencial"><?php echo $ft_direccion_residencial; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col--> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Pais de Residencia Fiscal</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="ft_pais_residencia_fiscal">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($ft_pais_residencia_fiscal == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electronico </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="ft_email" value="<?php echo $ft_email; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->   
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono Residencial</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_telefono_residencia" value="<?php echo $ft_telefono_residencia; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->     
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono Movil</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_telefono_movil" value="<?php echo $ft_telefono_movil; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->    
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Profesion</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="ft_profesion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($ft_profesion == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->   
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Ocupacion</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="ft_ocupacion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($ft_ocupacion == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col--> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="ft_lugar_trabajo"><?php echo $ft_lugar_trabajo; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->   
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="ft_direccion_trabajo"><?php echo $ft_direccion_trabajo; ?></textarea>
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
                            <div class="tab-pane fade" id="expuestas" role="tabpanel" aria-labelledby="expuestas-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">PERSONAS EXPUESTAS POLÍTICAMENTE (PEPS)</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <?php 
                                                            
                                                            $fp_beneficiario = "";
                                                            $fp_nombre_completo = "";
                                                            $fp_cargo_actual = "";
                                                            $fp_fecha = "";
                                                            $fp_cargo_anterior = "";
                                                            $fp_fecha_anterior = "";
                                                            $fp_comentario = "";

                                                            foreach ($expuestas as $key => $valueExpuestas) { 

                                                                $fp_beneficiario = $valueExpuestas['fp_beneficiario'];
                                                                $fp_nombre_completo = $valueExpuestas['fp_nombre_completo'];
                                                                $fp_cargo_actual = $valueExpuestas['fp_cargo_actual'];
                                                                $fp_fecha = $valueExpuestas['fp_fecha'];
                                                                $fp_cargo_anterior = $valueExpuestas['fp_cargo_anterior'];
                                                                $fp_fecha_anterior = $valueExpuestas['fp_fecha_anterior'];
                                                                $fp_comentario = $valueExpuestas['fp_comentario'];

                                                            } ?> 
                                                            <p>
                                                            LAS PERSONAS EXPUESTAS POLÍTICAMENTE SON LAS PERSONAS NACIONALES O EXTRANJERAS QUE CUMPLEN FUNCIONES PÚBLICAS DESTACADAS DE ALTO NIVEL O CON MANDO Y 
                                                            JURISDICCIÓN EN UN ESTADO, COMO (PERO SIN LIMITARSE) LOS JEFES DE ESTADO O DE UN GOBIERNO, LOS POLÍTICOS DE ALTO PERFIL, LOS FUNCIONARIOS GUBERNAMENTALES, 
                                                            JUDICIALES O MILITARES DE ALTA JERARQUÍA, LOS EJECUTIVOS DE EMPRESAS O CORPORACIONES ESTATALES LOS FUNCIONARIOS PÚBLICOS QUE OCUPEN POSICIONES DE ELECCIÓN 
                                                            POPULAR, ENTRE OTROS QUE EJERZAN LA TOMA DE DECISIONES EN LAS ENTIDADES PÚBLICAS; PERSONAS QUE CUMPLEN  O A QUIÉNES SE LES HA CONFIADO FUNCIONES IMPORTANTES 
                                                            POR UNA ORGANIZACIÓN INSTITUCIONAL, COMO LOS MIEMBROS DE LA ALTA GERENCIA, ES DECIR DIRECTORES, SUBDIRECTORES Y MIEMBROS DE LA JUNTA DIRECTIVA O FUNCIONES EQUIVALENTES.
                                                            </p>
                                                            <div class="col-xxl-7 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">¿ES EL CLIENTE, EL BENEFICIARIO FINAL O EL TERCERO AUTORIZADO UN PEP, FAMILIAR CERCANO O ESTRECHO COLABORADOR DE UN PEP?</label>
                                                                    <label for="basiInput" class="form-label">Cliente</label>
                                                                    <input class="form-check-input" type="radio" name="fp_beneficiario" value="109BFF" <?php if($fp_beneficiario == '109BFF'){ echo 'checked'; } ?>>
                                                                    <label for="basiInput" class="form-label">Tercero</label>
                                                                    <input class="form-check-input" type="radio" name="fp_beneficiario" value="110BFF" <?php if($fp_beneficiario == '110BFF'){ echo 'checked'; } ?>>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-5 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre Completo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fp_nombre_completo" value="<?php echo $fp_nombre_completo; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Cargo Actual</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fp_cargo_actual">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion_personas_expuestas as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($fp_cargo_actual == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha Actual</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fp_fecha" value="<?php echo $fp_fecha; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Cargo Anterior</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fp_cargo_anterior">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion_personas_expuestas as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($fp_cargo_anterior == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha Anterior</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fp_fecha_anterior" value="<?php echo $fp_fecha_anterior; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-12 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Comentarios</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fp_comentario"><?php echo $fp_comentario; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                                                 
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
                            <div class="tab-pane fade" id="jurada" role="tabpanel" aria-labelledby="jurada-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">DECLARACIÓN JURADA</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <?php 
                                                            
                                                            $fdc_nombre_completo="";
                                                            $fdc_fecha="";
                                                            $fdc_firma="";
                                                            
                                                            foreach ($declaracion_jurada as $key => $valueJurada) {

                                                                $fdc_nombre_completo=$valueJurada['fdc_nombre_completo'];
                                                                $fdc_fecha=$valueJurada['fdc_fecha'];
                                                                $fdc_firma=$valueJurada['fdc_firma'];

                                                             } ?>
                                                            <p>
                                                            DECLARO QUE LA INFORMACIÓN ANTERIOR ES VERAZ Y HA SIDO PROPORCIONADA EN CUMPLIMIENTO DE LO ESTABLECIDO POR LAS LEYES Y REGULACIONES RELACIONADAS CON 
                                                            LA PREVENCIÓN DEL BLANQUEO DE CAPITALES, FINANCIAMIENTO DEL TERRORISMO Y FINANCIAMIENTO DE LA PROLIFERACIÓN DE ARMAS DE DESTRUCCIÓN MASIVA DE LA REPÚBLICA 
                                                            DE PANAMÁ. ACEPTO PROPORCIONAR CUALQUIER INFORMACIÓN Y/O DOCUMENTACIÓN ADICIONAL A LA DESCRITA EN EL PRESENTE FORMULARIO, QUE PANAMA CAR RENTAL, S.A. REQUIERA 
                                                            PARA LA APLICACIÓN DE LAS MEDIDAS DE DEBIDA DILIGENCIA.							
                                                            </p>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre Completo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fdc_nombre_completo" value="<?php echo $fdc_nombre_completo; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fdc_fecha" value="<?php echo $fdc_fecha; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Firma (igual que en el documento de identidad)</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="fdc_firma" value="">
                                                                    <br>
                                                                    <a href="<?php echo $fdc_firma; ?>" target="_blank">Firma Adjunta</a>
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
                            <div class="tab-pane fade" id="adjuntar" role="tabpanel" aria-labelledby="adjuntar-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">ADJUNTAR LOS SIGUIENTES DOCUMENTOS E INFORMACIÓN DE SOPORTE</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <?php 
                                                            
                                                            $fdcad_documento_identidad="";
                                                            $fdcad_recibo="";
                                                            $fdcad_aviso_operaciones="";
                                                            $fdcad_evidencia_ingresos="";

                                                            foreach ($documentos_adjuntos as $key => $valueAdjuntos) { 

                                                                $fdcad_documento_identidad=$valueAdjuntos['fdcad_documento_identidad'];
                                                                $fdcad_recibo=$valueAdjuntos['fdcad_recibo'];
                                                                $fdcad_aviso_operaciones=$valueAdjuntos['fdcad_aviso_operaciones'];
                                                                $fdcad_evidencia_ingresos=$valueAdjuntos['fdcad_evidencia_ingresos'];

                                                             } ?>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">copia de cédula o pasaporte (para extranjeros)</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="fdcad_documento_identidad">
                                                                    <br>
                                                                    <a href="<?php echo $fdcad_documento_identidad; ?>" target="_blank">Cédula Adjunta</a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Recibo de servicio público dentro de los últimos 3 meses o contrato de arrendamiento</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="fdcad_recibo">
                                                                    <br>
                                                                    <a href="<?php echo $fdcad_recibo; ?>" target="_blank">Recibo Adjunto</a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aviso de operaciones o licencia comercial</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="fdcad_aviso_operaciones">
                                                                    <br>
                                                                    <a href="<?php echo $fdcad_aviso_operaciones; ?>" target="_blank">Aviso de oparacion Adjunto</a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">                                                           
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Evidencia de ingresos (de acuerdo con el perfil financiero)</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="fdcad_evidencia_ingresos">
                                                                    <br>
                                                                    <a href="<?php echo $fdcad_evidencia_ingresos; ?>" target="_blank">Evidencia de ingreso Adjunta</a>
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
                            <div class="tab-pane fade" id="interno" role="tabpanel" aria-labelledby="interno-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">PARA USO INTERNO DE PANAMA CAR RENTAL, S.A.</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <?php 

                                                                $fui_nombre_completo_1="";
                                                                $fui_aprobacion_1="";
                                                                $fui_fecha_1="";
                                                                $fui_nombre_completo_2="";
                                                                $fui_aprobacion_2="";
                                                                $fui_fecha_2="";
                                                                $fui_nombre_completo_3="";
                                                                $fui_aprobacion_3="";
                                                                $fui_fecha_3="";
                                                                $fui_nombre_completo_4="";
                                                                $fui_aprobacion_4="";
                                                                $fui_fecha_4="";
                                                            
                                                            foreach ($uso_interno as $key => $valueUsoInterno) {

                                                                $fui_nombre_completo_1=$valueUsoInterno['fui_nombre_completo_1'];
                                                                $fui_aprobacion_1=$valueUsoInterno['fui_aprobacion_1'];
                                                                $fui_comentario_1=$valueUsoInterno['fui_comentario_1'];
                                                                $fui_fecha_1=$valueUsoInterno['fui_fecha_1'];
                                                                $fui_nombre_completo_2=$valueUsoInterno['fui_nombre_completo_2'];
                                                                $fui_aprobacion_2=$valueUsoInterno['fui_aprobacion_2'];
                                                                $fui_comentario_2=$valueUsoInterno['fui_comentario_2'];
                                                                $fui_fecha_2=$valueUsoInterno['fui_fecha_2'];
                                                                $fui_nombre_completo_3=$valueUsoInterno['fui_nombre_completo_3'];
                                                                $fui_aprobacion_3=$valueUsoInterno['fui_aprobacion_3'];
                                                                $fui_comentario_3=$valueUsoInterno['fui_comentario_3'];
                                                                $fui_fecha_3=$valueUsoInterno['fui_fecha_3'];
                                                                $fui_nombre_completo_4=$valueUsoInterno['fui_nombre_completo_4'];
                                                                $fui_aprobacion_4=$valueUsoInterno['fui_aprobacion_4'];
                                                                $fui_comentario_4=$valueUsoInterno['fui_comentario_4'];
                                                                $fui_fecha_4=$valueUsoInterno['fui_fecha_4'];

                                                             } ?>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del vendedor</label>
                                                                    <input class="form-control" id="basiInput" name="fui_nombre_completo_1" value="<?php echo $fui_nombre_completo_1; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->

                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <select class="form-control" data-choices id="choices-single-default" name="fui_aprobacion_1">
                                                                        <option value="">Seleccione</option>
                                                                        <option value="Aprobado" <?php if($fui_aprobacion_1 == 'Aprobado'){ echo 'selected'; } ?>>Aprobado</option>
                                                                        <option value="Rechazado" <?php if($fui_aprobacion_1 == 'Rechazado'){ echo 'selected'; } ?>>Rechazado</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Comentaro</label>
                                                                    <textarea class="form-control" name="fui_comentario_1"><?php echo $fui_comentario_1; ?></textarea>
                                                                </div>
                                                            </div>

                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fui_fecha_1" value="<?php echo $fui_fecha_1; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del encargado de sucursal</label>
                                                                    <input class="form-control" id="basiInput" name="fui_nombre_completo_2" value="<?php echo $fui_nombre_completo_2; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <select class="form-control" data-choices id="choices-single-default" name="fui_aprobacion_2">
                                                                        <option value="">Seleccione</option>
                                                                        <option value="Aprobado" <?php if($fui_aprobacion_2 == 'Aprobado'){ echo 'selected'; } ?>>Aprobado</option>
                                                                        <option value="Rechazado" <?php if($fui_aprobacion_2 == 'Rechazado'){ echo 'selected'; } ?>>Rechazado</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Comentaro</label>
                                                                    <textarea class="form-control" name="fui_comentario_2"><?php echo $fui_comentario_2; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fui_fecha_2" value="<?php echo $fui_fecha_2; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del analista de cumplimiento</label>
                                                                    <input class="form-control" id="basiInput" name="fui_nombre_completo_3" value="<?php echo $fui_nombre_completo_3; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <select class="form-control" data-choices id="choices-single-default" name="fui_aprobacion_3">
                                                                        <option value="">Seleccione</option>
                                                                        <option value="Aprobado" <?php if($fui_aprobacion_3 == 'Aprobado'){ echo 'selected'; } ?>>Aprobado</option>
                                                                        <option value="Rechazado" <?php if($fui_aprobacion_3 == 'Rechazado'){ echo 'selected'; } ?>>Rechazado</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Comentaro</label>
                                                                    <textarea class="form-control" name="fui_comentario_3"><?php echo $fui_comentario_3; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fui_fecha_3" value="<?php echo $fui_fecha_3; ?>">
                                                                </div>
                                                            </div>

                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del gerente de venta de autos (solo para PEPs)</label>
                                                                    <input class="form-control" id="basiInput" name="fui_nombre_completo_4" value="<?php echo $fui_nombre_completo_4; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <select class="form-control" data-choices id="choices-single-default" name="fui_aprobacion_4">
                                                                        <option value="">Seleccione</option>
                                                                        <option value="Aprobado" <?php if($fui_aprobacion_4 == 'Aprobado'){ echo 'selected'; } ?>>Aprobado</option>
                                                                        <option value="Rechazado" <?php if($fui_aprobacion_4 == 'Rechazado'){ echo 'selected'; } ?>>Rechazado</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Comentaro</label>
                                                                    <textarea class="form-control" name="fui_comentario_4"><?php echo $fui_comentario_4; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fui_fecha_4" value="<?php echo $fui_fecha_4; ?>">
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
                                                        
                                                        <?php if ($_SESSION["usuario"][0]["tipo_user"] == "vendedor" || $_SESSION["usuario"][0]["tipo_user"] == "admin" && $stado_general == 1) { ?>
                                                            <input type="submit" class="btn btn-primary" value="Actualizar" name="actualizar_cc_cliente">
                                                            <a class="btn btn-primary" onclick="solicitar_aprobacion(<?php echo $id; ?>, 'solicitar_aprobacion', 'contenido_modal_solicitar_aprobacion')">Solicitar Aprobacion</a>
                                                        <?php }elseif ($_SESSION["usuario"][0]["tipo_user"] == "vendedor" || $_SESSION["usuario"][0]["tipo_user"] == "admin" && $stado_general == 2) { ?>
                                                            <a class="btn btn-warning" onclick="revicion_cc_pn(<?php echo $id; ?>, 'solicitar_aprobacion', 'contenido_modal_solicitar_aprobacion')">Revicion</a>
                                                            <a class="btn btn-success" onclick="aprobacion_cc_pn(<?php echo $id; ?>, 'solicitar_aprobacion', 'contenido_modal_solicitar_aprobacion')">Aprobar</a>
                                                        <?php }elseif ($_SESSION["usuario"][0]["tipo_user"] == "vendedor" || $_SESSION["usuario"][0]["tipo_user"] == "admin" && $stado_general == 3) { ?>
                                                           <input type="submit" class="btn btn-primary" value="Actualizar" name="actualizar_cc_cliente">
                                                           <a class="btn btn-primary" onclick="solicitar_aprobacion(<?php echo $id; ?>, 'solicitar_aprobacion', 'contenido_modal_solicitar_aprobacion')">Solicitar Aprobacion</a>
                                                        <?php }else{
                                                            echo '<h4>Este master ha sido aprobado</h4>';
                                                        } ?>
                                                        
                                                        <input type="hidden" name="id_general" value="<?php echo $id; ?>">
                                                        
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
                            <a class="nav-link mb-2" id="ocupacionales-tab" data-bs-toggle="pill" href="#ocupacionales" role="tab" aria-controls="ocupacionales" aria-selected="false">OCUPACIONALES</a>
                            <a class="nav-link mb-2" id="declaracion-tab" data-bs-toggle="pill" href="#declaracion" role="tab" aria-controls="declaracion" aria-selected="false">DECLARACION</a>
                            <a class="nav-link" id="referencia-tab" data-bs-toggle="pill" href="#referencia" role="tab" aria-controls="referencia" aria-selected="false">REFERENCIAS</a>
                            <a class="nav-link mb-2" id="beneficiario-tab" data-bs-toggle="pill" href="#beneficiario" role="tab" aria-controls="beneficiario" aria-selected="false">BENEFICIARIO</a>
                            <a class="nav-link mb-2" id="tercero-tab" data-bs-toggle="pill" href="#tercero" role="tab" aria-controls="tercero" aria-selected="false">TERCEROS</a>
                            <a class="nav-link" id="expuestas-tab" data-bs-toggle="pill" href="#expuestas" role="tab" aria-controls="expuestas" aria-selected="false">P.EXPUESTAS</a>
                            <a class="nav-link mb-2" id="jurada-tab" data-bs-toggle="pill" href="#jurada" role="tab" aria-controls="jurada" aria-selected="false">D. JURADA</a>
                            <a class="nav-link mb-2" id="adjuntar-tab" data-bs-toggle="pill" href="#adjuntar" role="tab" aria-controls="adjuntar" aria-selected="false">ADJUNTAR</a>
                            <a class="nav-link" id="interno-tab" data-bs-toggle="pill" href="#interno" role="tab" aria-controls="interno" aria-selected="false">USO INTERNO</a>
                            <a class="nav-link" id="aviso_legal-tab" data-bs-toggle="pill" href="#aviso_legal" role="tab" aria-controls="aviso_legal" aria-selected="false">AVISO LEGAL</a>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-10">
                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="portada" role="tabpanel" aria-labelledby="portada-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">CONTROL DE ENTREGA DE EXPEDIENTES  DE VENTAS DE AUTOS</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                    <?php foreach ($expedienete as $key => $value) { ?>
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="exp_fecha" value="<?php echo $value['exp_fecha']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cliente</label>
                                                                    <input type="text" class="form-control" id="nombre_completo_inp" name="exp_cliente" readonly value="<?php echo $value['exp_cliente']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Marca</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_marca" value="<?php echo $value['exp_marca']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Modelo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_modelo" value="<?php echo $value['exp_modelo']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Año</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_anio" value="<?php echo $value['exp_anio']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Placa</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_placa" value="<?php echo $value['exp_placa']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Chasis</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_chasis" value="<?php echo $value['exp_placa']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Motor</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_motor" value="<?php echo $value['exp_motor']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Color</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_color" value="<?php echo $value['exp_color']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Codigo Dollar</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_codigo_dollar" value="<?php echo $value['exp_codigo_dollar']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">N° INTELISIS</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_n_intelisis" value="<?php echo $value['exp_n_intelisis']; ?>">
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
                                                        <div class="row gy-4">
                                                            <?php foreach ($generales as $key => $valueGenerales) { ?>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Primer Nombre</label>
                                                                    <input type="text" class="form-control" id="primer_nombre" name="fg_primer_nombre" onkeyup="nombre_completo()" value="<?php echo $valueGenerales['fg_primer_nombre']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Segundo Nombre</label>
                                                                    <input type="text" class="form-control" id="segundo_nombre" name="fg_segundo_nombre"  onkeyup="nombre_completo()" value="<?php echo $valueGenerales['fg_segundo_nombre']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Paterno</label>
                                                                    <input type="text" class="form-control" id="apellido_paterno" name="fg_apellido_paterno"  onkeyup="nombre_completo()" value="<?php echo $valueGenerales['fg_apellido_paterno']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Materno</label>
                                                                    <input type="text" class="form-control" id="apellido_materno" name="fg_apellido_materno"  onkeyup="nombre_completo()" value="<?php echo $valueGenerales['fg_apellido_materno']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido de Casada</label>
                                                                    <input type="text" class="form-control" id="apellido_casada" name="fg_apellido_casada" onkeyup="nombre_completo()" value="<?php echo $valueGenerales['fg_apellido_casada']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Pais de Naciemiento</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fg_pais_nacimiento">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueGenerales['fg_pais_nacimiento'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha Nacimiento</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fg_fecha_nacimiento" value="<?php echo $valueGenerales['fg_fecha_nacimiento']; ?>">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Genero</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fg_genero">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($genero as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueGenerales['fg_genero'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fg_nacionalidad">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueGenerales['fg_nacionalidad'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Estado Civil</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fg_estado_civil">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($estado_civil as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueGenerales['fg_estado_civil'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cedula / N# Pasaporte</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fg_cedula" value="<?php echo $valueGenerales['fg_cedula']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Pais de Residencia</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fg_pais_residencia">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueGenerales['fg_pais_residencia'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion residencial</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fg_direccion_residencial"><?php echo $valueGenerales['fg_direccion_residencial']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Pais de Residencia Fiscal</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fg_pais_residencia_fiscal">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueGenerales['fg_pais_residencia_fiscal'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electronico </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="fg_email" value="<?php echo $valueGenerales['fg_email']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono Residencial</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fg_telefono_residencia" value="<?php echo $valueGenerales['fg_telefono_residencia']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono Movil</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fg_telefono_movil" value="<?php echo $valueGenerales['fg_telefono_movil']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
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
                            <div class="tab-pane fade" id="ocupacionales" role="tabpanel" aria-labelledby="ocupacionales-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">DATOS OCUPACIONALES</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <?php foreach ($ocupacionales as $key => $valueOcupacionales) { ?>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Profesion</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fo_profesion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueOcupacionales['fo_profesion'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Ocupacion</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fo_ocupacion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueOcupacionales['fo_ocupacion'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fo_lugar_trabajo"><?php echo $valueOcupacionales['fo_lugar_trabajo']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion de Trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fo_direccion_trabajo"><?php echo $valueOcupacionales['fo_direccion_trabajo']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electronico del trabajo </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="fo_correo_trabajo" value="<?php echo $valueOcupacionales['fo_correo_trabajo']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono del trabajo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fo_telefono_trabajo" value="<?php echo $valueOcupacionales['fo_telefono_trabajo']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre del Negocio (Empresario e independientes)</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fo_nombre_negocio" value="<?php echo $valueOcupacionales['fo_nombre_negocio']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aviso de operaciones (Empresario e independientes)</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fo_aviso_operaciones" value="<?php echo $valueOcupacionales['fo_aviso_operaciones']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Licita con el estado</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fo_licita_estado">
                                                                        <option value="">Seleccione</option>
                                                                        <option value="SI" <?php if($valueOcupacionales['fo_licita_estado'] == 'SI'){ echo 'selected'; } ?>>SI</option>
                                                                        <option value="NO" <?php if($valueOcupacionales['fo_licita_estado'] == 'NO'){ echo 'selected'; } ?>>NO</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">En caso de ser afirmativo, pais o paises con el que licita</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fo_pais_residencia_fiscal">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueOcupacionales['fo_pais_residencia_fiscal'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
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
                            <div class="tab-pane fade" id="declaracion" role="tabpanel" aria-labelledby="declaracion-tab">
                                <div class="d-flex mb-2">
                                    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">DECLARACIÓN DE FUENTE Y ORIGEN DE LOS FONDOS</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <p>DECLARO QUE LOS FONDOS PARA EFECTUAR LA TRANSACCIÓN DE COMPRAVENTA PROVIENEN DE FUENTES LÍCITAS Y PROPIAS DETALLADAS A CONTINUACIÓN Y QUE NO REALIZARÉ O ADMITIRÉ QUE SE 
                                                    EFECTÚEN PAGOS A NOMBRE MÍO O DE LA PERSONA QUE REPRESENTO CON FONDOS PROVENIENTES DE ACTIVIDADES ILÍCITAS, NI EFECTUARÉ TRANSACCIONES DESTINADAS A TALES ACTIVIDADES O A FAVOR DE PERSONAS RELACIONADAS A LAS MISMAS.</p>
                                                </div>
                                                    <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                        <?php foreach ($declaracion as $key => $valueDeclaracion) { ?>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Actividad Principal</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fd_actividad_principal">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($actividad_principal as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueDeclaracion['fd_actividad_principal'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Otras Fuentes</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fd_otras_fuentes">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($actividad_otras as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueDeclaracion['fd_otras_fuentes'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Limite de compra</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fd_limite_compra">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($limite as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueDeclaracion['fd_limite_compra'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Forma de Pago</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fd_forma_pago_1">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($forma_pago as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueDeclaracion['fd_forma_pago_1'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Metodo de Pago</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fd_metodo_pago_1">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($motodo_pago as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueDeclaracion['fd_metodo_pago_1'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Metodo de Pago 2</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fd_metodo_pago_2">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($motodo_pago as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueDeclaracion['fd_metodo_pago_2'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
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
                            <div class="tab-pane fade" id="referencia" role="tabpanel" aria-labelledby="referencia-tab">
                                <div class="d-flex mb-2">
                                    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">REFERENCIAS</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">Referencia Bancarias</div>
                                                    <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <?php foreach ($referencias as $key => $valueReferencia) { ?>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre o razon social</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_razon_social_1" value="<?php echo $valueReferencia['fr_razon_social_1']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Actividad</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_actividad_1" value="<?php echo $valueReferencia['fr_actividad_1']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Relacion con cliente</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_relacion_cliente_1" value="<?php echo $valueReferencia['fr_relacion_cliente_1']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_telefono_1" value="<?php echo $valueReferencia['fr_telefono_1']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electronico </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="fr_correo_electronico_1" value="<?php echo $valueReferencia['fr_correo_electronico_1']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-header align-items-center d-flex">
                                                                <h4 class="card-title mb-0 flex-grow-1">Referencias personales o comerciales(clientes o proveedores)</h4>
                                                            </div>
                                                                <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre o razon social</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_razon_social_2" value="<?php echo $valueReferencia['fr_razon_social_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Actividad</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_actividad_2" value="<?php echo $valueReferencia['fr_actividad_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Relacion con cliente</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_relacion_cliente_2" value="<?php echo $valueReferencia['fr_relacion_cliente_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_telefono_2" value="<?php echo $valueReferencia['fr_telefono_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electronico </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="fr_correo_electronico_2" value="<?php echo $valueReferencia['fr_correo_electronico_2']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
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
                            <div class="tab-pane fade" id="beneficiario" role="tabpanel" aria-labelledby="beneficiario-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">BENEFICIARIO FINAL</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <p>EN ESTE ÚLTIMO CASO, COMPLETE CON LOS DATOS DEL BENEFICIARIO FINAL DE LA TRANSACCIÓN. DE SER PERSONA JURÍDICA,
                                                    UTILIZAR EL FORMULARIO DE DEBIDA DILIGENCIA PERSONA JURÍDICA PCR-CUMP-FORM02 Y LA DECLARACIÓN JURADA DE BENEFICIARIOS
                                                    FINALES DE LAS PERSONAS JURÍDICAS</p>
                                                </div>
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <?php foreach ($beneficiario as $key => $valueBeneficiario) { ?>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">¿EL AUTO SERÁ TRASPASADO A NOMBRE DEL CLIENTE O DE UN TERCERO?</label>
                                                                    <label for="basiInput" class="form-label">Cliente</label>
                                                                    <input class="form-check-input" type="radio" name="fb_cliete_tercero" id="formradioRight6" value="109BFF" <?php if($valueBeneficiario['fb_cliete_tercero'] == '109BFF'){ echo 'checked'; } ?>>
                                                                    <label for="basiInput" class="form-label">Tercero</label>
                                                                    <input class="form-check-input" type="radio" name="fb_cliete_tercero" id="formradioRight6" value="110BFF" <?php if($valueBeneficiario['fb_cliete_tercero'] == '110BFF'){ echo 'checked'; } ?>>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Relacion con el cliente</label>
                                                                    <label for="basiInput" class="form-label">Familiar</label>
                                                                    <input class="form-check-input" type="radio" name="fb_relacion_familiar_tercero" id="formradioRight6" value="111BFF" <?php if($valueBeneficiario['fb_relacion_familiar_tercero'] == '111BFF'){ echo 'checked'; } ?>>
                                                                    <label for="basiInput" class="form-label">Tercero</label>
                                                                    <input class="form-check-input" type="radio" name="fb_relacion_familiar_tercero" id="formradioRight6" value="110BFF" <?php if($valueBeneficiario['fb_relacion_familiar_tercero'] == '110BFF'){ echo 'checked'; } ?>>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Detalle relacion</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_relacion_detalle" value="<?php echo $valueBeneficiario['fb_relacion_detalle']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Primer Nombre</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_primer_nombre" value="<?php echo $valueBeneficiario['fb_primer_nombre']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Segundo Nombre</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_segundo_nombre" value="<?php echo $valueBeneficiario['fb_segundo_nombre']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Paterno</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_apellido_paterno" value="<?php echo $valueBeneficiario['fb_apellido_paterno']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Materno</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_apellido_materno" value="<?php echo $valueBeneficiario['fb_apellido_materno']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido de casada</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_apellido_casada" value="<?php echo $valueBeneficiario['fb_apellido_casada']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Pais de Nacimiento</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fb_pais_nacimiento">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueBeneficiario['fb_pais_nacimiento'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha Nacimiento</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fb_fecha_nacimiento" value="<?php echo $valueBeneficiario['fb_fecha_nacimiento']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fb_nacionaidad">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueBeneficiario['fb_nacionaidad'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->  
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Genero</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fb_genero">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($genero as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueBeneficiario['fb_genero'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->  
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Estado Civil</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fb_estado_civil">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($estado_civil as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueBeneficiario['fb_estado_civil'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->       
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cedula / N# Pasaporte</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_identificacion" value="<?php echo $valueBeneficiario['fb_identificacion']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->      
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Pais de Residencia</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fb_pais_residencia">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueBeneficiario['fb_pais_residencia'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion residencial</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fb_direccion_residencial"><?php echo $valueBeneficiario['fb_direccion_residencial']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col--> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Pais de Residencia Fiscal</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fb_pais_residencia_fiscal">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electronico </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="fb_email" value="<?php echo $valueBeneficiario['fb_email']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->   
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono Residencial</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_telefono_residencia" value="<?php echo $valueBeneficiario['fb_telefono_residencia']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->     
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono Movil</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_telefono_movil" value="<?php echo $valueBeneficiario['fb_telefono_movil']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->    
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Profesion</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fb_profesion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueBeneficiario['fb_profesion'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->   
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Ocupacion</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fb_ocupacion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueBeneficiario['fb_ocupacion'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col--> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fb_lugar_trabajo"><?php echo $valueBeneficiario['fb_lugar_trabajo']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->   
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fb_direccion_trabajo"><?php echo $valueBeneficiario['fb_direccion_trabajo']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
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
                            <div class="tab-pane fade" id="tercero" role="tabpanel" aria-labelledby="tercero-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">TERCEROS AUTORIZADOS</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <?php foreach ($terceros as $key => $valueTerceros) { ?>

                                                            <p>EN ESTE ÚLTIMO CASO, COMPLETE CON LOS DATOS DEL BENEFICIARIO FINAL DE LA TRANSACCIÓN. DE SER PERSONA JURÍDICA,
                                                            UTILIZAR EL FORMULARIO DE DEBIDA DILIGENCIA PERSONA JURÍDICA PCR-CUMP-FORM02 Y LA DECLARACIÓN JURADA DE BENEFICIARIOS
                                                            FINALES DE LAS PERSONAS JURÍDICAS</p>
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">¿EL AUTO SERÁ TRASPASADO A NOMBRE DEL CLIENTE O DE UN TERCERO?</label>
                                                                    <label for="basiInput" class="form-label">Cliente</label>
                                                                    <input class="form-check-input" type="radio" name="ft_cliete_tercero" id="formradioRight6" value="109BFF" <?php if($valueTerceros['ft_cliete_tercero'] == '109BFF'){ echo 'checked'; } ?>>
                                                                    <label for="basiInput" class="form-label">Tercero</label>
                                                                    <input class="form-check-input" type="radio" name="ft_cliete_tercero" id="formradioRight6" value="111BFF" <?php if($valueTerceros['ft_cliete_tercero'] == '111BFF'){ echo 'checked'; } ?>>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Relacion con el cliente</label>
                                                                    <br>
                                                                    <label for="basiInput" class="form-label">Familiar</label>
                                                                    <input class="form-check-input" type="radio" name="ft_relacion_familiar_tercero" id="formradioRight6" value="111BFF" <?php if($valueTerceros['ft_relacion_familiar_tercero'] == '111BFF'){ echo 'checked'; } ?>>
                                                                    <label for="basiInput" class="form-label">Tercero</label>
                                                                    <input class="form-check-input" type="radio" name="ft_relacion_familiar_tercero" id="formradioRight6" value="110BFF" <?php if($valueTerceros['ft_relacion_familiar_tercero'] == '110BFF'){ echo 'checked'; } ?>>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Detalle relacion</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_relacion_detalle" value="<?php echo $valueTerceros['ft_relacion_detalle']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Primer Nombre</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_primer_nombre" value="<?php echo $valueTerceros['ft_primer_nombre']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Segundo Nombre</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_segundo_nombre" value="<?php echo $valueTerceros['ft_segundo_nombre']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Paterno</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_apellido_paterno" value="<?php echo $valueTerceros['ft_apellido_paterno']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Materno</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_apellido_materno" value="<?php echo $valueTerceros['ft_apellido_materno']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido de casada</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_apellido_casada" value="<?php echo $valueTerceros['ft_apellido_casada']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Pais de Nacimiento</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="ft_pais_nacimiento">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueTerceros['ft_pais_nacimiento'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha Nacimiento</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="ft_fecha_nacimiento" value="<?php echo $valueTerceros['ft_fecha_nacimiento']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="ft_nacionaidad">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueTerceros['ft_nacionaidad'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>   
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Genero</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="ft_genero">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($genero as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueTerceros['ft_genero'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Estado Civil</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="ft_estado_civil">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($estado_civil as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueTerceros['ft_estado_civil'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>      
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cedula / N# Pasaporte</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_identificacion" value="<?php echo $valueTerceros['ft_identificacion']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->      
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Pais de Residencia</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="ft_pais_residencia">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueTerceros['ft_pais_residencia'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion residencial</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="ft_direccion_residencial"><?php echo $valueTerceros['ft_direccion_residencial']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col--> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Pais de Residencia Fiscal</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="ft_pais_residencia_fiscal">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueTerceros['ft_pais_residencia_fiscal'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electronico </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="ft_email" value="<?php echo $valueTerceros['ft_email']; ?>">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->   
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono Residencial</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_telefono_residencia" value="<?php echo $valueTerceros['ft_telefono_residencia']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->     
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono Movil</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_telefono_movil" value="<?php echo $valueTerceros['ft_telefono_movil']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->    
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Profesion</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="ft_profesion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueTerceros['ft_profesion'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->   
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Ocupacion</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="ft_ocupacion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueTerceros['ft_ocupacion'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col--> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="ft_lugar_trabajo"><?php echo $valueTerceros['ft_lugar_trabajo']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->   
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="ft_direccion_trabajo"><?php echo $valueTerceros['ft_direccion_trabajo']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
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
                            <div class="tab-pane fade" id="expuestas" role="tabpanel" aria-labelledby="expuestas-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">PERSONAS EXPUESTAS POLÍTICAMENTE (PEPS)</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <?php foreach ($expuestas as $key => $valueExpuestas) { ?>
                                                            <p>
                                                            LAS PERSONAS EXPUESTAS POLÍTICAMENTE SON LAS PERSONAS NACIONALES O EXTRANJERAS QUE CUMPLEN FUNCIONES PÚBLICAS DESTACADAS DE ALTO NIVEL O CON MANDO Y 
                                                            JURISDICCIÓN EN UN ESTADO, COMO (PERO SIN LIMITARSE) LOS JEFES DE ESTADO O DE UN GOBIERNO, LOS POLÍTICOS DE ALTO PERFIL, LOS FUNCIONARIOS GUBERNAMENTALES, 
                                                            JUDICIALES O MILITARES DE ALTA JERARQUÍA, LOS EJECUTIVOS DE EMPRESAS O CORPORACIONES ESTATALES LOS FUNCIONARIOS PÚBLICOS QUE OCUPEN POSICIONES DE ELECCIÓN 
                                                            POPULAR, ENTRE OTROS QUE EJERZAN LA TOMA DE DECISIONES EN LAS ENTIDADES PÚBLICAS; PERSONAS QUE CUMPLEN  O A QUIÉNES SE LES HA CONFIADO FUNCIONES IMPORTANTES 
                                                            POR UNA ORGANIZACIÓN INSTITUCIONAL, COMO LOS MIEMBROS DE LA ALTA GERENCIA, ES DECIR DIRECTORES, SUBDIRECTORES Y MIEMBROS DE LA JUNTA DIRECTIVA O FUNCIONES EQUIVALENTES.
                                                            </p>
                                                            <div class="col-xxl-7 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">¿ES EL CLIENTE, EL BENEFICIARIO FINAL O EL TERCERO AUTORIZADO UN PEP, FAMILIAR CERCANO O ESTRECHO COLABORADOR DE UN PEP?</label>
                                                                    <label for="basiInput" class="form-label">Cliente</label>
                                                                    <input class="form-check-input" type="radio" name="fp_beneficiario" value="109BFF" <?php if($valueExpuestas['fp_beneficiario'] == '109BFF'){ echo 'checked'; } ?>>
                                                                    <label for="basiInput" class="form-label">Tercero</label>
                                                                    <input class="form-check-input" type="radio" name="fp_beneficiario" value="110BFF" <?php if($valueExpuestas['fp_beneficiario'] == '110BFF'){ echo 'checked'; } ?>>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-5 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre Completo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fp_nombre_completo" value="<?php echo $valueExpuestas['fp_nombre_completo']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Cargo Actual</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fp_cargo_actual">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion_personas_expuestas as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueExpuestas['fp_cargo_actual'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha Actual</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fp_fecha" value="<?php echo $valueExpuestas['fp_fecha']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Cargo Anterior</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fp_cargo_anterior">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion_personas_expuestas as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>" <?php if($valueExpuestas['fp_cargo_anterior'] == $value['codigo']){ echo 'selected'; } ?>><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha Anterior</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fp_fecha_anterior" value="<?php echo $valueExpuestas['fp_fecha_anterior']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-12 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Comentarios</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fp_comentario"><?php echo $valueExpuestas['fp_comentario']; ?></textarea>
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
                            <div class="tab-pane fade" id="jurada" role="tabpanel" aria-labelledby="jurada-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">DECLARACIÓN JURADA</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <?php foreach ($declaracion_jurada as $key => $valueJurada) { ?>
                                                            <p>
                                                            DECLARO QUE LA INFORMACIÓN ANTERIOR ES VERAZ Y HA SIDO PROPORCIONADA EN CUMPLIMIENTO DE LO ESTABLECIDO POR LAS LEYES Y REGULACIONES RELACIONADAS CON 
                                                            LA PREVENCIÓN DEL BLANQUEO DE CAPITALES, FINANCIAMIENTO DEL TERRORISMO Y FINANCIAMIENTO DE LA PROLIFERACIÓN DE ARMAS DE DESTRUCCIÓN MASIVA DE LA REPÚBLICA 
                                                            DE PANAMÁ. ACEPTO PROPORCIONAR CUALQUIER INFORMACIÓN Y/O DOCUMENTACIÓN ADICIONAL A LA DESCRITA EN EL PRESENTE FORMULARIO, QUE PANAMA CAR RENTAL, S.A. REQUIERA 
                                                            PARA LA APLICACIÓN DE LAS MEDIDAS DE DEBIDA DILIGENCIA.							
                                                            </p>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre Completo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fdc_nombre_completo" value="<?php echo $valueJurada['fdc_nombre_completo']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fdc_fecha" value="<?php echo $valueJurada['fdc_fecha']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Firma (igual que en el documento de identidad)</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="fdc_firma" value="">
                                                                    <br>
                                                                    <a href="<?php echo $valueJurada['fdc_firma']; ?>" target="_blank">Firma Adjunta</a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
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
                            <div class="tab-pane fade" id="adjuntar" role="tabpanel" aria-labelledby="adjuntar-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">ADJUNTAR LOS SIGUIENTES DOCUMENTOS E INFORMACIÓN DE SOPORTE</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <?php foreach ($documentos_adjuntos as $key => $valueAdjuntos) { ?>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">copia de cédula o pasaporte (para extranjeros)</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="fdcad_documento_identidad">
                                                                    <br>
                                                                    <a href="<?php echo $valueAdjuntos['fdcad_documento_identidad']; ?>" target="_blank">Cédula Adjunta</a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Recibo de servicio público dentro de los últimos 3 meses o contrato de arrendamiento</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="fdcad_recibo">
                                                                    <br>
                                                                    <a href="<?php echo $valueAdjuntos['fdcad_recibo']; ?>" target="_blank">Recibo Adjunto</a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aviso de operaciones o licencia comercial</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="fdcad_aviso_operaciones">
                                                                    <br>
                                                                    <a href="<?php echo $valueAdjuntos['fdcad_aviso_operaciones']; ?>" target="_blank">Aviso de oparacion Adjunto</a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">                                                           
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Evidencia de ingresos (de acuerdo con el perfil financiero)</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="fdcad_evidencia_ingresos">
                                                                    <br>
                                                                    <a href="<?php echo $valueAdjuntos['fdcad_evidencia_ingresos']; ?>" target="_blank">Evidencia de ingreso Adjunta</a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
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
                            <div class="tab-pane fade" id="interno" role="tabpanel" aria-labelledby="interno-tab">
                                <div class="d-flex mb-2">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">PARA USO INTERNO DE PANAMA CAR RENTAL, S.A.</h4>
                                                </div><!-- end card header -->
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <?php foreach ($uso_interno as $key => $valueUsoInterno) { ?>
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del vendedor</label>
                                                                    <input class="form-control" id="basiInput" name="fui_nombre_completo_1" value="<?php echo $valueUsoInterno['fui_nombre_completo_1']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <input class="form-control" id="basiInput" name="fui_aprobacion_1" value="<?php echo $valueUsoInterno['fui_aprobacion_1']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fui_fecha_1" value="<?php echo $valueUsoInterno['fui_fecha_1']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del encargado de sucursal</label>
                                                                    <input class="form-control" id="basiInput" name="fui_nombre_completo_2" value="<?php echo $valueUsoInterno['fui_nombre_completo_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <input class="form-control" id="basiInput" name="fui_aprobacion_2" value="<?php echo $valueUsoInterno['fui_aprobacion_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fui_fecha_2" value="<?php echo $valueUsoInterno['fui_fecha_2']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del analista de cumplimiento</label>
                                                                    <input class="form-control" id="basiInput" name="fui_nombre_completo_3" value="<?php echo $valueUsoInterno['fui_nombre_completo_3']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <input class="form-control" id="basiInput" name="fui_aprobacion_3" value="<?php echo $valueUsoInterno['fui_aprobacion_3']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fui_fecha_3" value="<?php echo $valueUsoInterno['fui_fecha_3']; ?>">
                                                                </div>
                                                            </div>

                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del gerente de venta de autos (solo para PEPs)</label>
                                                                    <input class="form-control" id="basiInput" name="fui_nombre_completo_4" value="<?php echo $valueUsoInterno['fui_nombre_completo_4']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <input class="form-control" id="basiInput" name="fui_aprobacion_4" value="<?php echo $valueUsoInterno['fui_aprobacion_4']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fui_fecha_4" value="<?php echo $valueUsoInterno['fui_fecha_4']; ?>">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
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
                                                        <input type="submit" class="btn btn-danger" value="Eliminar" name="eliminar_cc_cliente">
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
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                Portada file venta
                <br>
                <a href="vistas/documentos_generados/generar_pdf.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bxs-file-pdf" style="font-size: 100px;" ></i></a>
            </div>
            <div class="col-sm-6">
                Resumen
                <br>
                <a href="vistas/documentos_generados/generar_resumen_pdf.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bxs-file-pdf" style="font-size: 100px;" ></i></a>
            </div>
        </div>
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
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
            <div class="col-sm-4">
                Declaracion de Actividad <br>
                <a href="vistas/documentos_generados/declaracion_actividad.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-show" style="font-size: 100px;" ></i></a>
                <br>
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Pago de Familiares<br>
                <a href="vistas/documentos_generados/pago_familiares.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bxs-group" style="font-size: 100px;" ></i></a>
                <br>
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Pago de Terceros<br>
                <a href="vistas/documentos_generados/pago_terceros.php?id=<?php echo $id; ?>" target="_blank"><i class=" bx bx-user-circle" style="font-size: 100px;" ></i></a>
                <br>
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Traspaso PN<br>
                <a href="vistas/documentos_generados/traspaso_pn.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-repost" style="font-size: 100px;" ></i></a>
                <br>
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Traspaso PJ<br>
                <a href="vistas/documentos_generados/traspaso_pj.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-rotate-right" style="font-size: 100px;" ></i></a>
                <br>
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Exoneracion Total<br>
                <a href="vistas/documentos_generados/exoneracion_total.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-user-voice" style="font-size: 100px;" ></i></a>
                <br>
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Tesoreria Municipal<br>
                <a href="vistas/documentos_generados/tesoreria_municipal.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-building" style="font-size: 100px;" ></i></a>
                <br>
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
            <div class="col-sm-4" style="margin-top:20px;">
                Detalle de Transaccion<br>
                <a href="vistas/documentos_generados/detalle_transaccion.php?id=<?php echo $id; ?>" target="_blank"><i class="bx bx-transfer" style="font-size: 100px;" ></i></a>
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
                <a href="#" target="_blank"><i class="ri-user-star-line" style="font-size: 100px;" ></i></a>
                <br>
                <!--<button class="btn btn-success">Enviar por Email</button>-->
            </div>
        </div>
    </div>
<?php }elseif(isset($_GET['adjuntos_formulario_cc'])){ ?>
<button class="btn btn-primary" onclick="agregar_adjuntos(<?php echo $_GET['id']; ?>, 'registrar_cClienteAdjuntos', 'registar_ccliente_adjuntos', 'cClienteAdjuntos')">Agregar Adjunto</button>
<br>
<table id="buttons-datatables" class="display table table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Descripcion del adjunto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($todos_adjuntos  as $key => $value) { ?>
        <tr>
            <td><a href="<?php echo $value['link_desc']; ?>" target="_blank"><?php echo $value['descripcion']; ?></a></td>
            <td>
                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="eliminar_adjunto_pn(<?php echo $value['id']; ?>, 'contenido_modal_ccliente_adjuntos', 'modal_adjuntos_eli', <?php echo $_GET['id']; ?>)"><i class="ri-delete-bin-5-line"></i></button>
            </td>
        </tr>
        <?php } ?>
    </tbody>    
</table>
<?php }elseif(isset($_GET['adjuntos_cc_pn_reg'])){ ?> 

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
                        <input type="file" class="form-control" id="basiInput" name="link_desc" value="">
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

<?php }elseif (isset($_GET['eliminar_adjuntos_gen_pn'])) { 

    $cCclienteController->eliminar_adjuntos_gen_pn($_GET['id']);

?>
    
<button class="btn btn-primary" onclick="agregar_adjuntos(<?php echo $_GET['id_general']; ?>, 'registrar_cClienteAdjuntos', 'registar_ccliente_adjuntos', 'cClienteAdjuntos')">Agregar Adjunto</button>
<br>
<table id="buttons-datatables" class="display table table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Descripcion del adjunto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $todos_adjuntos_eli = $cCclienteController->obtenerTodosAdjuntos($_GET['id_general']);
        foreach ($todos_adjuntos_eli as $key => $value) { ?>
        <tr>
            <td><a href="<?php echo $value['link_desc']; ?>" target="_blank"><?php echo $value['descripcion']; ?></a></td>
            <td>
                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="eliminar_adjunto_pn(<?php echo $value['id']; ?>, 'registar_ccliente_adjuntos', 'modal_adjuntos_eli', <?php echo $_GET['id_general']; ?>)"><i class="ri-delete-bin-5-line"></i></button>
            </td>
        </tr>
        <?php } ?>
    </tbody>    
</table>

<?php }elseif(isset($_GET['solicitar_aprobacion'])){ ?>

    <div class="card-body">
        <div class="live-preview">
            <p>Presione el botón "Solicitar" para solicitar la aprobación por parte del analista. Cuando la solicitud esté aprobada, 
                podrá ver este formulario en la sección de "Histórico Persona Natural". Tome en cuenta que el analista puede indicarle 
                que no está completo y requerirle que llene la información faltante. 
            </p>
            <input type="hidden" name="id_general" value="<?php echo $_GET['id']; ?>">
        </div>
        <div class="d-none code-view">
            <pre class="language-markup" style="height: 450px;">
        </div>
    </div>

<?php }

//doc
//blokearon
//ines y lisbeth 
// listo pa salir

// irene 
// plena seguridad
// muy afectada
// se;al cosmica 
// demaciada verga
// energia q te ayuda
