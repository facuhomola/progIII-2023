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
    <title>Sistema - Nuevo Evento</title>
</head>
<body>
    <h3>Complete los campos</h3>
    <form action="" method="post">
        Nombre <input type="text" name="nombre"> <br>
        Descripción <textarea name="descripcion" id="" cols="30" rows="15"></textarea>
        <input type="submit" value="enviar" name="enviar">
    </form>

<?php
    if (isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        
        $insertar = "INSERT INTO eventos(nombre, descripcion) VALUES('$nombre', '$descripcion')";
        $consulta = mysqli_query($conexion, $insertar);
        if ($consulta) {
            echo "<p>Se registro el nuevo evento <br></p>";
            echo "<a href=home.php>Volver a Home</a>";
        }else{
            die("Ocurrio un error");
        }
    }
?>
</body>
</html>