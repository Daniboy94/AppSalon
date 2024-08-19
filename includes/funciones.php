<?php


function obtenerServicios(): array
{
    try {

        //Importar una conexión
        require "database.php";

        //Escribir el código SQL
        $sql = "SELECT * FROM servicios";

        $consulta = mysqli_query($db, $sql); //nos va a permitir consultar unas base de datos en php


        //Arreglo vacío

        $servicios = [];
        $i = 0;


        // obtener los resultados
        while ($row = mysqli_fetch_assoc($consulta)) {

            $servicios[$i]["id"] = $row["id"];
            $servicios[$i]["nombre"] = $row["nombre"];
            $servicios[$i]["precio"] = $row["precio"];

            $i++;
        }

        /*echo "<pre>";
        var_dump(($servicios));
        echo "</pre>";*/

        return $servicios;
    } catch (\Throwable $th) {

        var_dump($th);
    }
}

obtenerServicios();


/*echo "<pre>";
var_dump(mysqli_fetch_assoc($consulta)); //convierte los resultados en un arreglo de php, con fetch_ puedes elegir de que manera quieres que se vean los datos 
echo "</pre>";*/
