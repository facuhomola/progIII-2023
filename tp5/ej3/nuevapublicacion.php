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
    <title>Sistema - Nueva Publicación</title>
</head>
<body>
    <h3>Complete los campos</h3>
    <form action="" method="post">
        Nombre <input type="text" name="nombre"> <br>
        Autor <input type="text" name="autor"> <br>
        Comentario <br> <textarea name="comentario" id="" cols="30" rows="7"></textarea> <br>
        <input type="submit" value="enviar" name="enviar">
    </form>

<?php
    if (isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'];
        $autor = $_POST['autor'];
        $comentario = $_POST['comentario'];
        
        $insertar = "INSERT INTO publicaciones(nombre, autor, comentario) VALUES('$nombre', '$autor', '$comentario')";
        $consulta = mysqli_query($conexion, $insertar);
        if ($consulta) {
            echo "<p>Se registro la nueva publicación <br></p>";
            echo "<a href=home.php>Volver a Home</a>";
        }else{
            die("Ocurrio un error");
        }
    }
?>
</body>
</html>