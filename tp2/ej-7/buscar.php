<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Buscar</title>
</head>
<body>
    <h4>Formulario simple</h4>
    <form action="resultados.php" method="post" name="form" id="form">
        Texto a buscar: <input type="text" name="texto" id="texto"> <br>
        <p style="color: red; font-size: 18px;" id="msjError"></p> <br>
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
        <button class="btn" type="button" id="btnEnviar" onclick="validar();">Buscar</button>
    </form>

    <script>
        function validar(){
			var texto = document.form.texto.value;
			if (texto.length == 0 ){
				document.getElementById("msjError").innerHTML = "Debe introducir texto de busqueda!";
				//alert("Debe completar los campos solicitados (*)");
			}else{
                alert('Campos completados');
				document.form.submit();
            }
		}
    </script>
</body>
</html>