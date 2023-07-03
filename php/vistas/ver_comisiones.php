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
                        <h5 class="mb-3">Comisiones Retail</h5>
                        <div class="card">
                            <div class="card-body">

                                <!-- Botonera -->
                                <div class="modal fade ver_penalidad" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="text-align: center;">
                                            <form action="" method="post">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleMocClienteFormulario">Ver Penalidades</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <table class="display table table-bordered" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Agente</th>
                                                            <th>Monto</th>
                                                            <th>Notas</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php //foreach ($todos_registros_cc  as $key => $value) { ?>
                                                        <tr>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td><textarea class="form-control"></textarea></td>
                                                        </tr>
                                                        <?php //} ?>
                                                    </tbody>    
                                                </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                                    <a href="javascript:void(0);" class="btn btn-primary">Actualizar</a>
                                                </div>
                                            </form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Comisiones Retail <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".ver_penalidad">Ver Penalidades</a> </h5>
                                            </div>
                                            <select name="" id="" class="form-control">
                                                    <option value="">Seleccionar Sucursal</option>
                                                    <option value="">Tumba Muerto</option>
                                                    <option value="">Chorrera</option>
                                                    <option value="">Chiriqui</option>
                                                </select>
                                            <div class="card-body">
                                                
                                                <table class="display table table-bordered" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Sucursal</th>
                                                            <th>TDA</th>
                                                            <th>Incentive</th>
                                                            <th>RPD</th>
                                                            <th>Trigger</th>
                                                            <th>Meta</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php //foreach ($todos_registros_cc  as $key => $value) { ?>
                                                        <tr>
                                                            <td><?php //echo $value['fg_cedula']; ?></td>
                                                            <td><?php //echo $value['exp_cliente']; ?></td>
                                                            <td><?php //echo $value['vehiculo']; ?></td>
                                                            <td><?php //echo $value['fg_fecha_log']; ?></td>
                                                            <td><?php //echo $value['estado']; ?></td>
                                                            <td>
                                                                
                                                            </td>
                                                        </tr>
                                                        <?php //} ?>
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