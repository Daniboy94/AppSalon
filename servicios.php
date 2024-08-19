<?php




require "includes/funciones.php";

$servicios = obtenerServicios();


echo json_encode($servicios); //convierte un arreglo de php a un string de JS
