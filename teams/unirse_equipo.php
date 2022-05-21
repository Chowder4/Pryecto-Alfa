<?php 
include("conectar_base.php");
$sql="SELECT * FROM nombre Where nombre='$_POST[nombre_equipo]'";
$registro=mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
$num=mysqli_num_rows($registro);
if($num==0){
    echo "No se encontro equipo con dicho nombre";
    $sql2="UPDATE usuario as u, equipos as e
        SET u.id_team=e.id_equipo";
    $sql3="UPDATE Usuario as u, equipos as e
    set u.nombre_equipo=e.nombre_equipo";
} else
    header("location:./paginaprincipal_equipo.html");
?>