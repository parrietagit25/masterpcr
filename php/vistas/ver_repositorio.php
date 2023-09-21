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

                                <!-- Modal documentos -->
                                <div class="modal fade agregar_lic" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="text-align: center;">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleMocClienteFormulario">Registrar Documento</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="file-container">
                                                        <label for="file1"><i class="ri-file-user-line" style="font-size: 100px;"></i> <br> Cedula</label>
                                                        <input name="iden_path" type="file" id="file1" class="noFile" onchange="cambiar_color_file_repo(this);">
                                                    </div>
                                                    <div class="file-container_lic">
                                                        <label for="file3"><i class="ri-car-line" style="font-size: 100px;"></i> <br> Licencia</label>
                                                        <input name="lic_path" type="file" id="file3" class="noFile" onchange="cambiar_color_file_repo_lic(this)">
                                                    </div> 
                                                    <div class="file-container_pass">
                                                        <label for="file2"><i class="ri-passport-line" style="font-size: 100px;"></i> <br> Pasaporte</label>
                                                        <input name="pass_path" type="file" id="file2" class="noFile" onchange="cambiar_color_file_repo_pass(this)">
                                                    </div>
                                                    <br>
                                                    <div id="contenido_repo" style="display:none; margin-left: auto; margin-right: auto;">
                                                        <div id="previsualizardiv">
                                                            <img id="previimagen" style="width: 350px; height: auto;">
                                                        </div>
                                                        <div>
                                                            <div class="col-xxl-12 col-md-12">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Numero de Cedula</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ilden_numero">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-12 col-md-12">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre Completo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="ilden_nombre">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-12 col-md-12">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha de Vencimiento</label>
                                                                    <input type="date" class="form-control" id="basiInput" name="ilden_vencimineto">
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="tipo_documento" value="cedula" id="tipo_cedula">
                                                        </div>
                                                    </div>

                                                    <div id="contenido_repo_lic" style="display:none;">
                                                        <div id="previsualizardiv">
                                                            <img id="previimagen" style="width: 350px; height: auto;">
                                                        </div>
                                                        <div>
                                                            <div class="col-xxl-12 col-md-12">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Numero de Licencia</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="lic_numero">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-12 col-md-12">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre Completo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="lic_nombre">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-12 col-md-12">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha de Vencimiento</label>
                                                                    <input type="date" class="form-control" id="basiInput" name="lic_vencimineto">
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="tipo_documento" value="licencia" id="tipo_licencia">
                                                        </div>
                                                    </div>

                                                    <div id="contenido_repo_pass" style="display:none;">
                                                        <div id="previsualizardiv">
                                                            <img id="previimagen" style="width: 350px; height: auto;">
                                                        </div>
                                                        <div>
                                                            <div class="col-xxl-12 col-md-12">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Numero de Pasaporte</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pass_numero">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-12 col-md-12">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Nombre Completo</label>
                                                                    <input type="text" class="form-control" id="basiInput" name="pass_nombre">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-12 col-md-12">
                                                                <div>
                                                                    <label for="basiInput" class="form-label">Fecha de Vencimiento</label>
                                                                    <input type="date" class="form-control" id="basiInput" name="pass_vencimiento">
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="tipo_documento" value="pasaporte" id="tipo_pasaporte">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" id="pie_modal_doc" style="display:none;">
                                                    <a href="javascript:void(0);" id="boton_cancelar" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                                    <button type="submit" class="btn btn-primary" name="subir_documento_repo" <?php /* onclick="cargar_imagen_server('file1', 1)" */ ?> >Guardar</button>
                                                </div> 
                                            </form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <?php /*<div class="modal fade agregar_lic" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="text-align: center;">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleMocClienteFormulario">Registrar Licencia</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="lic_contenido">
                                                    <div class="file-container_lic">
                                                        <label for="file3"><i class="ri-car-line" style="font-size: 100px;"></i> <br> Licencia</label>
                                                        <input name="lic_path" type="file" id="file3" class="noFile" onchange="cambiar_color_file_repo(this)">
                                                    </div> 
                                                    
                                                </div>
                                                <div id="loader_car" style="width: 50px; margin-left: auto; margin-right: auto;">

                                                </div>
                                                <div class="modal-footer">
                                                    <a href="javascript:void(0);" id="boton_cancelar_2" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                                    <a href="#" id="boton_guardar_2" class="btn btn-primary" name="subir_documento_repo" onclick="cargar_imagen_server_lic('file3', 1)">Guardar</a>
                                                </div>
                                            </form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->*/ ?>

                                <div class="modal fade eliminar_doc" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="text-align: center;">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleMocClienteFormulario">Eliminar Documneto</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="repo_descrip">
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="javascript:void(0);" id="boton_cancelar_2" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                                    <button type="submit" class="btn btn-danger" name="eliminar_documento_repo">Eliminar</button>
                                                </div>
                                            </form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal --> 
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Repositorio 
                                                    <!--<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".agregar_ced">Agregar Cedula</a> -->
                                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".agregar_lic">Agregar Documento</a></h5>
                                            </div>
                                            <div class="card-body">
                                                
                                                <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Tipo Doc.</th>
                                                            <th># Doc.</th>
                                                            <th>Nombre</th>
                                                            <th>Fecha de Vencimiento</th>
                                                            <th>Archivo</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                        
                                                            $tipo_doc = "";
                                                            $num_doc = "";
                                                            $nombre = "";
                                                            $fecha_vencimiento = "";
                                                            $imagen = "";
                                                        
                                                            foreach ($todos_registros  as $key => $value) { 
                                                            
                                                                if ($value['tipo_documento'] == 'cedula') {

                                                                    $tipo_doc = $value['tipo_documento'];
                                                                    $num_doc = $value['ilden_numero'];
                                                                    $nombre = $value['ilden_nombre'];
                                                                    $fecha_vencimiento = $value['ilden_vencimineto'];
                                                                    $imagen = $value['iden_path'];
                                                                    
                                                                }elseif ($value['tipo_documento'] == 'licencia') {

                                                                    $tipo_doc = $value['tipo_documento'];
                                                                    $num_doc = $value['lic_numero'];
                                                                    $nombre = $value['lic_nombre'];
                                                                    $fecha_vencimiento = $value['lic_vencimineto'];
                                                                    $imagen = $value['lic_path'];
                                                                    
                                                                }elseif ($value['tipo_documento'] == 'pasaporte') {

                                                                    $tipo_doc = $value['tipo_documento'];
                                                                    $num_doc = $value['pass_numero'];
                                                                    $nombre = $value['pass_nombre'];
                                                                    $fecha_vencimiento = $value['pass_vencimiento'];
                                                                    $imagen = $value['pass_path'];
                                                                    
                                                                }
                                                            
                                                            ?>
                                                        <tr>
                                                            <td><?php  echo $tipo_doc; ?></td>
                                                            <td><?php  echo $num_doc; ?></td>
                                                            <td><?php  echo $nombre; ?></td>
                                                            <td><?php  echo $fecha_vencimiento; ?></td>
                                                            <td><a href="<?php echo 'http://ctc.grupopcr.com.pa/'.$imagen; ?>" target="_blank" > Documento </a></td>
                                                            <td>
                                                                <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target=".eliminar_doc" onclick="eliminar_repo(<?php echo $value['id']; ?>);">Eliminar</a> 
                                                            </td>
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
