<?php 
session_start();
if(!isset($_SESSION['usu']))
 {
    header("location:http://localhost/Pryecto-Alfa/index.html");	 
 }
include("../conectar_base.php");
$sql="SELECT * FROM equipos Where nombre='$_POST[nombre_equipo]' and password_team = '$_POST[contraseña_equipo]'";
$registro=mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
$num=mysqli_num_rows($registro);
if($num==0){
    echo "No se encontro equipo con dicho nombre o es necesario una contraseña <a href='http://localhost/Pryecto-Alfa/perfil/'>Volver</a>";
    
} else{
    
    $sql3="UPDATE usuario AS u
    SET u.nombre_equipo='$_POST[nombre_equipo]'
    WHERE u.id_usuario = $_SESSION[usu]";
    mysqli_query($conexion,$sql3) or die ("Error en la consulta $sql3");
     header("location:http://localhost/Pryecto-Alfa/perfil/");
}

   
?>