<?php
include ("conectar_base.php");
$sql1="SELECT * FROM torneos WHERE nombre = '$_POST[variablenombre_torneo]'";
$registro=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1"); // realizar consultas dentro de la base de datos
$num=mysqli_num_rows($registro); // No pueda haber dos torneos con el mismo nombre
if($num==0){
    $sql="INSERT INTO torneos (nombre, codigo_torneo) values ($_POST[variablenombre], $_POST[variablecodigo])";
    mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
    header("location:./nombre_pagina_principal.html"); //Esto es para que te redirija a la pagina de juanpa.
}else{
    echo"nombre del torneo ya existe";
}
?>