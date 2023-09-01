<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Buscar</title>
</head>
<body>
    <h4>Formulario simple</h4>
    <form action="resultados.php" method="post">
        Texto a buscar: <input type="text" name="texto"> <br>
        Buscar en: <input type="radio" name="campo" value="Titulos de canción"> Titulos de canción 
        <input type="radio" name="campo" value="Nombres de album"> Nombres de album 
        <input type="radio" name="campo" value="Ambos"> Ambos campos <br>
        Género musical: <select name="genero" id="">
            <option value="Todos">Todos</option>
            <option value="Rock">Rock</option>
            <option value="Jazz">Jazz</option>
            <option value="Pop">Pop</option>
            <option value="Clasico">Clasicos</option>
        </select> <br>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>