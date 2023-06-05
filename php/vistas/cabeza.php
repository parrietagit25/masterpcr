<?php include 'vistas/layouts/session.php'; ?>
<?php include 'vistas/layouts/head-main.php'; ?>
    <head>
        <title>Master PCR</title>
        <?php include 'vistas/layouts/title-meta.php'; ?>

        <!--datatable css-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
        <!--datatable responsive css-->
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
        <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        
        <?php include 'vistas/layouts/head-css.php'; ?>
    </head>
    <?php include 'vistas/layouts/body.php'; ?>
        <!-- Begin page -->
        <div id="layout-wrapper">
            <?php include 'vistas/layouts/menu.php'; ?>
            

            <?php /*
            <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">CAR</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Principal</a>
                        </li>
                        <!--<li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                        </li>-->
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Formularios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cc_cliente.php?view=requisitos_debida_diligencia">Requisitos debida diligencia</a></li>
                            <li><a class="dropdown-item" href="cc_cliente.php?view=cc_cliente_natural">Cliente Persona Natural</a></li>
                            <li><a class="dropdown-item" href="cc_cliente.php?view=ver_fomularios">Ver Clientes</a></li>
                            <!--<li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>-->
                        </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="logout.php">Salir</a>
                        </li>
                    </ul>
                    <!--<form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>-->
                    </div>
                </div>
            </nav> */ ?>