<?php
    require_once('config.php');

    $conexion = mysqli_connect($servidor, $usuario, $password, $basedatos);
    mysqli_query($conexion,"SET NAMES 'utf8'");

    if ($conexion->connect_error) {
        die("Error en la conexión: " . $conexion->connect_error);
    }
?>