<?php
session_start();
include ("./conectar_base.php");  

$sql="SELECT id_usuario FROM usuario WHERE nombre_usuario='$_POST[f_usuario]' and clave='$_POST[f_pasw]'";

// Ejecutamos la consulta 
$registro=mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
$num=mysqli_num_rows($registro);
if($num==0)
{
	echo "Usuario o Clave INCORRECTAS <a href='http://localhost/Pryecto-Alfa/'>volver</a>";
}
else
{
	while($fila = mysqli_fetch_array($registro)){
	$_SESSION['usu']=$fila['id_usuario'];
	header("location:http://localhost/Pryecto-Alfa/perfil");
}
}
mysqli_close($conexion);
?>