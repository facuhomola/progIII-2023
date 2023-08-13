<?php

$a = 15;
$b = 94;
$c = 73;

echo "Valor de variables <br> \$a: $a <br> \$b: $b <br> \$c: $c <br>";

if ($a > $b and $a > $c) {
    echo "Variable de mayor valor: \$a - $a";
}elseif ($b > $a and $b > $c) {
    echo "Variable de mayor valor: \$b - $b";
}else{
    echo "Variable de mayor valor: \$c - $c";
}

?>