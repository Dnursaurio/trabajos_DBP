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
                    <?php

                    if ($_SERVER["REQUEST_METHOD"] =="POST") 
                    {
                        //recoge los datos del formulario
                        $nombre = $_POST["nombre"];
                        $fecha_nacimiento = $_POST["fecha_nacimiento"];
                        $ocupacion = $_POST["ocupacion"];
                        $contacto = $_POST["contacto"];
                        $nacionalidad = $_POST["nacionalidad"];
                        $ingles = $_POST["ingles"];
                        $lenguajes = isset($_POST["lenguajes"]) ? $_POST["lenguajes"]:[];
                        $aptitud = $_POST["aptitud"];
                        $habilidades = isset($_POST["habilidades"]) ? $_POST["habilidades"]:[];

                        //Validamos los campós (se pude personalizar segun las necesidades del usuario)
                        if (empty($nombre) || empty($fecha_nacimiento) || empty($ocupacion) || empty($contacto))
                        {
                            echo "Por favor, rellena todos los campos"; 
                        }
                        else
                        {
                            //mostrara los datos recibidos
                            echo "<h1>DATOS PESONALES</h1>";
                            echo "Nombre y apellidos: $nombre<br>";
                            echo "Fecha de nacimineto: $fecha_nacimiento<br>";
                            echo "Ocupación: $ocupacion<br>";
                            echo "<h1>CONTACTO</h1>";
                            echo "Contacto: $contacto<br>";
                            echo "<h1>NACIONALIDAD</h1>";
                            echo "Nacionalidad: $nacionalidad<br>";
                            echo "<h1>NIVEL DE INGLES</h1>";
                            echo "Nivel de ingles: $ingles<br>";

                            //Mostrar los lenguajes selesccionados
                            if (!empty($lenguajes)) 
                            {
                                echo "<h1>LENGUAJES DE PROGRAMACION</h1>";
                                echo "Lenguajes de programación: " .implode(", " ,$lenguajes)."<br>";
                            }
                            else
                            {
                                echo "No seleccionaste lenguajes de programacion <br>";
                            }

                            echo "<h1>APTITUDES </h1>";
                            echo "Aptitud seleccionada: $aptitud<br>";

                            //Mostrar las habilidades seleccionadas
                            if (!empty($habilidades)) 
                            {
                                echo "<h1>HABILIDADES</h1>";
                                echo "Habilidades: " . implode(",",$habilidades)."<br>";
                            }
                            else
                            {
                                echo "No seleccionaste habilidades";
                            }

                            
                        }
                    }
                    ?>           
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
</html>