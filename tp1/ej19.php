<?php

$arreglo = array("Limon" => 23, "Play" => "pc", "Auto" => "amarok", "Manzana" => 28, "Naranja" => 10);

echo "<table border=2>";

echo "<tr>";
echo "<td><b>CLAVE</b></td>";
foreach ($arreglo as $key => $value) {
    echo "<td>$key</td>";
}
echo "</tr>";

echo "<tr>";
echo "<td><b>VALOR</b></td>";
foreach ($arreglo as $key => $value) {
    echo "<td>$value</td>";
}
echo "</tr>";
echo "</table>";

?>