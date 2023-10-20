<?php

    if (isset($_POST['enviar'])) {
        $usuario = $_POST['usuario'];
        setcookie('usuario', $usuario, time()+36000);
        header("location:pagina2.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie - Formulario</title>
</head>
<body>
    <form action="" method="post">
        Nombre <input type="text" name="usuario"> <br>
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>