<?php
session_start();
if(!isset($_SESSION['usu']))
 {
    header("location:http://localhost/Pryecto-Alfa/index.html");	 
 }
include ("../conectar_base.php");
$sql1="SELECT * FROM torneos WHERE nombre = '$_POST[f_nombre]'";
$registro=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1"); // realizar consultas dentro de la base de datos
$num=mysqli_num_rows($registro); // No pueda haber dos torneos con el mismo nombre
if($num==0){
    $sql="INSERT INTO torneos (id_usuario, id_juego, nombre,ubicacion,dimension,finalizado) 
    values ($_SESSION[usu], $_POST[f_id_juego], '$_POST[f_nombre]','$_POST[f_ubicacion]',$_POST[f_dimension], false)";
    mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
    header("location:./index.php");
}else{
    echo"nombre del torneo ya existe";
}
?>