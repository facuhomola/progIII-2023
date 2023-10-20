<html><head><title>User Authentication</title></head>
<body>
<?php
if (isset($_POST["user"]) && isset($_POST["pass"])) {
      $pwdb = mysqli_connect("localhost", "root", "1234", "auth");
      mysqli_query($pwdb, "INSERT INTO users (user, pass) VALUES ('" . $_POST["user"] . "', '" . crypt($_POST["pass"], "pw") . "')") or die("Error al cargar el usuario");
?>
Usuario
<?php
   echo htmlspecialchars($_POST["user"]) . " : " .crypt($_POST["pass"], "pw");
?>
      agregado.
<?php
}
?>
<form method="post">
User: <input type="text" name="user" /><br />
Password: <input type="password" name="pass" /><br />
<input type="submit" name="Encrypt!" />
</form>
</body>
</html>
