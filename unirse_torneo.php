<?php
include ("conectar_base.php");
$sql1="SELECT id_torneo FROM torneos WHERE nombre ='$_POST[variablenombre_torneo]' and codigo_torneo = $_POST[variablecodigo_torneo]" ;
$registro=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1"); 
$num=mysqli_num_rows($registro); 
if($num==1){ 
    $sql="INSERT INTO unirse_torneos (id_torneo, id_usuario) values ($registro, $_POST[variableusuario])";
    mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
    header("location:./nombre_pagina_principal.html"); 
}else{
    echo"nombre del torneo ya existe";
}

?>
