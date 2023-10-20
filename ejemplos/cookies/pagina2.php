<?php

    if (isset($_COOKIE['usuario'])) {
        echo "Usuario: " . $_COOKIE['usuario'] . " esta configurado <br>";
    }

    //desmontar una cookie
    //setcookie('usuario', $usuario, time()-36000);

    //Validar si hay cookies guardadas
    if (count($_COOKIE) > 0 ) {
        "Hay " . count($_COOKIE) . "  cookies guardadas";
    }

?>