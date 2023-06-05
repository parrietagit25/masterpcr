<?php 
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

if (isset($_GET['eliminar_reporte'])) { ?>

<form method="POST" action="" enctype="multipart/form-data">
    <div class="col-xxl-12">
        <h5 class="mb-3">Vertical Nav Tabs</h5>
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
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="exp_fecha">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cliente</label>
                                                                    <input type="text" class="form-control" id="nombre_completo_inp" name="exp_cliente" readonly>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Marca</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_marca">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Modelo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_modelo">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Año</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_anio">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Placa</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_placa">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Chasis</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_chasis">
                                                                </div>
                                                            </div>
                                                            <!-- end col --> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Motor</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_motor">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Color</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_color">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Codigo Dollar</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_codigo_dollar">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">N° INTELISIS</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="exp_n_intelisis">
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
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Primer Nombre</label>
                                                                    <input type="text" class="form-control" id="primer_nombre" name="fg_primer_nombre" onkeyup="nombre_completo()">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Segundo Nombre</label>
                                                                    <input type="text" class="form-control" id="segundo_nombre" name="fg_segundo_nombre"  onkeyup="nombre_completo()">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Paterno</label>
                                                                    <input type="text" class="form-control" id="apellido_paterno" name="fg_apellido_paterno"  onkeyup="nombre_completo()">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Materno</label>
                                                                    <input type="text" class="form-control" id="apellido_materno" name="fg_apellido_materno"  onkeyup="nombre_completo()">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido de Casada</label>
                                                                    <input type="text" class="form-control" id="apellido_casada" name="fg_apellido_casada" onkeyup="nombre_completo()">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Pais de Naciemiento</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fg_fecha_nacimiento">
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
                                                                    <label for="basiInput" class="form-label">Fecha Nacimiento</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fg_fecha_nacimiento">
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cedula / N# Pasaporte</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fg_cedula">
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion residencial</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fg_direccion_residencial"></textarea>
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
                                                                            id="iconInput" placeholder="example@gmail.com" name="fg_email">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono Residencial</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fg_telefono_residencia">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono Movil</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fg_telefono_movil">
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
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Profesion</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fo_profesion">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($profesion as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fo_lugar_trabajo"></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion de Trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fo_direccion_trabajo"></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electronico del trabajo </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="fo_correo_trabajo">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono del trabajo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fo_telefono_trabajo">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre del Negocio (Empresario e independientes)</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fo_nombre_negocio">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aviso de operaciones (Empresario e independientes)</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fo_aviso_operaciones">
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Licita con el estado</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fg_pais_residencia_fiscal">
                                                                        <option value="">Seleccione</option>
                                                                        <option value="SI">SI</option>
                                                                        <option value="NO">NO</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">En caso de ser afirmativo, pais o paises con el que licita</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fg_pais_residencia_fiscal">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
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
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="disabledInput" class="form-label">Actividad Principal</label>
                                                                    <select class="form-control" data-choices
                                                                        id="choices-single-default" name="fd_actividad_principal">
                                                                        <option value="">Seleccione</option>
                                                                        <?php foreach ($actividad_principal as $key => $value) { ?>
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
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
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre o razon social</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_razon_social_1">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Actividad</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_actividad_1">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Relacion con cliente</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_relacion_cliente_1">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_telefono_1">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electronico </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="fr_correo_electronico_1">
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
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_razon_social_2">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Actividad</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_actividad_2">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Relacion con cliente</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_relacion_cliente_2">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fr_telefono_2">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="iconInput" class="form-label">Correo Electronico </label>
                                                                    <div class="form-icon">
                                                                        <input type="text" class="form-control form-control-icon"
                                                                            id="iconInput" placeholder="example@gmail.com" name="fr_correo_electronico_2">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
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
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">¿EL AUTO SERÁ TRASPASADO A NOMBRE DEL CLIENTE O DE UN TERCERO?</label>
                                                                    <label for="basiInput" class="form-label">Cliente</label>
                                                                    <input class="form-check-input" type="radio" name="fb_cliete_tercero" id="formradioRight6" value="109BFF">
                                                                    <label for="basiInput" class="form-label">Tercero</label>
                                                                    <input class="form-check-input" type="radio" name="fb_cliete_tercero" id="formradioRight6" value="110BFF">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Relacion con el cliente</label>
                                                                    <label for="basiInput" class="form-label">Familiar</label>
                                                                    <input class="form-check-input" type="radio" name="fb_relacion_familiar_tercero" id="formradioRight6" value="111BFF">
                                                                    <label for="basiInput" class="form-label">Tercero</label>
                                                                    <input class="form-check-input" type="radio" name="fb_relacion_familiar_tercero" id="formradioRight6" value="110BFF">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Detalle relacion</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_relacion_detalle">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Primer Nombre</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_primer_nombre">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Segundo Nombre</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_segundo_nombre">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Paterno</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_apellido_paterno">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Materno</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_apellido_materno">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido de casada</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_apellido_casada">
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha Nacimiento</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fb_fecha_nacimiento">
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->       
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cedula / N# Pasaporte</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_identificacion">
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion residencial</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fb_direccion_residencial"></textarea>
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
                                                                            id="iconInput" placeholder="example@gmail.com" name="fb_email">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->   
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono Residencial</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_telefono_residencia">
                                                                </div>
                                                            </div>
                                                            <!--end col-->     
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono Movil</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fb_telefono_movil">
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col--> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fb_lugar_trabajo"></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->   
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fb_direccion_trabajo"></textarea>
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
                                                        <p>EN ESTE ÚLTIMO CASO, COMPLETE CON LOS DATOS DEL BENEFICIARIO FINAL DE LA TRANSACCIÓN. DE SER PERSONA JURÍDICA,
                                                            UTILIZAR EL FORMULARIO DE DEBIDA DILIGENCIA PERSONA JURÍDICA PCR-CUMP-FORM02 Y LA DECLARACIÓN JURADA DE BENEFICIARIOS
                                                            FINALES DE LAS PERSONAS JURÍDICAS</p>
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">¿EL AUTO SERÁ TRASPASADO A NOMBRE DEL CLIENTE O DE UN TERCERO?</label>
                                                                    <label for="basiInput" class="form-label">Cliente</label>
                                                                    <input class="form-check-input" type="radio" name="ft_cliete_tercero" id="formradioRight6" value="109BFF">
                                                                    <label for="basiInput" class="form-label">Tercero</label>
                                                                    <input class="form-check-input" type="radio" name="ft_cliete_tercero" id="formradioRight6" value="111BFF">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Relacion con el cliente</label>
                                                                    <label for="basiInput" class="form-label">Familiar</label>
                                                                    <input class="form-check-input" type="radio" name="ft_relacion_familiar_tercero" id="formradioRight6" value="111BFF">
                                                                    <label for="basiInput" class="form-label">Tercero</label>
                                                                    <input class="form-check-input" type="radio" name="ft_relacion_familiar_tercero" id="formradioRight6" value="110BFF">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Detalle relacion</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_relacion_detalle">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Primer Nombre</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_primer_nombre">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Segundo Nombre</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_segundo_nombre">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Paterno</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_apellido_paterno">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido Materno</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_apellido_materno">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Apellido de casada</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_apellido_casada">
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha Nacimiento</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="ft_fecha_nacimiento">
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>      
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Cedula / N# Pasaporte</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_identificacion">
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <!--end col-->
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion residencial</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="ft_direccion_residencial"></textarea>
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
                                                                            id="iconInput" placeholder="example@gmail.com" name="ft_email">
                                                                        <i class="ri-mail-unread-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->   
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono Residencial</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_telefono_residencia">
                                                                </div>
                                                            </div>
                                                            <!--end col-->     
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Telefono Movil</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ft_telefono_movil">
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col--> 
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="ft_lugar_trabajo"></textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->   
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="ft_direccion_trabajo"></textarea>
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
                                                                    <input class="form-check-input" type="radio" name="fp_beneficiario" value="109BFF">
                                                                    <label for="basiInput" class="form-label">Tercero</label>
                                                                    <input class="form-check-input" type="radio" name="fp_beneficiario" value="110BFF">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-5 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre Completo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="fp_nombre_completo">
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha Actual</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fp_fecha">
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
                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha Anterior</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fp_fecha_anterior">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-12 col-md-6">
                                                                <div>
                                                                    <label for="exampleFormControlTextarea5" class="form-label">Direccion de trabajo</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                        rows="3" name="fp_comentario"></textarea>
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
                                                                    <input type="text" class="form-control" id="basiInput" name="fdc_nombre_completo">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fdc_fecha">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Firma (igual que en el documento de identidad)</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="fdc_firma">
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
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">copia de cédula o pasaporte (para extranjeros)</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="fdcad_documento_identidad">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Recibo de servicio público dentro de los últimos 3 meses o contrato de arrendamiento</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="fdcad_recibo">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aviso de operaciones o licencia comercial</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="fdcad_aviso_operaciones">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-6 col-md-6">                                                           
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Evidencia de ingresos (de acuerdo con el perfil financiero)</label>
                                                                    <input type="file" class="form-control" id="basiInput" name="fdcad_evidencia_ingresos">
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
                                                            
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del vendedor</label>
                                                                    <input class="form-control" id="basiInput" name="fui_nombre_completo_1">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <input class="form-control" id="basiInput" name="fui_aprobacion_1">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fui_fecha_1">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del encargado de sucursal</label>
                                                                    <input class="form-control" id="basiInput" name="fui_nombre_completo_2">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <input class="form-control" id="basiInput" name="fui_aprobacion_2">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fui_fecha_2">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del analista de cumplimiento</label>
                                                                    <input class="form-control" id="basiInput" name="fui_nombre_completo_3">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <input class="form-control" id="basiInput" name="fui_aprobacion_3">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fui_fecha_3">
                                                                </div>
                                                            </div>

                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del gerente de venta de autos (solo para PEPs)</label>
                                                                    <input class="form-control" id="basiInput" name="fui_nombre_completo_4">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                    <input class="form-control" id="basiInput" name="fui_aprobacion_4">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                    data-date-format="d M, Y" name="fui_fecha_4">
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
                                                        <input type="submit" class="btn btn-primary" value="Guardar" name="registro_cc_cliente">
                                                        <button type="button" class="btn btn-primary btn-sm" id="sa-success" style="display:none;">Click me</button>
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

}