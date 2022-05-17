<?php
include ("conectar_base.php");
$sql1="SELECT * FROM teams WHERE nombre=$_POST[variable_nombre_equipo]";
$registro=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1");
$num=mysqli_num_rows($registro);
if($num==0){
$sql="INSERT INTO equipos values '($_POST[variable_nombre_equipo]', '$_POST[variabledimension]',
'$_POST[variable_ubicacion]','$_POST[variabletipo]','$_POST[variable_password]')";
$registro=$mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
header("location:./nombre_pagina_crear_equipo.html");
}else
echo"nombre equipo ya escogido";
?>
// solo se pedira contraseña si es de tipo privado, la ubicación la debe recoger automaticamente no haria falta escribirla.