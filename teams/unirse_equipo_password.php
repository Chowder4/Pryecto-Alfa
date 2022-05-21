<?php 
include("conectar_base.php");
$sql="SELECT * FROM equipos Where nombre='$_POST[nombre_equipo]' and password_team='$POST[password_equipo]'";
$registro=mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
$num=mysqli_num_rows($registro);
if($num==0){
    echo "Error contraseña incorrecta";
} else{
$sql2="UPDATE Usuario as u, equipos as e
set u.id_team=e.id_equipo ";
$sql3="UPDATE Usuario as u, equipos as e
set u.nombre_equipo=e.nombre ";
    header("location:./paginaprincipal.html");
}
?>