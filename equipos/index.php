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
    header("location:http://localhost/Pryecto-Alfa/index.html");	 
 }
    ?>
</head>

<body>
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 bg-gray-400">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="https://flowbite.com" class="flex items-center">
                <img src="https://svgsilh.com/svg_v2/2962084.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap text-gray-900">SocialGames</span>
            </a>
            <div class="w-full block w-auto" id="mobile-menu">
                <ul class="flex mt-4 flex-row space-x-8 mt-0 text-sm font-medium">
                    <li>
                        <a href="http://localhost/Pryecto-Alfa/perfil"
                            class="border-0 hover:text-blue-700 p-0 text-gray-900 hover:text-white hover:bg-transparent ">Perfil</a>
                    </li>
                    <li>
                        <a href="http://localhost/Pryecto-Alfa/torneos"
                            class="border-0 hover:text-blue-700 p-0 text-gray-900 hover:text-white hover:bg-transparent ">Torneos</a>
                    </li>
                    <li>
                        <a href="http://localhost/Pryecto-Alfa/equipos"
                            class="border-0 hover:text-blue-700 p-0 text-gray-900 hover:text-white hover:bg-transparent ">Equipos</a>
                    </li>
                    <li>
                        <a href="http://localhost/Pryecto-Alfa/videojuegos"
                            class="border-0 hover:text-blue-700 p-0 text-gray-900 hover:text-white hover:bg-transparent ">Videojuegos</a>
                    </li>
                    <li>
                        <a href="../logout.php"
                            class="border-0 hover:text-blue-700 p-0 text-gray-900 hover:text-white hover:bg-transparent ">Cerrar
                            Sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="flex justify-center mt-10">
    <a href="./crearEquipo.html" class="w-3/5 text-center text-3xl border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">Crear equipo +</a>
    </div>

    <div  class="flex justify-center mt-10">
    <table class="text-left w-4/5">
		<thead class="bg-black flex text-white w-full">
			<tr class="flex w-full mb-4">
				<th class="p-4 w-1/4">Nombre</th>
				<th class="p-4 w-1/4">Dimension</th>
				<th class="p-4 w-1/4">Ubicacion</th>
				<th class="p-4 w-1/4">Tipo</th>
			</tr>
		</thead>
    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-grey-light flex flex-col items-center  overflow-y-scroll w-full" style="height: 50vh;">
        <?php
                $sql1=" SELECT * FROM equipos";
                $registro=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1"); 
                while($fila = mysqli_fetch_array($registro)){
                    echo "<tr class='flex w-full'>
                    <td class='p-4 w-1/4'>$fila[nombre]</td>
                    <td class='p-4 w-1/4'>$fila[dimension]</td>
                    <td class='p-4 w-1/4'>$fila[ubicacion]</td>
                    <td class='p-4 w-1/4'>$fila[Tipo]</td>
                </tr>";
                }
            ?>
		</tbody>
	</table>
    </div>
</body>

</html>