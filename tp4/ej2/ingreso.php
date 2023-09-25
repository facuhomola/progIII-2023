<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp4 - ej1</title>
</head>
<body>
    <h4>Completar los campos del vuelo</h4>
    <form action="vuelo.php" method="post">
        Origen <input type="text" name="origen"> <br>
        Destino <input type="text" name="destino"> <br>
        Fecha de vuelo <input type="date" name="fecha"> <br>
        Categoria - Precio 
        <select name="precio" id="">
            <option value="55000">Semi cama - $55000</option>
            <option value="65000">Cama - $65000</option>
            <option value="80000">Ejecutivo - $80000</option>
        </select> <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>