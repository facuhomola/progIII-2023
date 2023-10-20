<?php

if (count($_COOKIE) > 0) {
    setcookie('nombre', time()-1);
    setcookie('apellido', time()-1);
    setcookie('correo', time()-1);
    echo "Las cookies fueron eliminadas";
} else {
    echo "No existen cookies";
}

?>