<?php 
include("001.php");
$sql="SELECT * FROM Usuario Where usuario='$_POST[f_usuario]' AND password='$_POST[f_pasw]'";
$registro=mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
$num=mysqli_num_rows($registro);
if($num==0){
    echo "Falso";
} else
    header("location:./Paginaguay.html");

?>