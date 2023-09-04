<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 8 - guardar</title>
</head>
<body>

	<style type="text/css">
		h2{
			color: darkblue;
			font-family: monospace;
			font-size: 25px;
			padding: 2%;
			text-align: left;
			margin: 0;
			width: 45%;
			height: 30px;
			font-style: italic;
		}
		#datos{
			font-family: arial;
			font-size: 22px;
			padding: 1%;
			background-color: lightblue;
			border: solid black;
			color: black;
			width: 45%;
			margin-bottom: 2%;
		}
		#boton{
			width: 160px;
			height: 55px;
			font-size: 17px;
			padding: 1%;
			background-color: darkgreen;
			color: white;
			border-radius: 15px;
			text-align: center;
			text-decoration-line: none;
			margin-top: 1%;
		}
		#boton:hover{
			background-color: darkgreen;
			color: white;
			opacity: 90%;
		}
	</style>

	<?php

		$titulo = $_POST['titulo'];
		$texto = $_POST['texto'];
		$categoria = $_POST['categoria'];
		$archivo = $_POST['archivo'];
		if (strcmp($archivo, "") == 0) {
			$archivo = "nombreImagen";
		}
		echo "<h2>Noticia Guardada</h2>";
		echo "<div id=datos>";
		echo "<b>Titulo: </b>$titulo <br>";
		echo "<b>Texto: </b>$texto <br>";
		echo "<b>Categoria: </b>$categoria <br>";
		echo "<b>Nombre de archivo: </b>$archivo <br>";
		echo "</div>";
		echo "<a id=boton href=insertar.php>Insertar Nueva Noticia</a>";

		if ($file = fopen("archivo.txt", "r") == false) {
			$file = fopen("archivo.txt", "w");
		 	echo "<h4>No existe el archivo, creando archivo...</h4>";
		 	fwrite($file, $titulo . PHP_EOL);
			fwrite($file, $texto . PHP_EOL);
			fwrite($file, $categoria . PHP_EOL);
			fwrite($file, $archivo . PHP_EOL);
			fclose($file);
			echo "<h4>Archivo creado</h4>";
		}else{
			echo "<h4>Sobreescribiendo archivo...</h4>";
			$file = fopen("archivo.txt", "a+");
		 	fwrite($file, $titulo . PHP_EOL);
			fwrite($file, $texto . PHP_EOL);
			fwrite($file, $categoria . PHP_EOL);
			fwrite($file, $archivo . PHP_EOL);
			fclose($file);
			echo "<h4>Archivo sobreescrito</h4>";
		}
	

	?>
</body>
</html>