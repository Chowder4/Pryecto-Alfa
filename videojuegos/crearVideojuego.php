<?php
session_start();
if(!isset($_SESSION['usu']))
 {
    header("location:http://localhost/Pryecto-Alfa/inicio_sesion.html");	 
 }
include ("../conectar_base.php");
$sql1="SELECT * FROM videojuego WHERE nombre_videojuego='$_POST[f_nombre]'";
$registro=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1");
$num=mysqli_num_rows($registro);
if($num==0){
   $sql = "INSERT INTO `videojuego` (nombre_videojuego, genero_videojuego, pegi, empresa_desarrolladora) VALUES (
      '$_POST[f_nombre]',
      '$_POST[f_genero]',
      $_POST[f_pegi],
      '$_POST[f_empresa_desarrolladora]' )";
  
mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
header("location:./index.php");
}else
echo"nombre equipo ya escogido";
?>