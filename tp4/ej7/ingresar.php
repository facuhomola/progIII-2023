<?php

$conexion = mysqli_connect("localhost", "root", "", "personas");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 7 - ingresar</title>
</head>
<body>
    <h3>Completar formulario</h3>
    <form action="datos.php" method="post">
        Nombre <input type="text" name="nombre"> <br>
        Apellido <input type="text" name="apellido"> <br>
        dni <input type="number" name="dni"> <br>
        correo <input type="mail" name="correo"> <br>
        Localidad
        <select name="localidad" id="">
           <?php
           
           $sql="SELECT * from localidad";
            $result=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){
                ?>
                <option value="<?=  $mostrar['cod_postal'] ?>"> <?php  echo $mostrar['cod_postal'] . "-" . $mostrar['nombre']; ?> </option>
            <?php
            }
            ?>
        </select> <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
