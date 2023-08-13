<?php

$x = 6; #filas
$y = 8; #columnas

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