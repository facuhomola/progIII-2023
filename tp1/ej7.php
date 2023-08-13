<?php

function letras($arg){
    $arg = str_split($arg);
    $arg = implode('-', $arg);
    echo $arg;
}

$cadenaIngresada = "hola";
echo "Texto ingresado: $cadenaIngresada <br>";
echo "Texto modificado: ";
letras($cadenaIngresada);

?>