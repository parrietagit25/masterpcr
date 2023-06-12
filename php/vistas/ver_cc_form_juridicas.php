<?php include 'cabeza.php'; ?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">PANAMA CAR RENTAL, S.A.</h4>
                        <div class="page-title-right">
                        </div>
                    </div>
                    <!-- tabs principal -->
                    <div class="col-xxl-12">
                        <h5 class="mb-3">VER LOS CLIENTES REGISTRADOS - POLÍTICA CONOZCA A SU CLIENTE</h5>
                        <div class="card">
                            <div class="card-body">

                                <!-- Registrar Adjuntos -->

                                <div class="modal fade" id="registrar_cClienteAdjuntos" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <h6 class="fs-15">
                                                        Registrar Adjuntos
                                                    </h6>
                                                    <div id="registar_ccliente_adjuntos">

                                                    </div>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                                    <button class="btn btn-primary" type="submit" name="registrar_adjunto">Registrar Adjuntos</button>
                                                </div>
                                            </form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Adjuntos -->

                                <div class="modal fade" id="cClienteAdjuntos" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6 class="fs-15">
                                                    Adjuntos Recaudados
                                                </h6>
                                                <div id="contenido_modal_ccliente_adjuntos">

                                                </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- PROPIETARIOS BENEFICIARIOS FINALES- PERSONA JURÍDICA --> 

                                <div class="modal fade propietarios_beneficiarios_juridicos" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="text-align: center;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6 class="fs-15">
                                                PROPIETARIOS DE LOS BENEFICIARIOS FINALES- PERSONA JURÍDICA.
                                                </h6>
                                                <div id="contenido_modal_documentos">

                                                    <div class="row gy-4">
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Nombre completo.</label>
                                                                <input type="text" class="form-control" id="pjpbj_temp_nombre_completo" name="">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="disabledInput" class="form-label">Sexo</label>
                                                                <select class="form-control" data-choices
                                                                    id="pjpbj_temp_genero" name="">
                                                                    <option value="">Seleccione</option>
                                                                    <?php foreach ($genero as $key => $value) { ?>
                                                                    <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Cedula - Pasaporte</label>
                                                                <input type="text" class="form-control" id="pjpbj_temp_cedula_pasaporte" name="">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Nacionalidad</label>
                                                                <select class="form-control" data-choices
                                                                    id="pjpbj_temp_nacionalidad" name="">
                                                                    <option value="">Seleccione</option>
                                                                    <?php foreach ($paises as $key => $value) { ?>
                                                                    <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">País de nacimiento</label>
                                                                <select class="form-control" data-choices
                                                                    id="pjpbj_temp_pais_nacimiento" name="">
                                                                    <option value="">Seleccione</option>
                                                                    <?php foreach ($paises as $key => $value) { ?>
                                                                    <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Fecha de nacimineto</label>
                                                                <input type="text" class="form-control" data-provider="flatpickr"
                                                                data-date-format="d M, Y" name="" id="pjpbj_temp_fecha_nacimiento">
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">País de residencia</label>
                                                                <select class="form-control" data-choices
                                                                    id="pjpbj_temp_pais_residencia" name="">
                                                                    <option value="">Seleccione</option>
                                                                    <?php foreach ($paises as $key => $value) { ?>
                                                                    <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">País de residencia fiscal</label>
                                                                <select class="form-control" data-choices
                                                                    id="pjpbj_temp_pais_residencia_fiscal" name="">
                                                                    <option value="">Seleccione</option>
                                                                    <?php foreach ($paises as $key => $value) { ?>
                                                                    <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="disabledInput" class="form-label ">Profesión u oficio</label>
                                                                <select class="form-control" data-choices
                                                                    id="pjpbj_temp_profesion_oficio" name="">
                                                                    <option value="">Seleccione</option>
                                                                    <?php foreach ($profesion as $key => $value) { ?>
                                                                    <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                                <textarea class="form-control" id="pjpbj_temp_lugar_trabajo"
                                                                    rows="3" name=""></textarea>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Teléfono</label>
                                                                <input type="text" class="form-control" id="pjpbj_temp_telefono" name="">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="iconInput" class="form-label">Correo Electrónico </label>
                                                                <div class="form-icon">
                                                                    <input type="text" class="form-control form-control-icon"
                                                                        id="pjpbj_temp_correo" placeholder="example@gmail.com" name="">
                                                                    <i class="ri-mail-unread-line"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="exampleFormControlTextarea5" class="form-label">Domicilio Personal</label>
                                                                <textarea class="form-control" id="pjpbj_temp_domicilio_personal"
                                                                    rows="3" name=""></textarea>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="exampleFormControlTextarea5" class="form-label">Domicilio Laboral</label>
                                                                <textarea class="form-control" id="pjpbj_temp_domicilio_laboral"
                                                                    rows="3" name=""></textarea>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Entidad juridica en la que participa</label>
                                                                <input type="text" class="form-control" id="pjpbj_temp_entidad_participa" name="fr_actividad_2">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Porcentaje de participación</label>
                                                                <input type="text" class="form-control" id="pjpbj_temp_porcentaje_participacion" name="fr_actividad_2">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <input type="hidden" id="id_general_gprpj" value="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                                <a href="#" class="btn btn-success" onclick="guardar_prbf()">Guardar</a>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Modal GENERALES DE LOS BENEFICIARIOS FINALES- PERSONA JURÍDICA --> 

                                <div class="modal fade generales_beneficiarios_juridicos" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="text-align: center;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6 class="fs-15">
                                                    GENERALES DE LOS BENEFICIARIOS FINALES- PERSONA JURÍDICA. 
                                                </h6>
                                                <div id="contenido_modal_documentos"> 

                                                    <div class="row gy-4">
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">NOMBRE DEL ACCIONISTA (JURÍDICO)</label>
                                                                <input type="text" class="form-control" id="gbfpj_temp_nombre_completo_accionista" name="">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">PAÍS DE CONSTITUCIÓN ( ACCIONISTA JURÍDICO)</label>
                                                                <select class="form-control" data-choices
                                                                    id="gbfpj_temp_pais_constitucion" name="">
                                                                    <option value="">Seleccione</option>
                                                                    <?php foreach ($paises as $key => $value) { ?>
                                                                    <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">FECHA  DE CONSTITUCIÓN</label>
                                                                <input type="text" class="form-control" data-provider="flatpickr"
                                                                data-date-format="d M, Y" name="" id="gbfpj_temp_fecha_constitucion">
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="disabledInput" class="form-label">DIRECCIÓN <br> (ACCIONISTA JURÍDICO)</label>
                                                                <select class="form-control" data-choices
                                                                    id="gbfpj_temp_direccion" name="">
                                                                    <option value="">Seleccione</option>
                                                                    <?php foreach ($tipo_persona as $key => $value) { ?>
                                                                    <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">RUC</label>
                                                                <input type="text" class="form-control" id="gbfpj_temp_ruc" name="">
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">SECTOR ECONÓMICO</label>
                                                                <select class="form-control" data-choices
                                                                    id="gbfpj_temp_sector_economico" name="">
                                                                    <option value="">Seleccione</option>
                                                                    <?php foreach ($sector_economico as $key => $value) { ?>
                                                                    <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">TELÉFONO</label>
                                                                <input type="text" class="form-control" id="gbfpj_temp_telefono" name="">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Porcentaje de la participacion</label>
                                                                <input type="text" class="form-control" id="gbfpj_temp_porcentaje_participacion" name="">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <input type="hidden" id="id_general_gbfpj" value="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                                <a href="#" class="btn btn-success" onclick="guardar_bf_persona_juridica()">Guardar</a>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal --> 

                                <!-- Modal Generales Beneficiarios finales -->

                                <div class="modal fade generales_beneficiarios" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="text-align: center;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6 class="fs-15">
                                                    Generales Beneficiarios Finales. 
                                                </h6>
                                                <div id="contenido_modal_documentos">

                                                    <div class="row gy-4">
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Nombre completo.</label>
                                                                <input type="text" class="form-control" id="gbf_temp_nombre_completo" name="">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="disabledInput" class="form-label">Sexo</label>
                                                                <select class="form-control" data-choices
                                                                    id="gbf_temp_genero" name="">
                                                                    <option value="">Seleccione</option>
                                                                    <?php foreach ($genero as $key => $value) { ?>
                                                                    <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Cedula - Pasaporte</label>
                                                                <input type="text" class="form-control" id="gbf_temp_identificacion" name="">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Nacionalidad</label>
                                                                <select class="form-control" data-choices
                                                                    id="gbf_temp_nacionalidad" name="">
                                                                    <option value="">Seleccione</option>
                                                                    <?php foreach ($paises as $key => $value) { ?>
                                                                    <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">País de nacimiento</label>
                                                                <select class="form-control" data-choices
                                                                    id="gbf_temp_pais_nacimiento" name="">
                                                                    <option value="">Seleccione</option>
                                                                    <?php foreach ($paises as $key => $value) { ?>
                                                                    <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Fecha de nacimineto</label>
                                                                <input type="text" class="form-control" data-provider="flatpickr"
                                                                data-date-format="d M, Y" id="gbf_temp_fecha_nacimiento">
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">País de residencia</label>
                                                                <select class="form-control" data-choices
                                                                    id="gbf_temp_pais_residencia" name="">
                                                                    <option value="">Seleccione</option>
                                                                    <?php foreach ($paises as $key => $value) { ?>
                                                                    <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">País de residencia fiscal</label>
                                                                <select class="form-control" data-choices
                                                                    id="gbf_temp_pais_residencia_fiscal" name="">
                                                                    <option value="">Seleccione</option>
                                                                    <?php foreach ($paises as $key => $value) { ?>
                                                                    <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="disabledInput" class="form-label">Profesión u oficio</label>
                                                                <select class="form-control" data-choices
                                                                    id="gbf_temp_profesion" name="">
                                                                    <option value="">Seleccione</option>
                                                                    <?php foreach ($profesion as $key => $value) { ?>
                                                                    <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                                <textarea class="form-control" id="gbf_temp_lugar_trabajo"
                                                                    rows="3" name=""></textarea>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Teléfono</label>
                                                                <input type="text" class="form-control" id="gbf_temp_telefono" name="">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="iconInput" class="form-label">Correo Electrónico </label>
                                                                <div class="form-icon">
                                                                    <input type="text" class="form-control form-control-icon"
                                                                        id="gbf_temp_correo_electronico" placeholder="example@gmail.com" name="">
                                                                    <i class="ri-mail-unread-line"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="exampleFormControlTextarea5" class="form-label">Domicilio Personal</label>
                                                                <textarea class="form-control" id="gbf_temp_domicilio_personal"
                                                                    rows="3" name=""></textarea>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Porcentaje de participación</label>
                                                                <input type="text" class="form-control" id="gbf_temp_participacion" name="">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <input type="hidden" id="id_general_bfn" value="">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                                <a href="#" class="btn btn-success" onclick="guardar_generaless_bf()">Guardar</a>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- MODAL APODERADOS -->

                                <div class="modal fade apoderados" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="text-align: center;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6 class="fs-15">
                                                    APODERADOS. 
                                                </h6>
                                                <div id="contenido_modal_documentos">

                                                    <div class="row gy-4">
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Nombre completo.</label>
                                                                <input type="text" class="form-control" id="pja_nombre_completo" name="">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Cargo</label>
                                                                <input type="text" class="form-control" id="pja_cargo" name="">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                                <select class="form-control" data-choices
                                                                    id="pja_nacionalidad" name="">
                                                                    <option value="">Seleccione</option>
                                                                    <?php foreach ($paises as $key => $value) { ?>
                                                                    <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">I.D.</label>
                                                                <input type="text" class="form-control" id="pja_id" name="">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="iconInput" class="form-label">Correo Electrónico </label>
                                                                <div class="form-icon">
                                                                    <input type="text" class="form-control form-control-icon"
                                                                        id="pja_correo" placeholder="example@gmail.com" name="">
                                                                    <i class="ri-mail-unread-line"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Teléfono</label>
                                                                <input type="text" class="form-control" id="pja_telefono" name="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Dirección</label>
                                                                <input type="text" class="form-control" id="pja_direccion" name="">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <input type="hidden" id="a_id_general" value="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                                <a href="#" class="btn btn-success" onclick="guardar_apoderados()">Guardar</a>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal --> 

                                <!-- MODAL DE LA JUNTA DIRECTIVA -->

                                <div class="modal fade junta_directiva" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="text-align: center;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6 class="fs-15">
                                                    JUNTA DIRECTIVA Y DIGNATARIOS. 
                                                </h6>
                                                <div id="contenido_modal_documentos">

                                                    <div class="row gy-4">
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Nombre completo.</label>
                                                                <input type="text" class="form-control" id="jd_temp_nombre_completo" name="">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Cargo</label>
                                                                <input type="text" class="form-control" id="jd_temp_cargo" name="">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                                <select class="form-control" data-choices
                                                                    id="jd_temp_nacionalidad" class="" name="">
                                                                    <option value="">Seleccione</option>
                                                                    <?php foreach ($paises as $key => $value) { ?>
                                                                    <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">I.D.</label>
                                                                <input type="text" class="form-control" id="jd_temp_id" name="">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="iconInput" class="form-label">Correo Electrónico </label>
                                                                <div class="form-icon">
                                                                    <input type="text" class="form-control form-control-icon"
                                                                        id="jd_temp_correo" placeholder="example@gmail.com" name="">
                                                                    <i class="ri-mail-unread-line"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <!--end col-->
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Teléfono</label>
                                                                <input type="text" class="form-control" id="jd_temp_telefono" name="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Dirección</label>
                                                                <input type="text" class="form-control" id="jd_temp_direccion" name="">
                                                            </div>
                                                        </div>
                                                        <input type="hidden" id="jd_temp_id_general" value="">
                                                        <!--end col-->
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                                <a href="#" class="btn btn-success" onclick="guardar_jdd()">Guardar</a>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                 <!-- Modal Eliminar JUNTA DIRECTIVA Y DIGNATARIOS. -->

                                <div class="modal fade junta_directiva_eliminar" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6 class="fs-15" style="color:red;">
                                                    Eliminar el registro de la junta directiva y dignatarios ?.
                                                </h6>
                                                <h6 style="color:red;">Esta seguro que desea eliminarlo ?</h6>
                                                <div id="contenido_modal_jdd_eliminar">

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                
                                <!-- Modal Editar el contenido -->
                                <div class="modal fade cClienteFormulario" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6 class="fs-15">
                                                    Editar formulario de conosca a su cliente.
                                                </h6>
                                                <div id="contenido_modal_ccliente">

                                                </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Modal Eliminar -->

                                <div class="modal fade cClienteFormulario_eliminar" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" style="width:90%;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6 class="fs-15" style="color:red;">
                                                    Eliminar formulario de conosca a su cliente juridiico?.
                                                </h6>
                                                <h6 style="color:red;">Esta seguro que desea eliminarlo ?</h6>
                                                <div id="contenido_modal_ccliente_eliminar">

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Modal Portada -->

                                <div class="modal fade portada_contenido" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content" style="text-align: center;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6 class="fs-15">
                                                    Portada Filen Ventas.
                                                </h6>
                                                <div id="contenido_modal_portada">

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <div class="modal fade documentos_contenido" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="text-align: center;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6 class="fs-15">
                                                    Documentos 
                                                </h6>
                                                <div id="contenido_modal_documentos_pdf">

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Clientes Registrados</h5>
                                            </div>
                                            <div class="card-body">
                                                <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Rut</th>
                                                            <th>Nombre completo</th>
                                                            <th>Vehiculo</th>
                                                            <th>Fecha de registro</th>
                                                            <th>Status</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($todos_registros_cc_pj  as $key => $value) { ?>
                                                        <tr>
                                                            <td><?php echo $value['pjgn_ruc_dv']; ?></td>
                                                            <td><?php echo $value['pjexp_cliente']; ?></td>
                                                            <td><?php echo $value['vehiculo']; ?></td>
                                                            <td><?php echo $value['fecha_log']; ?></td>
                                                            <td><?php echo $value['estado']; ?></td>
                                                            <td>
                                                                <button type="button" class="btn btn-secondary btn-icon waves-effect waves-light" onclick="id_modal_edit_rec_pj(<?php echo $value['id']; ?>)"><i class="ri-edit-line"></i></button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light" onclick="modal_portada_pj_id(<?php echo $value['id']; ?>)"><i class="ri-file-2-fill"></i></button>
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light" onclick="modal_contrato_id_pj(<?php echo $value['id']; ?>)"><i class=" ri-file-copy-2-line"></i></button>
                                                                <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" onclick="modal_ver_pj(<?php echo $value['id']; ?>, 'ver_modal', 'cClienteAdjuntos', 'contenido_modal_ccliente_adjuntos')"><i class=" ri-attachment-2"></i></button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="id_modal_eliminar_rec_pj(<?php echo $value['id']; ?>)"><i class="ri-delete-bin-5-line"></i></button>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>    
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-sm" id="sa-close" style="display:none;"></button>
                                    <button type="button" class="btn btn-primary btn-sm" id="sa-error" style="display:none;"></button>
                                </div><!--end row-->
                            
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!--end col-->
        </div>
    </div><!-- end page title -->
</div>
<!-- End Page-content -->
</div><!-- cierra la franja de abajo  -->
<?php include 'layouts/footer.php'; ?>
<?php include 'pie.php'; ?>