<?php


$db = mysqli_connect("localhost", "root", "Famiglietti15!", "appsalon"); //código para conectar a mysql

if (!$db) { //si !db esta vacío eso significa el !
    echo "error en la conexion";
    exit; // si hay error en la conexión a la base de datos deja de ejecutar el código
}
