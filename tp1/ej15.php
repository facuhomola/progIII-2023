<?php

function checkboxhtml($num, $arg){
    $arg = explode(",", $arg);
    if ($num == 0) {
        foreach ($arg as $key => $value) {
            echo "<input type=checkbox value=$value> $value   ";
        }
    }else{
        foreach ($arg as $key => $value) {
            echo "<input type=radio value=$value> $value   ";
        }
    }   
}

$cadena = "gris,azul,rojo,verde";

checkboxhtml(1, $cadena);

?>