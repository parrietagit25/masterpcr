<?php 
session_start();

require_once("../../controladores/RepoController.php");
$cCclienteController = new CcclienteController();
$paises = $cCclienteController->obtener_pais();

if (isset($_GET['registrar_licencia'])) { ?>

<form method="POST" action="" enctype="multipart/form-data">
    <div class="col-xxl-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    
                </div><!--end row-->
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!--end col-->
</form>

<?php 

}