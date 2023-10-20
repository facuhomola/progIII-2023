<html><head><title>User Authentication</title></head>
<body>
<?php
if (isset($_POST["user"]) && isset($_POST["pass"])) {
      $pwdb = mysql_connect("localhost", "root", "1234");
      mysql_select_db("auth", $pwdb);
      mysql_query("INSERT INTO users (user, pass) VALUES ('" . $_POST["user"] . "', '" . md5($_POST["pass"], "pw") . "')", $pwdb) or die("Error al cargar el usuario");
?>
Usuario
<?php
   echo htmlspecialchars($_POST["user"]) . " : " .md5($_POST["pass"], "pw");
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
