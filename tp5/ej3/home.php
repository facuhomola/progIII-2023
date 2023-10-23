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
    <title>Sistema - Home</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <h2>Usuario: <?php echo $user ?> -- <a href="logout.php">Cerrar Sesión</a> </h2> <br>
    <a href="nuevoevento.php">Nuevo Evento</a>
    <a href="nuevapublicacion.php">Nueva Publicación</a>
    <a href="nuevousuario.php">Nuevo Usuario</a> <br>
    <a href="listaeventos.php">Listar Eventos</a>
</body>
</html>