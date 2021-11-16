<?php
    require_once('conexion_db.php');

    session_start();
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $contrasenia = $_POST['contrasenia'];

    if($contrasenia == ''){
        $contrasenia = $_SESSION['datos_usuario']['contrasenia'];
    }

    $sql = "UPDATE docente SET celular = '$celular', email = '$email', direccion = '$direccion', contrasenia = '$contrasenia' WHERE docente_id = ".$_SESSION['datos_usuario']['docente_id'];

    mysqli_query($conexion, $sql);

    $_SESSION['datos_usuario']['celular'] = $celular;
    $_SESSION['datos_usuario']['email'] = $email;
    $_SESSION['datos_usuario']['direccion'] = $direccion;
    $_SESSION['datos_usuario']['contrasenia'] = $contrasenia;

    header("location: ../index.php");
?>