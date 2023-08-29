<?php

function tabla($arg){
    echo "<table border=2>";
    echo "<tr>";
    echo "<td><b>APELLIDO</b></td>";
    echo "<td><b>NOMBRE</b></td>";
    echo "<td><b>DNI</b></td>";
    echo "</tr>";
    foreach ($arg as $key => $value) {
        echo "<tr>";
        echo "<td>$value[0]</td>";
        echo "<td>$value[1]</td>";
        echo "<td>$value[2]</td>";
        echo "</tr>";
    }
    echo "</table>";
}

$personas = array(["Homola", "Facundo", "39092195"], ["Sanchez", "Silvia", "14296377"], ["Homola", "Geronimo", "60333123"]
, ["Homola", "Rauly", "36227001"], ["Homola", "Raul", "13772570"]);

tabla($personas);

?>