<?php

try {
    $conexion = new PDO ('mysql:host=localhost;dbname=prueba_datos', 'root', '');
    //echo "Conexion OK";

    // Metodo Query, para ejecutar consultas pequeñas
    $resultado = $conexion -> query('SELECT * FROM usuarios WHERE id = 2');

    foreach ($resultado as $fila) {
        echo $fila['ID']. ' - '. $fila['nombre'] . '<br>';
    }

}catch(PDOException $e) {
    echo "Error: " . $e -> getMessage();
}

?>