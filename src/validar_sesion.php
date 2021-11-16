<?php
    session_start();

    if(!isset($_SESSION['datos_usuario'])) {
        header("location: login.php");
    }
?>