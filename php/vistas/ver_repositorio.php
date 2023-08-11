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
                        <h5 class="mb-3">Repositorio</h5>
                        <div class="card">
                            <div class="card-body">

                                <!-- Botonera -->
                                <div class="modal fade ver_penalidad" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="text-align: center;">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleMocClienteFormulario">Registrar Documento</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="file-container">
                                                        <label for="file1"><i class="ri-file-user-line" style="font-size: 100px;"></i> <br> Identificación</label>
                                                        <input name="iden_path" type="file" id="file1" class="noFile" onchange="cambiar_color_file_repo(this);">
                                                    </div>
                                                    <div class="file-container_lic">
                                                        <label for="file3"><i class="ri-car-line" style="font-size: 100px;"></i> <br> Licencia</label>
                                                        <input name="lic_path" type="file" id="file3" class="noFile" onchange="cambiar_color_file_repo_lic(this)">
                                                    </div> 
                                                    <!--
                                                    <div class="file-container_pass">
                                                        <label for="file2"><i class="ri-passport-line" style="font-size: 100px;"></i> <br> Pasaporte</label>
                                                        <input name="pass_path" type="file" id="file2" class="noFile" onchange="cambiar_color_file_repo_pass(this)">
                                                    </div>
                                                    
                                                    -->
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="javascript:void(0);" id="boton_cancelar" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                                    <a href="#" id="boton_guardar" class="btn btn-primary" name="subir_documento_repo" onclick="cargar_imagen_server('file1', 1)">Guardar</a>
                                                </div>
                                            </form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Repositorio <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".ver_penalidad">Agregar Documentos</a> </h5>
                                            </div>
                                            <div class="card-body">
                                                
                                                <table class="display table table-bordered" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Scam texto</th>
                                                            <th>Archivo</th>
                                                            <!--<th>Licencia</th>
                                                            <th>Pasaporte</th>
                                                            <th>Acciones</th>-->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($todos_registros  as $key => $value) { ?>
                                                        <tr>
                                                            <td><?php echo $value['scan_text']; ?></td>
                                                            <td><a href="<?php echo 'http://ctc.grupopcr.com.pa/vistas/adjuntos_repo/'.$value['lic_path']; ?>" > Documento </a></td>
                                                            <!--<td><?php //echo $value['vehiculo']; ?></td>
                                                            <td><?php //echo $value['fg_fecha_log']; ?></td>
                                                            <td><?php //echo $value['estado']; ?></td>-->
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>    
                                                </table>
                                                <button type="button" class="btn btn-primary">Guardar</button>
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