<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 6 - PHP</title>
</head>
<body>

	<style type="text/css">
		table {
			background-color: lightblue;
			font-size: 15px;
			text-align: center;
			font-family: fantasy;
		}
		h2{
			font-family: monospace;
			font-size: 35px;
			background-color: gray;
			text-align: center;
		}
		td{
			width: 160px;
			height: 45px;
		}
	</style>

	<?php

		echo "<h2>Datos Ingresados</h2>";

		$nombre = $_POST['nombre'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$correo = $_POST['correo'];
		$fecha = $_POST['fecha'];

		$datos = array(
			"Nombre y Apellido" => $nombre,
			"Dirección" => $direccion,
			"Teléfono" => $telefono,
			"Fecha de Nacimiento" => $fecha,
			"Correo Electrónico" => $correo, 	
		);

		echo "<table border=3>";
		foreach ($datos as $key => $value) {
			echo "<tr>"; 
				echo "<td><b> $key </b></td>"; echo "<td>$value</td>";
			echo "</tr>";
		}
		echo "</table>";

	?>

</body>
</html>