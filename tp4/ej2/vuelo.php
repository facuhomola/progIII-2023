<?php

$conexion = mysqli_connect("localhost", "root", "", "vuelos"); //conexión a base de datos 'vuelos'

//almacenar valores ingresados
$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fecha = $_POST['fecha'];
$precio = $_POST['precio'];

//insertar datos en la tabla vuelo
$insertar = "INSERT INTO vuelo(Origen, Destino, FechaPartida, Precio) VALUES('$origen', '$destino', '$fecha', '$precio')";

$consulta = mysqli_query($conexion, $insertar);

if (!$consulta) {
    die("Ocurrio un error durante la consulta");
}else{
    echo "<h4>Se registro el vuelo exitosamente</h4> <a href=ingreso.php>Volver al formulario</a>"; 
}

?>