<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 - Mostrar</title>
</head>
<body>
    <?php
    
    if ($file = fopen("./../ej-8/archivo.txt", "r") == false) {
        echo "No se encontro el archivo o no existe";
    }else{
        $file = fopen("./../ej-8/archivo.txt", "r");
        while (!feof($file)){
            $titulo = fgets($file); 
            echo "<h3>$titulo</h3>";
            $cuerpo = fgets($file); 
            echo "<p>$cuerpo</p>";
            $categoria = fgets($file);
            echo "Categoria: $categoria"; echo "<br>";
            $imagen = fgets($file); 
            echo "$imagen"; echo "<br> <br>";
        }
        fclose($file);
    }
    
    ?>
</body>
</html>