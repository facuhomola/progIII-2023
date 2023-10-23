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
    <title>Sistema - publicaciones</title>
</head>
<body>
    <h1>Sistema - Publicaciones</h1>
    <h2>Usuario: <?php echo $user ?> -- <a href="logout.php">Cerrar Sesión</a> </h2>
</body>
</html>