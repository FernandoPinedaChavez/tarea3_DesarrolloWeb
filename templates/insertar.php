<?php
    require 'conexion.php';

    $nombre = $_POST['nombre'];
    $calificacion = $_POST['calificacion'];
    $comentario = $_POST['comentario'];

    $query = "insert into comentarios(nombre, calificacion, comentario) values(?, ?, ?)";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("sds", $nombre, $calificacion, $comentario);
    $sentencia->execute();
    
?>