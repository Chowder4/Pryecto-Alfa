<?php 
include("conectar_base.php");
$sql="SELECT * FROM nombre Where nombre='$_POST[nombre_equipo]' and password_team='$POST[password_equipo]'";
$registro=mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
$num=mysqli_num_rows($registro);
if($num==0){
    echo "Error contraseña incorrecta";
} else
    header("location:./paginaprincipal.html");
?>