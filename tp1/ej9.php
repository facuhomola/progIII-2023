<?php

//alimentamos el generador de aleatorios
mt_srand (time());
//generamos un número aleatorio
#$numero_aleatorio = mt_rand(1,20);

$x = mt_rand(1,20); #filas
$y = mt_rand(1,20); #columnas

$i = 1;
$j = 1;

echo "<table border=1>";

while ($i <= $x) {
    echo "<tr>";
    while ($j <= $y) {
        echo "<th>Fila $i - Columna $j</th>";
        $j++;
    }
    echo "</tr>";
    $j=1;
    $i++;
}

echo "</table>";

?>
