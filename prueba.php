<?php
include ("conectar_base.php");
    $sql="INSERT INTO unirse_torneos (id_torneo, id_usuario) values ($_GET[id_torneo], $_GET[id_usuario])";
    mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
    header("location:./redireccionamiento.php"); 

?>