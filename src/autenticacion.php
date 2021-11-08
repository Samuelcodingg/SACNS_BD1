<?php
    include('conexion_db.php');

    $id = $_POST['id'];
    $passwordUser = $_POST['password'];
    $frmname = $_POST['frmname'];

    //para prevenir sql injection
    $id = stripcslashes($id);
    $passwordUser = stripcslashes($passwordUser);
    $frmname = stripcslashes($frmname);
    
    $id = mysqli_real_escape_string($conexion, $id);
    $passwordUser = mysqli_real_escape_string($conexion, $passwordUser);
    $frmname = mysqli_real_escape_string($conexion, $frmname);

    $sql = "SELECT * FROM $frmname WHERE $frmname"."_id = '$id' AND contrasenia='$passwordUser'";
    $result = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
        session_start();
        $_SESSION['datos_usuario'] = $row;
        $_SESSION['role'] = $frmname;
        header("location: ../index.php");
    }else{
        header("location: ../login.php?error=1");
    }

?>
