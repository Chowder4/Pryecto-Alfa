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

<body class=" m-0 bg-cover bg-fixed bg-gradient-to-b from-zinc-800 to-gray-900 text-white">
    <nav class="border-b-2 border-gray-200 px-2 sm:px-4 py-2.5 bg-gradient-to-t from-emerald-500 to-emerald-700 w-full">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="http://localhost/Pryecto-Alfa" class="flex items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/75/75472.png" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap text-slate-200">SocialGames</span>
            </a>
            <div class="w-full block w-auto" id="mobile-menu">
                <ul class="flex mt-4 flex-row space-x-8 mt-0 text-sm font-medium">
                    <li>
                        <a href="http://localhost/Pryecto-Alfa/global"
                            class="border-0 hover:text-blue-700 p-0 text-slate-200 hover:text-emerald-200 duration-200 hover:bg-transparent ">Global</a>
                    </li>
                    <li>
                        <a href="http://localhost/Pryecto-Alfa/perfil"
                            class="border-0 hover:text-blue-700 p-0 text-slate-200 hover:text-emerald-200 duration-200 hover:bg-transparent ">Perfil</a>
                    </li>
                    <li>
                        <a href="http://localhost/Pryecto-Alfa/torneos"
                            class="border-0 hover:text-blue-700 p-0 text-slate-200 hover:text-emerald-200 duration-200 hover:bg-transparent ">Torneos</a>
                    </li>
                    <li>
                        <a href="http://localhost/Pryecto-Alfa/equipos"
                            class="border-0 hover:text-blue-700 p-0 text-slate-200 hover:text-emerald-200 duration-200 hover:bg-transparent ">Equipos</a>
                    </li>
                    <li>
                        <a href="http://localhost/Pryecto-Alfa/videojuegos"
                            class="border-0 hover:text-blue-700 p-0 text-slate-200 hover:text-emerald-200 duration-200 hover:bg-transparent ">Videojuegos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div  class="flex justify-center mt-10">
    <table class="text-left w-4/5">
		<thead class="bg-black flex text-white w-full">
			<tr class="flex w-full mb-4">
				<th class="p-4 w-1/4">Imagen</th>
				<th class="p-4 w-1/4">usuario</th>
				<th class="p-4 w-1/4">equipo</th>
				<th class="p-4 w-1/4">Juegos</th>
			</tr>
		</thead>
    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-grey-light flex flex-col items-center  w-full" style="height: 50vh;">
        <?php
                $sql1="SELECT * FROM usuario";
                $registro=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1"); 
                while($fila = mysqli_fetch_array($registro)){
                    $sql2="SELECT * FROM videojuego v, usuario_videojuego uv WHERE id_usuario = $fila[id_usuario] AND v.id_videojuego = uv.id_videojuego";
                    $registro2=mysqli_query($conexion,$sql2) or die ("Error en la consulta $sql1");
                    $opt = "";
                    while($fila2 = mysqli_fetch_array($registro2)){
                        $opt = $opt . "<option value='$fila2[id_videojuego]'>$fila2[nombre_videojuego]";
                    }
                    
                    echo "<tr class='flex w-full'>
                    <td class='p-4 w-1/4'><img src='https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png'
                    class='w-20'>
                </div></td>
                    <td class='p-4 w-1/4'>$fila[nombre_usuario]</td>
                    <td class='p-4 w-1/4'>$fila[nombre_equipo]</td>
                    <td class='p-4 w-1/4'><select class='bg-gray-200 p-2 text-gray-800'>$opt</select></td>
                </tr>";
                }
            ?>
		</tbody>
	</table>
    </div>
    </div>

</body>

</html>