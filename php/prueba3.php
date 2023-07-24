<?php

$destino = 'pruebas/';

    try {

        $numero = rand(1000, 30000);
        move_uploaded_file($_FILES['image']['tmp_name'], $destino.$numero.'.jpg');
        
    } catch (Exception $e) {
        
        header('Content-Type: application/json');
        echo json_encode(['error' => $e->getMessage()]);
    }
    

?>
