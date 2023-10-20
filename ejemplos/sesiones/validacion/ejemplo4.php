<html><head><title>User Authentication</title></head>
<body>
<?php
if (isset($_POST["user"]) && isset($_POST["pass"])) {
  $pwfile = fopen("users.txt", "a");
  fputs($pwfile, $_POST["user"] . ":" . crypt($_POST["pass"], "pw") . "\n");
  fclose($pwfile);
?>
Usuario   
<?php
  echo htmlspecialchars($_POST["user"]).":".crypt($_POST["pass"], "pw");
?>
  Agregado.
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
