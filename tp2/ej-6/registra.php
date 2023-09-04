<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form - Ejercicio 6</title>
</head>
<body>

	<style type="text/css">
		form{
			text-align: left;
			font-family: fantasy;
			font-size: 22px;
			background-color: darkblue;
			color: white;
			width: 65%;
			padding: 2%;
		}
		table{
			margin: 2%;
			font-family: monospace;
			background-color: lightblue;
		}
		table td{
			width: 350px;
			text-align: center;
		}
		table th{
			width: 350px;
			text-align: center;
			font-style: italic;
			background-color: #4DA6A6;
		}
		h5{
			color: red;
			font-size: 18px;
			margin: 2%;
			font-family: arial;
		}
		.btn{
			font-family: arial;
		  color: white;
		  font-size: 14px;
		  text-shadow: 1px 1px 0px #7CACDE;
		  box-shadow: 1px 1px 1px #BEE2F9;
		  padding: 10px 25px;
		  border-radius: 10px;
		  border: 2px solid #3866A3;
		  background: #63B8EE;
		  background: linear-gradient(to top, #63B8EE, #468CCF);		
		}
		.btn:hover{
			color: #14396A !important;
  			background: #468CCF;
  			background: linear-gradient(to top, #468CCF, #63B8EE);
		}
		h2{
			background-color: black;
			color: white;
			font-size: 25px;
			font-family: monospace;
			width: 65%;
			cursor: pointer;
			padding: 2%;
		}
	</style>
	<h2>Completar los campos</h2>

	<form action="datos.php" method="POST" name="form" id="form">
		Nombre y Apellido (*) <input type="text" name="nombre" id="nombre"> <br> <br>
		Dirección (*) <input type="text" name="direccion" id="direccion"> <br> <br>
		Teléfono (*) <input type="text" name="telefono" id="telefono"> <br><br>
		Fecha de Nacimiento <input type="date" name="fecha"> <br><br>
		Correo Electrónico (*) <input type="mail" name="correo" id="correo"> <br><br>
		<button class="btn" type="button" id="btnEnviar" onclick="validar();">Enviar</button>
		<!--<input class="btn" type="submit" name="enviar" value="Enviar">-->
		<input class="btn" type="reset" name="reset" value="Limpiar">
	</form>

	<p style="color: red; font-size: 18px;" id="msjError"></p>

	<script>

		function validar(){
			var nombre = document.form.nombre.value;
			var direccion = document.form.direccion.value;
			var telefono = document.form.telefono.value;
			var correo = document.form.correo.value;
			if (nombre.length == 0  || direccion.length == 0 || telefono.length == 0 || correo.length == 0  ){
				document.getElementById("msjError").innerHTML = "Debe completar los campos solicitados (*)";
				//alert("Debe completar los campos solicitados (*)");
			}else{
				if (nombre.length < 3){
					document.getElementById("msjError").innerHTML = "Debe ingresar un nombre valido";
				}else{
					if (direccion.length < 10){
						document.getElementById("msjError").innerHTML = "Debe ingresar una dirección valida";
					}else{
						if (validarMail(correo) == true){
							document.getElementById("msjError").innerHTML = "Debe ingresar un correo electrónico correcto";
						}else{
							if (telefono.length < 10){
								document.getElementById("msjError").innerHTML = "Ingrese correctamente el telefono";
							}else{
								alert('Campos completados');
								document.form.submit();
							}
						}
					}
				}
			}
		}

		function validarMail(valor){
			re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
			if(!re.exec(valor)){
				return true;
			}
			else{
		        return false;
		    }
		}

	</script>

</body>
</html>