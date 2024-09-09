<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $password = '';
    $database = 'dbextintores';
    $conexion = new mysqli($servidor, $usuario, $password, $database);

    if ($conexion -> connect_error){
        echo '<script type="text/javascript">alert("Error de conexión");</script>';
    else {
        echo '<script type="text/javascript">alert("Conexión exitosa");</script>';
        }
    }
?>