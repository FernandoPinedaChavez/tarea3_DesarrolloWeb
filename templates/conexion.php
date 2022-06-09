<?php
    $servidor = "127.0.0.1:3306";
    $usuario = "root";
    $password = "";
    $bd = "comentarios";

    $conn = new mysqli($servidor, $usuario, $password, $bd);

    if($conn->connect_error){
        die("Fallo la conexion: ". $conn->connect_error);
    }
    
?>