<?php 

$conn = null;
try {
    $conn = new PDO('mysql:host=db;dbname=db;charset=utf8mb4', 'parrieta', 'Dollar2022');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión exitosa a la base de datos MySQL.";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

function seleccionar($tabla, $conn){
    $sele = $conn -> query("SELECT * FROM $tabla");
    return $sele;
}

function select_codigos($codigo, $conn){
    $code = $conn -> query("SELECT * FROM codigos WHERE codigo = '".$codigo."'");
    return $code;
}

foreach (seleccionar("cc_ocupacionales", $conn) as $key => $value2) {

    foreach (select_codigos($value2['fo_profesion'], $conn) as $key => $value) {

        $upt = $conn -> query("UPDATE cc_ocupacionales SET fo_profesion = '".$value['descripcion']."' WHERE fo_profesion = '".$value2['fo_profesion']."'");

        echo 'Actualizado Profesion <br>';
        
    }

    foreach (select_codigos($value2['fo_ocupacion'], $conn) as $key => $value) {

        $upt = $conn -> query("UPDATE cc_ocupacionales SET fo_ocupacion = '".$value['descripcion']."' WHERE fo_ocupacion = '".$value2['fo_ocupacion']."'");

        echo 'Actualizado Ocupacion <br>';
        
    }

}