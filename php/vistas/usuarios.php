<?php  include 'cabeza.php'; ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">PANAMA CAR RENTAL, S.A. </h4>
                        <div class="page-title-right">
                            <!--<ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Starter</li>
                            </ol>-->
                            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Tutorial</button>
                            <!-- Full screen modal content debida deligencia -->
                            <div class="modal fade bs-example-modal-xl" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalFullscreenLabel">Video tutorial</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="fs-15"></h6>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>
                    </div>

                    <!-- Modal para agregar-->
                    <div class="modal fade" id="registrarDocumentacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                            
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Usuario</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="inputNombreCaso"> <b> Nombre Completo</b></label>
                                        <input type="text" name="nombre" id="" class="form-control" required autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNombreCaso"> <b> Email</b></label>
                                        <input type="text" name="email" id="" class="form-control" required autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNombreCaso"> <b> Tipo Usuario</b></label>
                                        <select name="tipo_user" id="" class="form-control">
                                            <option value="">Seleccionar</option>
                                            <?php foreach ($tipos as $key => $value) { ?>
                                            <option value="<?php echo $value['tipo']; ?>"><?php echo $value['descripcion']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNombreCaso"> <b> Password</b></label>
                                        <input type="text" name="password" id="" class="form-control" required autocomplete="off">
                                    </div>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="registro_usuario">Registrar</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- modal para editar -->
                    <div class="modal fade" id="edit_contenido" tabindex="-1" role="dialog" aria-labelledby="miVentanaModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="miVentanaModalLabel">Editar Usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="edit_modal_eliminar">

                                </div>
                                    <!-- Agrega el elemento de loader 
                                    <div class="loader"></div>-->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="editar_usuario">Actualizar</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    <!-- modal para Eliminar -->
                    <div class="modal fade" id="eliminar_contenido" tabindex="-1" role="dialog" aria-labelledby="miVentanaModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="miVentanaModalLabel" style="color:red;">Eliminar Usuario</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" id="contenido_modal_eliminar">

                                    </div>
                                        <!-- Agrega el elemento de loader 
                                        <div class="loader"></div>-->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-danger" name="eliminar_usuario">Eliminar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- modal para Eliminar email -->
                    <div class="modal fade" id="eliminar_recordatorio_email" tabindex="-1" role="dialog" aria-labelledby="miVentanaModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="miVentanaModalLabel" style="color:red;">Eliminar Recordatorio Email</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" id="segundo_contenido_eliminar">

                                    </div>
                                        <!-- Agrega el elemento de loader 
                                        <div class="loader"></div>-->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-danger" name="eliminar_recordatorio_email">Eliminar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-xxl-12">
                        <h1 class="my-4">Usuarios </h1>
                        <div class="card">
                            <div class="card-body">
                                <div class="container">
                                    
                                    <button style="margin:5px;" class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#registrarDocumentacion">Registrar Usuario</button>
                                    <br>
                                    <table id="buttons-datatables" class="display table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Email</th>
                                                <th>Tipos de usuario</th>
                                                <th>Status</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($todos_registros_user as $key => $value) { ?>
                                                <tr>
                                                    <td><?php echo htmlspecialchars($value["id"]); ?></td>
                                                    <td><?php echo htmlspecialchars($value["nombre"]); ?></td>
                                                    <td><?php echo htmlspecialchars($value["email"]); ?></td>
                                                    <td><?php echo htmlspecialchars($value["tipo_user"]); ?></td>
                                                    <td><?php if($value["stat"]==1){ echo '<span style="color:green">ON</span>'; }else{ echo '<span style="color:red">OFF</span>'; } ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-icon waves-effect waves-light" onclick="modal_edit(<?php echo $value['id']; ?>, 'edit_user', 'edit_contenido', 'edit_modal_eliminar')"><i class="ri-edit-line"></i></button>
                                                        <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="modal_eliminar(<?php echo $value['id']; ?>, 'user', 'eliminar_contenido', 'contenido_modal_eliminar')"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'pie.php'; ?>