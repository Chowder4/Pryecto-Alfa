<?php
        session_start();
        if(!isset($_SESSION['usu']))
 {
    header("location:http://localhost/Pryecto-Alfa/index.html");	 
 }
include ("../conectar_base.php");
$sql1="SELECT * FROM usuario_videojuego WHERE id_usuario=$_SESSION[usu] AND id_videojuego = $_GET[id]";
$registro=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1");
$num=mysqli_num_rows($registro);
if($num==0){
$sql="INSERT INTO usuario_videojuego VALUES ($_SESSION[usu],$_GET[id])";
mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
header("location:./añadirVideojuego.php");
}else
echo"nombre equipo ya escogido";
?>