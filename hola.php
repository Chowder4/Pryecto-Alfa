<?php 
include("001.php");
$sql="SELECT * FROM hola WHERE numero=1" ;
$registros=mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
while($fila=mysqli_fetch_array($registros))
                    {
                        echo "<h1>$fila[numero]</h1>";
                    }

?>