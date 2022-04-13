<?php

$id = $_GET['id'];

try {
    $conexion = new PDO ('mysql:host=localhost;dbname=prueba_datos', 'root', '');
    //echo "Conexion OK";

    // Metodo Query, para ejecutar consultas pequeñas
    /* $resultado = $conexion -> query('SELECT * FROM usuarios WHERE id = 2');

    foreach ($resultado as $fila) {
        echo $fila['ID']. ' - '. $fila['nombre'] . '<br>';
    } */

    $consulta = $conexion->prepare('INSERT INTO usuarios VALUES(null, "Edu")'); 
    $consulta->execute();

    
}catch(PDOException $e) {
    echo "Error: " . $e -> getMessage();
}

?>