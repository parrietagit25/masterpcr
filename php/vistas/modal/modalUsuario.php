<?php 
$modalDocu =1;
$id = $_GET['id']; 
require_once("../../controladores/UsuarioController.php");
$usuariosController = new UsuarioController(); 

if (isset($_GET['eliminar_usuario'])) { 

    $obtener_usuario = $usuariosController->obtenerUsuario($id);
    foreach ($obtener_usuario as $key => $value) { ?>
    <div class="form-group">
        <label for="inputNombreCaso"> <b> Nombre del usuario </b></label>
        <p><?php echo $value["nombre"]; ?></p>
        <label for="inputNumeroPrograma" style="color:red;"><b>Esta seguro que desea elimina este usuario ?</b></label>
    </div>
    <input type="hidden" name="id_eliminar" value="<?php echo $id; ?>">
   <?php } ?>

<?php }elseif(isset($_GET['edit_usuario'])){ 

    $obtener_usuario = $usuariosController->obtenerUsuario($id);
    $tipos = $usuariosController->tiposUsuarios();
    foreach ($obtener_usuario as $key => $value) { ?>

        <div class="form-group">
            <label for="inputNombreCaso"> <b> Nombre Completo</b></label>
            <input type="text" name="nombre" id="" class="form-control" required autocomplete="off" value="<?php echo $value["nombre"]; ?>">
        </div>
        <div class="form-group">
            <label for="inputNombreCaso"> <b> Email</b></label>
            <input type="text" name="email" id="" class="form-control" required autocomplete="off" value="<?php echo $value["email"]; ?>">
        </div>
        <div class="form-group">
            <label for="inputNombreCaso"> <b> Tipo Usuario</b></label>
            <select name="tipo_user" id="" class="form-control">
                <option value="">Seleccionar</option>
                <?php foreach ($tipos as $key => $value2) { ?>
                <option value="<?php echo $value2['tipo']; ?>" <?php if($value2['tipo'] == $value["tipo_user"]){ echo 'selected';} ?>><?php echo $value2['descripcion']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="inputNombreCaso"> <b> Password</b></label>
            <input type="text" name="password" id="" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="inputNombreCaso"> <b> Estatus</b></label>
            <select name="stat" id="" class="form-control">
                <option value="">Seleccionar</option>
                <option value="1" <?php if($value['stat'] == 1){ echo 'selected';} ?>>ON</option>
                <option value="2" <?php if($value['stat'] == 2){ echo 'selected';} ?>>OFF</option>
            </select>
        </div>
        <br>
        <input type="hidden" name="id_usuario" value="<?php echo $id; ?>">
        <?php } 

    } ?>