<?php

$texto = $_POST['texto'];
$busca = $_POST['campo'];
$genero = $_POST['genero'];

echo "Estos son los datos introducidos: <br>";
echo "<ul>";
echo "<li>Texto de busqueda: $texto </li> <br>";
echo "<li>Buscar en: $busca </li> <br>";
echo "<li> Género: $genero </li>";
echo "</ul>";

?>