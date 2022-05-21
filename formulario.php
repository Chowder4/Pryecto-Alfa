<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $servername = "192.168.0.20";
        $database = "torneos";
        // Create connection
        $conn = mysqli_connect($servername, $database);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $cursor = mysqli_query($conn, "SELECT * FROM unirse_torneos" );
        echo "llega aqui";
        while($fila = mysqli_fetch_array($cursor)){
                echo " Id_torneo: .  $fila['id_torneo'] . <br/>";
                echo " Id_usuario: .  $fila['id_usuario'] . <br/>";
        }
        mysqli_close($conn);
        

?>   
<form action="prueba.php">
    <input type="int" name="id_torneo" id="id_torneo"/>
    <input type="int" name="id_usuario" id="id_usuario"/>
    <input type="submit"/>
</form>
</body>
</html>