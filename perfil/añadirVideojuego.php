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
        if(!isset($_SESSION['usu']))
 {
    header("location:http://localhost/Pryecto-Alfa/index.html");	 
 }
        include ("../conectar_base.php");    
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
                        <a href="http://localhost/Pryecto-Alfa/global"
                            class="border-0 hover:text-blue-700 p-0 text-gray-900 hover:text-white hover:bg-transparent ">Global</a>
                    </li>
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
                            class="border-0 hover:text-blue-700 p-0 text-gray-900 hover:text-white hover:bg-transparent ">Cerrar Sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="flex sm:justify-center sm:flex-row flex-col my-10 sm:mx-48">
        <div>
        <?php
                $sql1=" SELECT v.nombre_videojuego, v.id_videojuego 
                FROM videojuego v 
                WHERE v.nombre_videojuego NOT IN ( 
                    SELECT videojuego.nombre_videojuego 
                    FROM usuario_videojuego, videojuego 
                    WHERE usuario_videojuego.id_usuario = $_SESSION[usu] AND 
                    videojuego.id_videojuego = usuario_videojuego.id_videojuego 
                );";
                $registro=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1"); 
                while($fila = mysqli_fetch_array($registro)){
                    echo "
                    <div class='flex'>
                    <h1 class='text-xl text-center py-4'>$fila[nombre_videojuego]</h1>
                    <a href='./insertarVideojuego.php?id=$fila[id_videojuego]' class='border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline'>añadir</a>

                    </div>";
    }
            ?>
        </div>
    </div>
</body>
</html>