<html><head><title>Autenticacion de Usuarios</title></head>
<body>
<?php
if (isset($_POST["user"]) && isset($_POST["pass"]) &&
 	strtolower($_POST["user"]) == "user1" && $_POST["pass"] == "1234") {
?>
<h2>Bienvenido! Usted ha ingresado al Sitio de Programaci&oacute;n III</h2>
<?php
} else {
?>
Por Favor Ingrese sus datos!
<form method="post">
Usuario: <input type="text" name="user" /><br />
Password: <input type="password" name="pass" /><br />
<input type="submit" name="Login" />
</form>
<?php
}
?>
</body>
</html>
