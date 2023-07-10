<?php
require_once("Conexion.php");

class ModelGlobal extends Conexion {
  private $conn;

  public function __construct() {
    $this->conn = $this->conectar();
  }

  public function obtenerUsuarios() {

    $result = $this->conn->query("SELECT * FROM usuarios");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  
  }

  public function obtenerTodos($tabla) {

    $result = $this->conn->query("SELECT * FROM $tabla WHERE stat = 1");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;

  }

  public function obtener_codigo($tabla, $codigos){
    $result = $this->conn->query("SELECT * FROM $tabla WHERE codigo $codigos");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }

  public function agregar($tabla, $datos) {
    
    $columnas = implode(", ", array_keys($datos));
    $params = "'" . implode("', '", array_values($datos)) . "'";
    $sql = "INSERT INTO $tabla ($columnas) VALUES ($params)";
    $insert = $this->conn->query($sql);

    //$stmt = $this->conn->query(" SELECT TOP 1 id FROM $tabla ORDER BY id DESC");
    $stmt = $this->conn->query(" SELECT max(id) as id FROM $tabla");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $key => $value) {
      $ultimoIdInsertado = $value['id'];
    }
    return $ultimoIdInsertado;
  }

  public function sub_agregar($tabla, $datos) {
    $columnas = implode(", ", array_keys($datos));
    $params = "'" . implode("', '", array_values($datos)) . "'";
    $sql = "INSERT INTO $tabla ($columnas) VALUES ($params)";
    $insert = $this->conn->query($sql);

  }

  public function actualizar($tabla, $where, $datos) {
    /* para sql server */
    $set = "";
    foreach ($datos as $columna => $valor) {
        $set .= "$columna = '$valor', ";
    }
    $set = rtrim($set, ", ");
    $sql = "UPDATE $tabla SET $set WHERE $where";
    $insert = $this->conn->query($sql);
  }

  function get_param_type($value) {
    if (is_integer($value)) {
        return "i";
    } elseif (is_double($value)) {
        return "d";
    } elseif (is_string($value)) {
        return "s";
    } else {
        return "b";
    }
  }

  public function actualizar_mysql($tabla, $id, $datos) {
    /* para mysql */
    $set_values = "";
    $param_types = "";
    foreach ($datos as $column => $value) {
        $set_values .= "$column = ?, ";
        $param_types .= $this->get_param_type($value);
    }
    $set_values = rtrim($set_values, ", ");
    $sql = "UPDATE $tabla SET $set_values WHERE id = ?";
    $stmt = $this->conn->prepare($sql);
    
    $param_values = array_values($datos);
    $param_values[] = $id;
    $param_types .= "i"; // Assuming id is an integer

    $stmt->bind_param($param_types, ...$param_values);

    $resultado = $stmt->execute();
    return $resultado;

  }

  public function obtenerRegistroClientes() {

    $where = "";

    if ($_SESSION['usuario'][0]['tipo_user'] == "vendedor") {
      
      $where = " and ge.fg_id_user = '".$_SESSION['usuario'][0]['id']."'";
    
    }

    $result = $this->conn->query("SELECT 
                                  ge.id, 
                                  ge.fg_cedula, 
                                  ex.exp_codigo_dollar, 
                                  ex.exp_cliente, 
                                  (ex.exp_marca  + ' | ' + ex.exp_modelo + ' | ' + ex.exp_color + ' | ' + ex.exp_placa) as vehiculo, 
                                  ge.fg_fecha_log, 
                                  CASE
                                  WHEN ge.fg_stat = 1 THEN 'Registrado'
                                  WHEN ge.fg_stat = 2 THEN 'Esperando Revision de supervisor'
                                  WHEN ge.fg_stat = 5 THEN 'Esperando Revision de Analista'
                                  WHEN ge.fg_stat = 3 THEN 'Revisar de nuevo'
                                  WHEN ge.fg_stat = 4 THEN 'Aprobado'
                                  ELSE 'Bajo'
                                  END AS estado
                                  FROM
                                  cc_expediente ex INNER JOIN cc_generales ge on ge.id = ex.id_general
                                  WHERE 
                                  ge.fg_stat not in(4)
                                  $where 
                                  ");

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;

  }

  public function obtenerRegistroClientesHistorico() {

    $result = $this->conn->query("SELECT 
                                  ge.id, 
                                  ge.fg_cedula, 
                                  ex.exp_codigo_dollar, 
                                  ex.exp_cliente, 
                                  (ex.exp_marca  + ' | ' + ex.exp_modelo + ' | ' + ex.exp_color + ' | ' + ex.exp_placa) as vehiculo, 
                                  ge.fg_fecha_log, 
                                  CASE
                                  WHEN ge.fg_stat = 1 THEN 'Registrado'
                                  WHEN ge.fg_stat = 2 THEN 'Esperando Revision de supervisor'
                                  WHEN ge.fg_stat = 5 THEN 'Esperando Revision de Analista'
                                  WHEN ge.fg_stat = 3 THEN 'Revisar de nuevo'
                                  WHEN ge.fg_stat = 4 THEN 'Aprobado'
                                  ELSE 'Bajo'
                                  END AS estado
                                  FROM
                                  cc_expediente ex INNER JOIN cc_generales ge on ge.id = ex.id_general
                                  WHERE 
                                  ge.fg_stat in(4)");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;

  }

  public function obtenerRegistroClientesJuridicos(){

    /*$where = "";

    if ($_SESSION["usuario"][0]['tipo_user'] == 'vendedor') { // usuariop vendedor

      $where .= " and ge.fg_stat in(2, 5, 3, 1)";

    }elseif ($_SESSION["usuario"][0]['tipo_user'] == 'analista') { // usuario analista
      
      $where .= " and ge.fg_stat in(5)";

    }elseif ($_SESSION["usuario"][0]['tipo_user'] == 'supervisor') { // usuario supervisor

      $where .= " and ge.fg_stat in(2)";
      
    } */  

    $where = "";

    if ($_SESSION['usuario'][0]['tipo_user'] == "vendedor") {
      
      $where = " and ge.pjgn_id_user = '".$_SESSION['usuario'][0]['id']."'";
    
    }

      $result = $this->conn->query("SELECT 
                                    ge.id,
                                    ge.pjgn_ruc_dv, 
                                    ex.pjexp_codigo_dollar, 
                                    ex.pjexp_cliente, 
                                    (ex.pjexp_marca  + ' | ' + ex.pjexp_modelo + ' | ' + ex.pjexp_color + ' | ' + ex.pjexp_placa) as vehiculo, 
                                    ge.fecha_log, 
                                    CASE
                                    WHEN ge.pjgn_stat = 1 THEN 'Registrado'
                                    WHEN ge.pjgn_stat = 2 THEN 'Esperando Revision de supervisor'
                                    WHEN ge.pjgn_stat = 5 THEN 'Esperando Revision de Analista'
                                    WHEN ge.pjgn_stat = 3 THEN 'Revisar de nuevo'
                                    WHEN ge.pjgn_stat = 4 THEN 'Aprobado'
                                    ELSE 'Bajo'
                                    END AS estado
                                    FROM
                                    cc_pj_expediente ex INNER JOIN cc_pj_generales ge on ge.id = ex.id_general
                                    WHERE
                                    ge.pjgn_stat not in(4)
                                    $where");
      $rows = $result->fetchAll(PDO::FETCH_ASSOC);
      return $rows;

  }

  public function obtenerRegistroClientesJuridicosHistoricos(){

    $result = $this->conn->query("SELECT 
                                  ge.id,
                                  ge.pjgn_ruc_dv, 
                                  ex.pjexp_codigo_dollar, 
                                  ex.pjexp_cliente, 
                                  (ex.pjexp_marca  + ' | ' + ex.pjexp_modelo + ' | ' + ex.pjexp_color + ' | ' + ex.pjexp_placa) as vehiculo, 
                                  ge.fecha_log, 
                                  CASE
                                  WHEN ge.pjgn_stat = 1 THEN 'Registrado'
                                  WHEN ge.pjgn_stat = 2 THEN 'Esperando Revision de supervisor'
                                  WHEN ge.pjgn_stat = 5 THEN 'Esperando Revision de Analista'
                                  WHEN ge.pjgn_stat = 3 THEN 'Revisar de nuevo'
                                  WHEN ge.pjgn_stat = 4 THEN 'Aprobado'
                                  ELSE 'Bajo'
                                  END AS estado
                                  FROM
                                  cc_pj_expediente ex INNER JOIN cc_pj_generales ge on ge.id = ex.id_general
                                  WHERE
                                  ge.pjgn_stat in(4)");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;

}

  public function obtenerRegistrosPorId($tabla, $where){

    $result = $this->conn->query("SELECT * FROM $tabla WHERE $where");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }

  public function eliminarRegistrosPorId($tabla, $where){

    $result = $this->conn->query("delete FROM $tabla WHERE $where");
    return $result;
  }

  public function obtenerPaisId($tabla, $id_pais){

    $result = $this->conn->query("SELECT * FROM $tabla WHERE codigo = '$id_pais'");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }

}
