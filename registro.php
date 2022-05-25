<?php
include ("./conectar_base.php");
$sql1="SELECT * FROM usuario WHERE nombre_usuario='$_POST[r_usuario]' and correo = '$_POST[r_email]'";
$registro=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1");
$num=mysqli_num_rows($registro);
if($num==0){
$sql="INSERT INTO usuario (nombre, apellido, nombre_usuario, clave, correo, telefono, id_team, nombre_equipo, nivel) 
values ('$_POST[r_nombre]', '$_POST[r_apellidos]',
'$_POST[r_usuario]', '$_POST[r_pass1]','$_POST[r_email]','$_POST[r_telefono]',NULL,NULL,1)";
mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
header("location:./inicio_sesion.html");
}else
echo"nombre usuario o correo ya escogidos";
?>

