<?php

$arreglo1 = array('Argentina' => "Pesos argentinos" , 'Brasil' => "Real" , 'Estados Unidos' => "Dolar" , 'España' => "Euro" , 'Japón' => "Yen" , 'Inglaterra' => "Libra");

echo "Contenido de arreglo <br>";
foreach ($arreglo1 as $key => $value) {
    echo "[$key --> $value] ";
}

?>