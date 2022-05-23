<?php
include ("../conectar_base.php");
$sql1="SELECT * FROM usuario_videojuego WHERE id_usuario=1 AND id_videojuego = $_GET[id]";
$registro=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1");
$num=mysqli_num_rows($registro);
if($num==0){
$sql="INSERT INTO usuario_videojuego VALUES (1,$_GET[id])";
mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
header("location:./añadirVideojuego.php");
}else
echo"nombre equipo ya escogido";
?>