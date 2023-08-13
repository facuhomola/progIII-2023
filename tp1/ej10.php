<?php

$limite = 5;

echo "Tabla de multiplicar del 1 al $limite <br>";

for ($i=1; $i <= $limite ; $i++) { 
    echo "Tabla de $i: ";
    for ($j=1; $j <= 12  ; $j++) { 
        echo $i * $j;
        echo "  ";
    }
    echo "<br>";
}

?>