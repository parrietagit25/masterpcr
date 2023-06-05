<?php
require_once("Conexion.php");

class Usuario extends Conexion {
  private $conn;

  public function __construct() {
    $this->conn = $this->conectar();
  }

  public function obtenerUsuarios() {

    $result = $this->conn->query("SELECT * FROM usuarios");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  
  }

  public function eliminarUsuario($id) {
    $stmt = $this->conn->query("DELETE FROM usuarios WHERE id = $id");
  }

  public function obtenerUsuario($id) {
    $stmt = $this->conn->query("SELECT * FROM usuarios WHERE id = $id");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function autenticar($email, $password) {

    $result = $this->conn->query("SELECT count(*) as contar FROM usuarios WHERE email = '".$email."'");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($rows as $row) {
      $contar = $row['contar']; 
    }

    if ($contar > 0) {

      $result = $this->conn->query("SELECT * FROM usuarios WHERE email = '".$email."'");
      $rowss = $result->fetchAll(PDO::FETCH_ASSOC);

      foreach ($rowss as $row) {
        $pass = $row['password']; 
      }

      if (password_verify($password, $pass)) {
        return $rowss;
      }
    }

    return null;
  }

  function obtenerTodos($tabla) {

    $result = $this->conn->query("SELECT * FROM $tabla WHERE stat = 1");
    return $result->fetchAll(PDO::FETCH_ASSOC);

  }

  public function agregar($tabla, $datos) {

    $columnas = implode(", ", array_keys($datos));
    $params = "'" . implode("', '", array_values($datos)) . "'";
    $sql = "INSERT INTO $tabla ($columnas) VALUES ($params)";
    $insert = $this->conn->query($sql);

    $stmt = $this->conn->query(" SELECT max(id) as id FROM $tabla");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $key => $value) {
      $ultimoIdInsertado = $value['id'];
    }
    return $ultimoIdInsertado;
    
  }

  function actualizar($tabla, $id, $datos) {
    $set = "";
    foreach ($datos as $columna => $valor) {
        $set .= "$columna = '$valor', ";
    }
    $set = rtrim($set, ", ");
    $where = " id = $id ";
    $sql = "UPDATE $tabla SET $set WHERE $where";
    $actualizar = $this->conn->query($sql);
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

}
