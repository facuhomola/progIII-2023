<html><head><title>User Authentication</title></head>
<body>
<?php
	$auth = false;
	extract($_POST);
	if (isset($_POST["user"]) && isset($_POST["pass"])) {
      $pwdb = mysqli_connect("localhost", "root", "","auth") or die ("Error en la conexion");
	  $sql= "SELECT user, pass FROM users where user='".$user."' and pass ='".crypt($pass,"pw")."'";
	  echo $sql."<br>";
	  $rows = mysqli_query($pwdb, $sql) or die ("Error!!!");
      echo $auth;
	  if (($row = mysqli_fetch_array($rows)) && (!$auth)) {
	    if ($user == $row["user"] && crypt($pass,"pw") == $row["pass"]) {
		    $auth = true;
		}
	
	}
	if($auth){
	  session_start();
	  $_SESSION["usuario"]=$_POST["user"];
	  header("location:sesion.php?".session_id());
	}else{
		echo "<h2>Datos incorrectos. Reintente</h2>";
	?>
	<form method="post">
	User: <input type="text" name="user" /><br />
	Password: <input type="password" name="pass" /><br />
	<input type="submit" name="Encrypt!" />
	</form>
<?php
	
	}

} else {
?>
<form method="post">
User: <input type="text" name="user" /><br />
Password: <input type="password" name="pass" /><br />
<input type="submit" name="Encrypt!" />
</form>
<?php
}
?>

</body>
</html>