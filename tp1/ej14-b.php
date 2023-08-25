<?php

function checkboxhtml($arg){
    $arg = explode(",", $arg);
    foreach ($arg as $key => $value) {
        echo "<input type=checkbox value=$value> $value   ";
    }
}

$cadena = "gris,azul,rojo,verde";

checkboxhtml($cadena);

?>