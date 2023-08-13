<?php

$filas = 10;
$columnas = 7;

echo "<table border=1>";
for ($i=0; $i < $filas; $i++) { 
    echo "<tr>";
    for ($j=0; $j < $columnas; $j++) { 
        echo "<th> Fila $i - Columna $j </th>";
    }
    echo "</tr>";
}
echo "</table>";

?>