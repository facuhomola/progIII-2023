<?php

$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$sueldo = $_POST['sueldo'];
$horas = $_POST['horas'];

$horasExtras = (($sueldo * 0.5) / 100) * $horas;
$retenciones = ($sueldo * 12) / 100;
$neto = $sueldo - $retenciones + $horasExtras;

echo "<h4>Datos del empleado</h4>";
echo "<b>Nombre: </b> $nombre <br>";
echo "<b>Dni: </b> $dni <br>";
echo "<b>Sueldo: </b> $sueldo <br>";
echo "<b>Horas extras trabajadas: </b> $horas <br>";
echo "<b>Pago por horas extras: </b> $horasExtras <br>";
echo "<b>Retenciones fiscales: </b> $retenciones <br>";
echo "<b>Neto a cobrar: </b> $neto <br>";


?>