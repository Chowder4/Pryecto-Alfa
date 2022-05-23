<?php 
include("../conectar_base.php");
$sql="SELECT * FROM equipos Where nombre='$_POST[nombre_equipo]'";
$registro=mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
$num=mysqli_num_rows($registro);
if($num==0){
    echo "No se encontro equipo con dicho nombre <a href='http://localhost/Pryecto-Alfa/perfil/'>Volver</a>";
    
} else{
    
    $sql3="UPDATE usuario as u
    set u.nombre_equipo='$_POST[nombre_equipo]'";
    mysqli_query($conexion,$sql3) or die ("Error en la consulta $sql3");
     header("location:http://localhost/Pryecto-Alfa/perfil/");
}

   
?>