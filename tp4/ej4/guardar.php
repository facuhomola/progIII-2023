<?php

$conexion = mysqli_connect("localhost", "root", "", "usuarios"); //conexión a base de datos 'usuarios'

//almacenar valores ingresados
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$celu = $_POST['celu'];
$sexo = $_POST['sexo'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];

//insertar datos en la tabla vuelo
$insertar = "INSERT INTO usuario(nombre, direccion, celular, sexo, edad, correo) VALUES('$nombre', '$direccion', '$celu', '$sexo', '$edad', '$correo')";

$consulta = mysqli_query($conexion, $insertar);

if (!$consulta) {
    die("Ocurrio un error durante la consulta");
}else{
    echo "<h4>Se registro el usuario exitosamente</h4> <a href=formulario.php>Volver al formulario</a>"; 
}

?>