<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.php" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logonf.png" alt="" height="42">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logonf.png" alt="" height="27">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.php" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logonf.png" alt="" height="42">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logonf.png" alt="" height="27">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span><?=$lang['t-menu']?></span></li>
                <?php if ($_SESSION["usuario"][0]['tipo_user'] == 'admin' || $_SESSION["usuario"][0]['tipo_user'] == 'gerencia') { ?>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#mantenimientoForms" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="mantenimientoForms">
                        <i class="ri-tools-line"></i> <span>Mantenimiento</span>
                    </a>
                    <div class="collapse menu-dropdown" id="mantenimientoForms">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="usuarios.php?view=ver_usuarios" class="nav-link">Usuarios</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <?php } ?>
                <?php // se filtra los usuarios que solo pueden ver esta seccion, analista y vendedor, los analistas solo pueden ver y aprobar las cc que el vendedor registre ?>
                <?php if ($_SESSION["usuario"][0]['tipo_user'] == 'admin' || $_SESSION["usuario"][0]['tipo_user'] == 'analista' || $_SESSION["usuario"][0]['tipo_user'] == 'vendedor' || $_SESSION["usuario"][0]['tipo_user'] == 'gerencia' || $_SESSION["usuario"][0]['tipo_user'] == 'supervisor') { ?>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-file-list-3-line"></i> <span><?=$lang['t-forms']?></span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarForms">
                        <ul class="nav nav-sm flex-column">
                            <?php if ($_SESSION["usuario"][0]['tipo_user'] == 'admin' || $_SESSION["usuario"][0]['tipo_user'] == 'vendedor' || $_SESSION["usuario"][0]['tipo_user'] == 'gerencia') { ?>
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">CC. Persona Natural</a>
                            </li>
                            <?php } ?>
                            <li class="nav-item">
                                <a href="index.php?view=ver_clientes" class="nav-link">Ver Persona Natural</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?view=ver_clientes_pn_historico" class="nav-link">Historial Persona Natural</a>
                            </li>
                            <?php if ($_SESSION["usuario"][0]['tipo_user'] == 'admin' || $_SESSION["usuario"][0]['tipo_user'] == 'vendedor' || $_SESSION["usuario"][0]['tipo_user'] == 'gerencia') { ?>
                            <li class="nav-item">
                                <a href="cc_formulario.php" class="nav-link">CC. Persona Juridica</a>
                            </li>
                            <?php } ?>
                            <li class="nav-item">
                                <a href="cc_formulario.php?view=ver_cc_persona_juridicas" class="nav-link">Ver Persona Juridica</a>
                            </li>
                            <li class="nav-item">
                                <a href="cc_formulario.php?view=ver_clientes_pj_historico" class="nav-link">Historial Persona Juridica</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <?php } ?>
                <?php if ($_SESSION["usuario"][0]['tipo_user'] == 'admin'){ ?>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#mantenimientoRepo" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="mantenimientoRepo">
                        <i class="ri-camera-fill"></i> <span>Repositorio</span>
                    </a>
                    <div class="collapse menu-dropdown" id="mantenimientoRepo">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="repo.php?view=ver_repo" class="nav-link">Repositorios </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#mantenimientoComisiones" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="mantenimientoComisiones">
                        <i class="ri-exchange-dollar-line"></i> <span>Comisiones Retail</span>
                    </a>
                    <div class="collapse menu-dropdown" id="mantenimientoComisiones">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="retail.php?view=ver_comisiones" class="nav-link">Comisiones </a>
                            </li>
                            <li class="nav-item">
                                <a href="retail.php?view=ver_comisiones" class="nav-link">Ver Historico </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#mantenimientoReservas" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="mantenimientoReservas">
                        <i class="ri-calendar-check-fill"></i> <span>Reservas</span>
                    </a>
                    <div class="collapse menu-dropdown" id="mantenimientoReservas">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="retail.php?view=ver_Reservas" class="nav-link">Reservas </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <?php } ?>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>