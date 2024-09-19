<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    $cantidadCiudades = $_POST['cantidad'];
    // Validar que la cantidad sea un número válido
    if (!is_numeric($cantidadCiudades) || $cantidadCiudades <= 0) 
    {
        echo "<p>Por favor, ingrese un número válido de ciudades.</p>";
    } 
    else 
    {
        // Crear un array para almacenar las ciudades
        $ciudades = array();
        // Pedir al usuario que ingrese el nombre de cada ciudad
        for ($i = 0; $i < $cantidadCiudades; $i++) 
        {
            echo "<label for='ciudad$i'>Ciudad " . ($i + 1) . ":</label>";
            echo "<input type='text' id='ciudad$i' name='ciudad$i' required><br><br>";
        }

        echo "<input type='submit' name='guardar' value='Guardar Ciudades'>";
    }
}
if (isset($_POST['guardar']))
{
    // Obtener los nombres de las ciudades del formulario
    $ciudades = array();
    for ($i = 0; $i < $cantidadCiudades; $i++)
    {
        $ciudades[$i] = $_POST["ciudad$i"];
    }
    // Mostrar las ciudades ingresadas
    echo "<h2>Ciudades ingresadas:</h2>";
    for ($i = 0; $i < $cantidadCiudades; $i++) 
    {
        echo "Ciudad :". "$cantidasciudades" . ($i + 1) . "<br>";
        echo $ciudades[$i] . "<br>";
    }
}
?>