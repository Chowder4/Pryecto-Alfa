<?php
include("conexionBBDD.php");

$sql =  "SELECT videojuego.nombre_videojuego
        FROM usuario_videojuego, videojuego
        WHERE usuario_videojuego.id_usuario = $_POST[id_usuario]
            AND videojuego.id_videojuego = usuario_videojuego.id_videojuego";

$resultados=mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
$num=mysqli_num_rows($resultados);

if ($num == 0){
    echo "No se han encontrado videojuegos del usuario con ID: $_POST[id_usuario]";
    echo"<br><br><input type='button' value='Volver a buscar' onclick=location.href='usuario_videojuego.html'>";
}else{
    echo "<table border='1'>";
    echo "<tr><td>Videojuegos</td></tr>";
    while($row = mysqli_fetch_assoc($resultados)){
        echo "<tr><td>{$row['nombre_videojuego']}</td></tr>";
    }
}
?>
