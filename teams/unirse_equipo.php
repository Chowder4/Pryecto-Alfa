<?php 
include("conectar_base.php");
$sql="SELECT * FROM nombre Where nombre='$_POST[nombre_equipo]'";
$registro=mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
$num=mysqli_num_rows($registro);
if($num==0){
    echo "No se encontro equipo con dicho nombre";
} else
    header("location:./paginaprincipal_equipo.html");
?>