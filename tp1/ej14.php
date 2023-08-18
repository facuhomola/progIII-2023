<?php

$var = "Complejo Quinta Resort se encuentra ubicado a tan sólo 25 calles de la plaza principal
de Merlo. La Quinta es un emprendimiento familiar, atendido por sus dueños, cuyo
único objetivo es brindarles a todos sus pasajeros un ambiente amigable y permitirles
gozar de la naturaleza y la paz de las sierras. El ZZZ cuenta con cabañas con capacidad
hasta 8 personas las cuales se encuentra completamente equipadas, posee Split,
Calefactores y hogar; TV por cable. Además el ZZZ tiene 5 cabañas, Boysen, Cassis,
Fresa, Corinto y Mora: las capacidades de las cabañas varían, van desde la capacidad
máxima de 4 personas hasta 8. Todas ellas cuentan con Baño privado, split en las
habitaciones, calefactor, cocina comedor; servicio de TV por cable, Conexión para
Internet T10 y DSL, teléfono DDN y DDI.";


$cantCaracteres = strlen($var);
$cantOraciones = 0;
$cant_a = 0;

for ($i=0; $i < strlen($var); $i++) { 
    if ( strcmp($var[$i], '.') == 0) {
        $cantOraciones++;
    }
}

$var2 = explode(" ", $var);

$newvar = str_replace("ZZZ", "Complejo Z", $var);

echo "<b>Texto de variable: </b> <br> $var <br>";
echo "<b>Cantidad de caracteres: </b>: $cantCaracteres <br>";
echo "<b>Cantidad de oraciones: </b>: $cantOraciones <br>";
echo "<b>Cantidad de palabras con la letra a:</b> $cant_a <br> <br>";
echo "<b> Nuevo texto de variable reemplazando ZZZ: </b> <br> $newvar";

?>