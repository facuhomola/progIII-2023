<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h4>Formulario de registro</h4>
    <form method="post" action="calcula.php">
        Nombre <input type="text" name="nombre"> <br>
        dni <input type="number" name="dni"> <br>
        Sueldo bruto <select name="sueldo" id="">
            <option value="1800">$1800</option>
            <option value="2300">$2300</option>
            <option value="2700">$2700</option>
            <option value="3500">$3500</option>
        </select> <br>
        Horas extras trabajadas <input type="number" name="horas"> <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>