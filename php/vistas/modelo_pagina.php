<?php  include 'cabeza.php'; ?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Starter</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Starter</li>
                            </ol>
                        </div>
                    </div>
                    <!-- tabs principal -->
                    <div class="col-xxl-12">
                        <h5 class="mb-3">Pills Justified Tabs</h5>
                        <div class="card">
                            <div class="card-body">
                                <!--<p class="text-muted">Use <code>nav-pills nav-justified</code> class to generate equal-width elements without borders, all horizontal space will be occupied by nav links.</p>-->                                        
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#pill-justified-home-1" role="tab">
                                            GENERALES
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-profile-1" role="tab">
                                            DATOS OCUPACIONALES 
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-messages-1" role="tab">
                                            DECLARACION DE FUNENTE Y ORIGEN DE LOS FONDOS
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-settings-1" role="tab">
                                            REFERENCIAS    
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-settings-1" role="tab">
                                            BENEFICIARIO FINAL    
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-settings-1" role="tab">
                                            TERCEROS AUTORIZADOS
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-settings-1" role="tab">
                                            PERSONAS EXPUESTAS POLITICAMENTE
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-settings-1" role="tab">
                                            DECLARACION JURADA
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-settings-1" role="tab">
                                            ADJUNTAR LOS SIGUINETES DOCUMENTOS E INFORMACION DE SOPORTE
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-settings-1" role="tab">
                                            PARA USO INTERNO DE PANAMA CAR RENTAL, S.A.
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-settings-1" role="tab">
                                            AVISO LEGAR
                                        </a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content text-muted">
                                    <div class="tab-pane active" id="pill-justified-home-1" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header align-items-center d-flex">
                                                        <h4 class="card-title mb-0 flex-grow-1">DATOS GENERALES</h4>
                                                        <!--<div class="flex-shrink-0">
                                                            <div class="form-check form-switch form-switch-right form-switch-md">
                                                                <label for="form-grid-showcode" class="form-label text-muted">Show
                                                                    Code</label>
                                                                <input class="form-check-input code-switcher" type="checkbox"
                                                                    id="form-grid-showcode">
                                                            </div>
                                                        </div>-->
                                                    </div><!-- end card header -->
                                                    <div class="card-body">
                                                        <div class="live-preview">
                                                            <div class="row gy-4">
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <div>
                                                                        <label for="basiInput" class="form-label">Primer Nombre</label>
                                                                        <input type="text" class="form-control" id="basiInput" name="fg_primer_nombre">
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <div>
                                                                        <label for="basiInput" class="form-label">Segundo Nombre</label>
                                                                        <input type="text" class="form-control" id="basiInput" name="fg_segundo_nombre">
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <div>
                                                                        <label for="basiInput" class="form-label">Apellido Paterno</label>
                                                                        <input type="text" class="form-control" id="basiInput" name="fg_apellido_paterno">
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <div>
                                                                        <label for="basiInput" class="form-label">Apellido Materno</label>
                                                                        <input type="text" class="form-control" id="basiInput" name="fg_apellido_materno">
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <div>
                                                                        <label for="basiInput" class="form-label">Apellido de Casada</label>
                                                                        <input type="text" class="form-control" id="basiInput" name="fg_apellido_casada">
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <div>
                                                                        <label for="basiInput" class="form-label">Pais de Naciemiento</label>
                                                                        <select class="form-control" data-choices name="choices-single-default"
                                                                            id="choices-single-default">
                                                                            <option value="">Seleccione</option>
                                                                            <?php foreach ($paises as $key => $value) { ?>
                                                                            <option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombre']; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <div>
                                                                        <label for="disabledInput" class="form-label">Disabled Input</label>
                                                                        <input type="text" class="form-control" id="disabledInput"
                                                                            value="Disabled input" disabled>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <div>
                                                                        <label for="iconInput" class="form-label">Input with Icon</label>
                                                                        <div class="form-icon">
                                                                            <input type="email" class="form-control form-control-icon"
                                                                                id="iconInput" placeholder="example@gmail.com">
                                                                            <i class="ri-mail-unread-line"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <div>
                                                                        <label for="iconrightInput" class="form-label">Input with Icon
                                                                            Right</label>
                                                                        <div class="form-icon right">
                                                                            <input type="email" class="form-control form-control-icon"
                                                                                id="iconrightInput" placeholder="example@gmail.com">
                                                                            <i class="ri-mail-unread-line"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <div>
                                                                        <label for="exampleInputdate" class="form-label">Input Date</label>
                                                                        <input type="date" class="form-control" id="exampleInputdate">
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <div>
                                                                        <label for="exampleInputtime" class="form-label">Input Time</label>
                                                                        <input type="time" class="form-control" id="exampleInputtime">
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <div>
                                                                        <label for="exampleInputpassword" class="form-label">Input
                                                                            Password</label>
                                                                        <input type="password" class="form-control"
                                                                            id="exampleInputpassword" value="44512465">
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <div>
                                                                        <label for="exampleFormControlTextarea5" class="form-label">Example
                                                                            Textarea</label>
                                                                        <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                            rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <div>
                                                                        <label for="formtextInput" class="form-label">Form Text</label>
                                                                        <input type="password" class="form-control" id="formtextInput">
                                                                        <div id="passwordHelpBlock" class="form-text">
                                                                            Must be 8-20 characters long.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <div>
                                                                        <label for="colorPicker" class="form-label">Color Picker</label>
                                                                        <input type="color" class="form-control form-control-color w-100"
                                                                            id="colorPicker" value="#364574">
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <div>
                                                                        <label for="borderInput" class="form-label">Input Border
                                                                            Style</label>
                                                                        <input type="text" class="form-control border-dashed"
                                                                            id="borderInput" placeholder="Enter your name">
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <label for="exampleDataList" class="form-label">Datalist example</label>
                                                                    <input class="form-control" list="datalistOptions" id="exampleDataList"
                                                                        placeholder="Search your country...">
                                                                    <datalist id="datalistOptions">
                                                                        <option value="Switzerland">
                                                                        <option value="New York">
                                                                        <option value="France">
                                                                        <option value="Spain">
                                                                        <option value="Chicago">
                                                                        <option value="Bulgaria">
                                                                        <option value="Hong Kong">
                                                                    </datalist>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <div>
                                                                        <label for="exampleInputrounded" class="form-label">Rounded
                                                                            Input</label>
                                                                        <input type="text" class="form-control rounded-pill"
                                                                            id="exampleInputrounded" placeholder="Enter your name">
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-xxl-3 col-md-6">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control" id="firstnamefloatingInput"
                                                                            placeholder="Enter your firstname">
                                                                        <label for="firstnamefloatingInput">Floating Input</label>
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
                                    <div class="tab-pane" id="pill-justified-profile-1" role="tabpanel">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <i class="ri-checkbox-circle-fill text-success"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                In some designs, you might adjust your tracking to create a certain artistic effect. It can also help you fix fonts that are poorly spaced to begin with.
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <i class="ri-checkbox-circle-fill text-success"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="pill-justified-messages-1" role="tabpanel">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <i class="ri-checkbox-circle-fill text-success"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                Each design is a new, unique piece of art birthed into this world, and while you have the opportunity to be creative and make your own style choices.
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <i class="ri-checkbox-circle-fill text-success"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                For that very reason, I went on a quest and spoke to many different professional graphic designers and asked them what graphic design tips they live.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="pill-justified-settings-1" role="tabpanel">
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <i class="ri-checkbox-circle-fill text-success"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                For that very reason, I went on a quest and spoke to many different professional graphic designers and asked them what graphic design tips they live.
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <i class="ri-checkbox-circle-fill text-success"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                After gathering lots of different opinions and graphic design basics, I came up with a list of 30 graphic design tips that you can start implementing.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!--end col-->
                </div>
            </div>
            <!-- end page title -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <?php include 'layouts/footer.php'; ?>
</div>
<!-- end main content-->
<?php include 'pie.php'; ?>