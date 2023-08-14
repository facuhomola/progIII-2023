<?php

function ordena($arr){
    asort($arr); #no se pierden las keys
    return $arr;
    //var_dump($arr);
    #sort devuelve ordenado pero se pierden las keys
}

function muestra($arr){
    foreach ($arr as $key => $value) {
        echo "[$key -- $value] ";
    }
}

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

echo "Arreglo original: "; 
muestra($fruits); echo "<br>";

$fruits = ordena($fruits);
echo "Arreglo ordenado: "; muestra($fruits);

?>