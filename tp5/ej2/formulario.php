<?php

if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    setcookie('nombre', $nombre, time()+36000);
    setcookie('apellido', $apellido, time()+36000);
    setcookie('correo', $correo, time()+36000);
    header("location: principal.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="" method="post">
        Nombre <input type="text" name="nombre"> <br>
        Apellido <input type="text" name="apellido"> <br>
        Correo <input type="mail" name="correo"> <br>
        <input type="submit" name="enviar" id="enviar" value="Enviar">
    </form>
</body>
</html>