<?php
include("conexionBBDD.php");
$sql = "INSERT INTO `videojuego` VALUES (
    NULL,
    '$_POST[nombre_videojuego]',
    '$_POST[genero_videojuego]',
    '$_POST[pegi]',
    '$_POST[empresa_desarrolladora]' )";

$registro = mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
?>
