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

                                <!-- Modal Editar -->

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
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6 class="fs-15" style="color:red;">
                                                    Eliminar formulario de conosca a su cliente?.
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
                                    <div class="modal-dialog modal-lg">
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

                                <!-- Documentos -->
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
                                                <div id="contenido_modal_documentos">

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
                                                            <th>Codigo Dollar</th>
                                                            <th>Nombre completo</th>
                                                            <th>Vehiculo</th>
                                                            <th>Fecha de registro</th>
                                                            <th>Status</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($todos_registros_cc  as $key => $value) { ?>
                                                        <tr>
                                                            <td><?php echo $value['exp_codigo_dollar']; ?></td>
                                                            <td><?php echo $value['exp_cliente']; ?></td>
                                                            <td><?php echo $value['vehiculo']; ?></td>
                                                            <td><?php echo $value['fg_fecha_log']; ?></td>
                                                            <td><?php echo $value['estado']; ?></td>
                                                            <td>
                                                                <button type="button" class="btn btn-secondary btn-icon waves-effect waves-light" onclick="id_modal_edit_rec(<?php echo $value['id']; ?>)"><i class="ri-edit-line"></i></button>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light" onclick="modal_portada_id(<?php echo $value['id']; ?>)"><i class="ri-file-2-fill"></i></button>
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light" onclick="modal_contrato_id(<?php echo $value['id']; ?>)"><i class=" ri-file-copy-2-line"></i></button>
                                                                <button type="button" class="btn btn-warning btn-icon waves-effect waves-light"onclick="modal_ver(<?php echo $value['id']; ?>, 'ver_modal', 'cClienteAdjuntos', 'contenido_modal_ccliente_adjuntos')"><i class=" ri-attachment-2"></i></button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="id_modal_eliminar_rec(<?php echo $value['id']; ?>)"><i class="ri-delete-bin-5-line"></i></button>
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