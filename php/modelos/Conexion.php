<?php
class Conexion {

  private $server;
    private $database;
    private $username;
    private $password;

    public function __construct() {
        $this->server = 'localhost:8080'; 
        $this->database = 'db'; 
        $this->username = 'parrieta'; 
        $this->password = 'Dollar2022'; 
    }

    public function conectar() {
        $conn = null;

        try {
            $conn = new PDO('mysql:host=db;dbname=db;charset=utf8mb4', 'parrieta', 'Dollar2022');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexión exitosa a la base de datos MySQL.";
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }

        return $conn;
    }

    public function desconectar($conn) {
        $conn = null;
    }

}
