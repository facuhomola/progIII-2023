<?php

//alimentamos el generador de aleatorios
mt_srand (time());
//generamos un número aleatorio
#$numero_aleatorio = mt_rand(0,5);

$filas = mt_rand(1,20);
$columnas = mt_rand(1,20);

echo "<table border=1>";
for ($i=1; $i <= $filas; $i++) { 
    echo "<tr>";
    for ($j=1; $j <= $columnas; $j++) { 
        echo "<th> Fila $i - Columna $j </th>";
    }
    echo "</tr>";
}
echo "</table>";

?>
