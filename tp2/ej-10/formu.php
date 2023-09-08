<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10 - Formulario</title>
</head>
<body>
    <h4>Formulario de registro</h4>
    <form action="confirm.php" method="post">
        Nombre completo <input type="text" name="nombre"> <br>
        Direccion <input type="text" name="direccion"> <br>
        Correo electronico <input type="mail" name="correo"> <br>
        Contraseña <input type="password" name="contrasenia"> <br>
        Fecha de nacimiento <input type="date" name="fecha"> <br>
        Sexo 
        <select name="sexo" id="">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select> <br>
        Tema de interes  
        <input type="checkbox" name="interes[]" value="juegos"> juegos  
        <input type="checkbox" name="interes[]" value="lectura"> lectura  
        <input type="checkbox" name="interes[]" value="deportes"> deportes  
        <input type="checkbox" name="interes[]" value="peliculas"> peliculas <br> 
        Aficiones <br> <textarea name="aficiones" id="" cols="30" rows="15"></textarea> <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>