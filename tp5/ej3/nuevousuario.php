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
    <title>Sistema - Nuevo Usuario</title>
</head>
<body>
    <h3>Nuevo usuario</h3>
    <h3>Complete los campos</h3>
    <form action="" method="post">
        Nombre <input type="text" name="nombre"> <br>
        Clave <input type="password" name="clave"> <br>
        <input type="submit" value="enviar" name="enviar">
    </form>

<?php
    if (isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'];
        $clave = $_POST['clave'];
        
        $insertar = "INSERT INTO usuario(nombre, clave) VALUES('$nombre', '$clave')";
        $consulta = mysqli_query($conexion, $insertar);
        if ($consulta) {
            echo "<p>Se registro el nuevo usuario <br></p>";
            echo "<a href=home.php>Volver a Home</a>";
        }else{
            die("Ocurrio un error");
        }
    }
?>
</body>
</html>