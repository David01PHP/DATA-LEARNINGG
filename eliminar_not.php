<?php 
    $_id = $_GET['id'];

    include_once("clasess/conexionopen.php");
    $query = "DELETE FROM notas WHERE id = '$_id'";
    $registro = mysqli_query($conexion, $query);
    header("location:notas.php");
?>