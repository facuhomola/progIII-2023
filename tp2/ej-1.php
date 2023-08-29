<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = $num1 / $num2;

echo "Valores ingresados: $num1 -- $num2 <br>";

echo "<b>Suma</b>: $suma <br>";
echo "<b>Resta</b>: $resta <br>";
echo "<b>Multiplicación</b>: $multiplicacion <br>";
if ($num2 != 0) {
    echo "<b>División</b>: $division";
}else{
    echo "<b>División: Error (No se puede dividir un número por cero)</b>";
}

?>