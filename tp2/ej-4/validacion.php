<?php

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

if ($edad > 18) {
    echo "<h3> Bienvenido $nombre </h3>";
}else {
    echo "Los menores de edad no pueden ingresar a este sitio <br>";
    echo "<a href=formulario.php>Volver al formulario</a>";
}

?>