<?php
include ("conectar_base.php");
$sql1="SELECT * FROM usuario WHERE nombre_usuario=$_POST[variablenombre_usuario] and $_POST[variable_correo]";
$registro=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1");
$num=mysqli_num_rows($registro);
if($num==0){
$sql="INSERT INTO usuario values '($_POST[variablenombre]', '$_POST[variableApellido]',
'$_POST[variableNombreUsuario]', '$_POST[variablepassword]','$_POST[variablecorreo]','$_POST[variabletelefono]',NULL,NULL,1)";
$registro=$mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
header("location:./nombre_pagina_principal.html");
}else
echo"nombre usuario o contraseña ya escogidos";
?>