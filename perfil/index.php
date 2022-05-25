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
    <div class="flex flex-col p-4  my-10 mx-20  shadow-xl">
            <div class="flex justify-center">
<img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                class="w-32">
            </div>
            
            <?php
                $sql1="SELECT * FROM usuario WHERE id_usuario = $_SESSION[usu]";
                $registro=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1"); 
                while($fila = mysqli_fetch_array($registro)){
                    echo "
                    <h1 class='text-gray-400 text-center'>$fila[nombre] $fila[apellido]</h1>
                    <h1 class='text-3xl py-4 text-center'>$fila[nombre_usuario]</h1>
                    <h1 class='text-center'>$fila[correo]</h1>
                    <h1 class='text-center'>Level: $fila[nivel]</h1>";
                }
            ?>


        </div>
    <div class="flex md:justify-between md:flex-row flex-col my-10 mx-20">
        <div class="flex flex-col pt-5 px-16 shadow-xl">
            <div class="flex justify-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUcv5KYiuNt3G2O2HonILbyyYQNwFLPsuucg&usqp=CAU"
                class="w-32">
            </div>
            <h1 class="text-3xl py-4 text-center">Equipo</h1>
            <?php
            
        $sql1="SELECT * FROM usuario WHERE id_usuario = $_SESSION[usu]";
        $registro=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1"); 
            while($fila = mysqli_fetch_array($registro)){
                echo "<h1 class='text-3xl py-4 text-center'>$fila[nombre_equipo]</h1>";
            }
            ?>
            <form action="./cambiarEquipo.php" method="POST" class="flex flex-col">
            <input type="text" name="nombre_equipo" id="nombre_equipo" class="border border-3 border-gray-900 rounded my-2 py-2" placeholder="nombre equipo">
            <input type="text" name="contraseña_equipo" id="contraseña_equipo" class="border border-3 border-gray-900 rounded my-2 py-2" placeholder="contraseña">
            <input type="submit" value="Cambiar de equipo" class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">
            </form>

        </div>
        
        <div class="flex flex-col pt-5 px-16 shadow-xl">
            <div class="flex justify-center">
            <img src="https://cdn-icons-png.flaticon.com/512/75/75472.png" class="w-32">
            </div>
            <h1 class="text-3xl py-4 text-center">Juegos</h1>
            
            <?php
                $sql1=" SELECT videojuego.nombre_videojuego
                FROM usuario_videojuego, videojuego
                WHERE usuario_videojuego.id_usuario = $_SESSION[usu]
                    AND videojuego.id_videojuego = usuario_videojuego.id_videojuego";
                $registro=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1"); 
                while($fila = mysqli_fetch_array($registro)){
                    echo "<h1 class='text-xl text-center py-4'>$fila[nombre_videojuego]</h1>";
                }
            ?>
            <a href="./añadirVideojuego.php" class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">añadir juego</a>

        </div>
        <div class="flex flex-col pt-5 px-16 shadow-xl">
            <div class="flex justify-center">
            <img src="https://w7.pngwing.com/pngs/284/638/png-transparent-computer-icons-award-award-emblem-logo-tournament.png" class="w-32">
            </div>
            <h1 class="text-3xl py-4 text-center">Torneos</h1>
            
            <?php
                $sql1=" SELECT t.nombre
                FROM unirse_torneos ut, torneos t
                WHERE ut.id_usuario = $_SESSION[usu]
                    AND ut.id_torneo = t.id_torneo";
                $registro=mysqli_query($conexion,$sql1) or die ("Error en la consulta $sql1"); 
                while($fila = mysqli_fetch_array($registro)){
                    echo "<h1 class='text-xl text-center py-4'>$fila[nombre]</h1>";
                }
            ?>
            <a href="./añadirTorneo.php" class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">unirse a torneo</a>

        </div>
    </div>

</body>

</html>