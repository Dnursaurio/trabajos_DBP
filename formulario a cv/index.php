<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$database = "cvform";

$link = mysqli_connect ($servidor,$usuario,$clave,$database);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv = "X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=devixe-width, initial-scale1.0">
        <style>
            .recuadro
            {
                box-sizing: border-box;
            }
            body
            {
                font-family: Arial, Helvetica, sans-serif;
                font-size: 16px;
                color: black;
                margin: 0;
                padding: 0;
            }
            /*personalizamos el encabezado*/
            header
            {
                background-color: #666;
                padding: 100px;
                font-size: 35px;
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            img
            {
                margin-right: 20px;
                border-radius: 50%;
            }
            h1
            {
                position: relative;
                margin: 20px 0;
                padding-bottom: 2px;
                border-bottom: 5px solid black;
                width: 100%;
            }
            h2,h3
            {
                margin: 0;
                text-align: left;
            }
            h3
            {
                font-size: 32px;
                text-align: center;
                margin-top: 10px;
            }
            .contendeor_de_contenidos
            {
                display: flex;
                justify-content: space-between;
                padding: 0;
                margin: 0;
                width: 500;
                box-sizing: border-box;
            }
            .recuadro_info
            {
                background-color: #ccc;
                padding: 100px;
                margin: 100%;
                width: fit-content;
                margin: 0;
                display: flex;
                align-items: flex-start;
            }
            .contenedor
            {
                display: flex;
                flex-direction: column;
                width: 100%;
            }
            .espacio_vacio
            {
                width: 75%;
                padding: 0px;
                margin: 0;
                background-color: white;
                box-sizing: border-box;
            }
        </style>
    </head>
    <body>
        <header>
            
            <img src="fotoCV.jpeg" alt="fotoCV Icon" style="width: 200px; height: 200px;">
            <div>
                <h2>Alonzo Estéfano Cuela Rodríguez</h2>
                <h3>Programador de videojuegos</h3>
            </div>  
        </header>
        <div class="contendeor_de_contenidos">
            <div class="recuadro_info">    
                <div class="contenedor">
                    <form action="#" name="cvform" method="post">
                        <h1>DATOS PERSONALES</h1>
                        <!--nombre y apellidos-->
                        <label for="nombre">Nombre y apellidos</label><br>
                        <input type="text" id="nombre" name="nombre" required><br><br>
                        
                        <!--fecha de nacimiento-->
                        <label for="fecha_nacimiento">Fecha de Nacimiento</label><br>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>

                        <!--Ocupacion-->
                        <label for="ocupacion">Ocupación</label><br>
                        <input type="text" id="ocupacion" name="ocupacion" required><br><br>

                        <h1>CONTACTO</h1>
                        <!--Contacto (telefono y correo)-->
                        <label for="contacto">Contacto (telefono, correo)</label><br>
                        <input type="text" id="contacto" name="contacto" required><br><br>

                        <!--Nacionalidad-->
                        <label for="nacionalidad">Nacionalidad</label><br>
                        <select name="nacionalidad" id="nacionalidad" required>
                            <option value="PE">Peruano</option>
                            <option value="CH">Chileno</option>
                            <option value="AR">Argentino</option>
                            <option value="MX">Mexicano</option>
                            <option value="otro">Otro</option>
                        </select><br><br>

                        <!--Nivel de ingles-->
                        <h1>NIVEL DE INGLES</h1>
                        <label for="ingles">Nivel de ingles</label><br>
                        <input type="radio" id="basic" name="ingles" value="basic">
                        <label for="basic">Basico</label><br>
                        <input type="radio" id="intermediate" name="ingles" value="intermediate">
                        <label for="independiente">Intermedio</label><br>
                        <input type="radio" id="advanced" name="ingles" value="advanced">
                        <label for="advanced">Avanzado</label><br>
                        <input type="radio" id="Fluid" name="ingles" value="Fluid">
                        <label for="Fluid">Fluido</label><br><br>
                        
                        <!--Lenguajes de programación-->
                        <h1>LENGUAJES DE PROGRAMACION</h1>
                        <label for="lenguajes">Lenguajes de programación</label><br>
                        <select id="lenguajes" name="lenguajes" multiple required>
                            <option value="c">C</option>
                            <option value="cpp">C++</option>
                            <option value="java">Java</option>
                            <option value="js">Java Script</option>
                            <option value="py">Python</option>
                            <option value="php">PHP</option>
                            <option value="otros">Otros</option>
                        </select><br><br>

                        <!--Aptitudes-->
                        <h1>APTITUDES</h1>
                        <label for="aptitudes">Aptitudes</label><br>
                        <input list="aptitudes" name="aptitud" required>
                        <datalist id="aptitudes">
                            <option value="Trabajo en equipo"></option>
                            <option value="Liderazgo"></option>
                            <option value="Comunicación"></option>
                            <option value="Resolución de problemas"></option>
                        </datalist><br><br>

                        <!--Habilidades-->
                        <h1>HABILIDADES</h1>
                        <label for="habilidades">Habilidades</label><br>
                        <select id="habilidades" name="habilidades" multiple required>
                            <option value="Programación">Programación</option>
                            <option value="Diseño Grafico">Diseño Grafico</option>
                            <option value="Marketing Digital">Marketing Digital</option>
                        </select><br><br>
                        <input type="submit" name="Enviar">
                    </form>                                       
                </div>
            </div>
            <div class="espacio_vacio">
                <h1>PERFIL</h1>
                <p>Desarrollador de videojuegos con 2 años de experiencia, capacitado en el motor gráfico UnityEngine. Mi objetivo a lograr es que otros creadores independientes en la industria puedan publicar sus creaciones sin impedimentos de pago.</p>
                <h1>EXPERIENCIA LABORAL</h1>
                <h4>Desarrollador de videojuegos</h4>
                <h5>AQP-Perú</h5>
                <p>Lider creativo del proyecto WelcomeBack, un videojeugo pequeño que ganó el primer premio en la UCSP ComputerScienceDepartment GameJam
                    donde se realizo una lluvia de ideas para hacer un juego pequeño y simple, pero divertido y funcional.
                </p>
                <h4>Desarrollador de videojuegos</h4>
                <h5>AQP-Perú</h5>
                <p>Desarrollo independiente del juego wev Trapped In Dungeons, un videojuego pequeño realizado que puedes encontrar en mi pagina web personal
                    con el prpoposito de divertir a los usuarios y además ver las capacidadeas del <a href="https://lodev.org/cgtutor/">RayCasting</a>.
                </p>
                <h4>Desarrollador Web</h4>
                <h5>AQP-Perú</h5>
                <p>Desarrollo de paginas web en pequeños trabajos universitarios aparte de mi pagina personal que puedes encontrar en em recuadro de información adjunto a la izquierda.</p>
                <h1>FORMACION</h1>
                <h4>Formacion Basica</h4>
                <p>IEP: <a href="https://www.facebook.com/colegioreydereyes/?locale=es_LA">Rey de Reyes</a></p>
                <h4>Formacion Superior</h4>
                <p><a href="https://ucsp.edu.pe">Universidad Católica San Pablo(UCSP)</a></p>
            </div>
        </div>
    </body>
    <?php
    if(isset($_POST['Enviar']))
    {
        $nombre = $_POST["nombre"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $ocupacion = $_POST["ocupacion"];
        $contacto = $_POST["contacto"];
        $nacionalidad = $_POST["nacionalidad"];
        $ingles = $_POST["ingles"];
        $lenguajes = $_POST["lenguajes"];
        $aptitud = $_POST["aptitud"];
        $habilidades = $_POST["habilidades"];

        $insertdata = "INSERT INTO datoscv VALUES('$nombre','$fecha_nacimiento','$ocupacion','$contacto','$nacionalidad','$ingles','$lenguajes','$aptitud','$habilidades','')";
        $exeinsert = mysqli_query($link,$insertdata);
    }
    ?>
</html>