<?php
session_start();
if(!isset($_SESSION['usu']))
 {
    header("location:http://localhost/Pryecto-Alfa/index.html");	 
 }
include ("../conectar_base.php");
$sql1="SELECT * FROM equipos WHERE nombre='$_POST[f_nombre]'";
$registro=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1");
$num=mysqli_num_rows($registro);
if($num==0){
$sql="INSERT INTO equipos (nombre, dimension, ubicacion, Tipo, password_team) values ('$_POST[f_nombre]', $_POST[f_dimension],
'$_POST[f_ubicacion]','$_POST[f_tipo]','$_POST[f_password]')";
mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
header("location:./index.php");
}else
echo"nombre equipo ya escogido";
?>