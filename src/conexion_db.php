<?php
    include '../config.php';
    
    $conexion = mysqli_connect($servidor, $usuario, $password, $basedatos);

    if ($conexion->connect_error) {
        die("Error en la conexión: " . $conexion->connect_error);
    }
?>