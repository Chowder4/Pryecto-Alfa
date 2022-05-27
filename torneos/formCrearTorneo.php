<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <?php
        session_start();
        include ("../conectar_base.php");    
        if(!isset($_SESSION['usu']))
 {
    header("location:http://localhost/Pryecto-Alfa/inicio_sesion.html");	 
 }
    ?>
</head>

<body class=" m-0 bg-cover bg-fixed bg-gradient-to-b from-zinc-800 to-gray-900">
    <form action="crearTorneo.php" method="post">
        <!-- CONTENEDOR -->
        <div
        class=" container drop-shadow-xl border-2 border-slate-200  bg-gradient-to-b from-slate-800 to-slate-900 mx-auto mt-10 rounded-lg px-5 py-10 sm:w-4/12">

            <!-- CABECERA -->
            <div class=" text-center font-mono text-5xl pb-4 text-slate-200">
                <!--al instalar tailwind se pueden añadir fuentes -->
                CREAR TORNEO
            </div>


            <div class="flex flex-col m-auto">
                <input type="text" id="f_nombre" name="f_nombre" placeholder="nombre"
                    class="text-slate-200  rounded-md w-9/12 bg-slate-900 p-2 m-auto my-2">
            </div>
            <div class="flex flex-col m-auto">
            <select id="f_id_juego" name="f_id_juego" class="text-slate-200  rounded-md w-9/12 bg-slate-900 p-2 m-auto my-2">
            <?php
	
				 // Crear la consulta para leer datos en la tabla de modulos
				 $sql1="SELECT * FROM videojuego";
				 // Ejecución de la consulta
				 $registros1=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1");
				 while($fila1=mysqli_fetch_array($registros1))
					{
							echo "<option value='$fila1[id_videojuego]' selected>$fila1[nombre_videojuego]";
					}
				?>
                </select>
            </div>
			  
            <div class="flex flex-col m-auto">
                <input type="number" name="f_dimension" id="f_dimension" placeholder="dimension"
                    class="text-slate-200  rounded-md w-9/12 bg-slate-900 p-2 m-auto my-2">
            </div>
            <div class="flex flex-col m-auto">
                <input type="text" name="f_ubicacion" id="f_ubicacion" placeholder="ubicacion"
                    class="text-slate-200  rounded-md w-9/12 bg-slate-900 p-2 m-auto my-2">
            </div>

            <!-- SUBMIT Y CHECKEOS -->
            <div class="flex flex-col m-auto">
                <button type="submit"
                    class="m-auto text-center w-9/12 p-2 mt-2 bg-emerald-200 rounded-md hover:scale-105 hover:bg-violet-600 duration-300 active:bg-violet-700">Crear</button>
            </div>
        </div>

    </form>
</body>

</html>