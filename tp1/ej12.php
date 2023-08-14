<?php

$continentes = array("EUROPA" => ["España","Francia", "Reino Unido"], "AMERICA" => ["Estados Unidos", "Canada", "Mexico"]);

$paises = array("España" => "Madrid", "Francia" => "Paris", "Reino Unido" => "Londres", "Estados Unidos" => "Whashington", "Canada" => "Toronto", "Mexico" => "Ciudad de Mexico");

#$i = 0;
echo "<table border=2>";
foreach ($continentes as $key => $value) {
    echo "$key: ";
    for ($i=0; $i < count($value); $i++) { 
        foreach ($paises as $llave => $valor) {
            if (strcmp($llave, $value[$i]) == 0) {
                echo " [$llave -> $valor]  ";
            }
        }
    }
    echo "<br>";
}
echo "</table>";

?>