<?php
        session_start();
        if(!isset($_SESSION['usu']))
 {
    header("location:http://localhost/Pryecto-Alfa/inicio_sesion.html");	 
 }
include ("../conectar_base.php");
$sql1="SELECT * FROM torneos WHERE codigo_torneo = $_GET[id]";
$registro=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1");
$num=mysqli_num_rows($registro);
if($num==0){
$sql="INSERT INTO unirse_torneos VALUES ($_GET[id], $_SESSION[usu])";
mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
header("location:./añadirTorneo.php");
}else
echo"nombre equipo ya escogido";
?>