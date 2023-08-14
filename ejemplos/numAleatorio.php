<?php

//alimentamos el generador de aleatorios
mt_srand (time());
//generamos un número aleatorio
$numero_aleatorio = mt_rand(0,5);
echo $numero_aleatorio;

?>