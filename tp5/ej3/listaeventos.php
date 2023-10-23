<?php

session_start();
//Conectar a la base de datos
include('cn.php');

$user = $_SESSION['nombre'];
if (!isset($user)) {
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema - Lista Eventos</title>
</head>
<body>
    <h3>Lista de Eventos</h3>
        <?php
        
        $sql = "SELECT * FROM eventos";
        $consulta = mysqli_query($conexion, $sql);
        while($mostrar=mysqli_fetch_array($consulta)){
            ?>
            <b>Nombre: </b> <?= $mostrar['nombre']; ?>
            <b>Publicación: </b> <?= $mostrar['descripcion']; ?> <br> <br>
        <?php
        }
        ?>
    <a href="home.php">Volver a Home</a>
</body>
</html>