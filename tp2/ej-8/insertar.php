<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 8</title>
</head>
<body>

	<style type="text/css">
		h3{
			font-size: 20px;
			color: blue;
			padding: 2%;
			font-family: fantasy;
			margin: 0;
		}
		p{
			font-size: 15px;
			font-style: italic;
			font-family: sans-serif;
		}
		form{
			padding: 2%;
			font-family: arial;
			border: solid lightblue;
			width: 50%;
		}
		form input{
			margin-top: 1%;
			margin-bottom: 1%;
		}
		.msjerror{
			color: red;
			font-size: 17px;
			font-family: monospace;
			margin: 1%;
		}
	</style>

	<h3>Subida de ficheros</h3>
	<p>Insertar nueva noticia</p>

	<form name="form" id="form" action="guardar.php" method="POST">
		<b>Titulo: (*) </b> <input type="text" name="titulo"> <br>
		<b>Texto: (*) </b> <textarea cols="30" rows="10" name="texto"></textarea> <br> 
		<b>Categoría: </b>
			<select name="categoria">
				<option value="Todos">Todos</option>
				<option value="Ofertas">Ofertas</option>
				<option value="Deportes">Deportes</option>
				<option value="Internacional">Internacional</option>
				<option value="Economia">Economia</option>
				<option value="País">País</option>
				<option value="Espectaculos">Espectaculos</option>
			</select> <br>
		<b>Imagen: </b> <input type="file" name="archivo" value="Seleccionar Imagen"> <br>
		<button type="button" name="botonEnviar" onclick="enviar();">Insertar noticia</button>
	</form>
	<p class="msjerror" id="errorTitulo"></p>
	<p class="msjerror" id="errorTexto"></p>

	<script type="text/javascript">
		function enviar(){
			var titulo = document.form.titulo.value;
			var texto = document.form.texto.value;
			if (titulo.length == 0 || texto.length == 0){
				alert("Debe completar los campos obligatorios (*)");
				return;
			}else{
				if (titulo.length < 5){
					document.getElementById('errorTitulo').innerHTML = "El titulo debe contener al menos 5 caracteres";
				}else{
					if (texto.length < 15){
						document.getElementById('errorTexto').innerHTML = "El texto debe contener al menos 15 caracteres";
					}else{
						alert("Los campos estan completados");
						document.form.submit();
					}
				}
			}
		}
	</script>

</body>
</html>