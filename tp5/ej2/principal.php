<?php

/*
if (isset($_COOKIE['nombre']) && isset($_COOKIE['apellido']) && isset($_COOKIE['correo']) ) {
    echo "Nombre: " . $_COOKIE['nombre'] . "<br>";
    echo "Apellido: " . $_COOKIE['apellido'] . "<br>";
    echo "Correo: " . $_COOKIE['correo'] . "<br>";
}*/

// Comprobar si la cookie está establecida
if (count($_COOKIE) > 0) {
    echo "<h3>Bienvenido a principal</h3>";
    echo "Las cookies están habilitadas en el navegador.";
} else {
    echo "Las cookies están deshabilitadas en el navegador.";
}


?>