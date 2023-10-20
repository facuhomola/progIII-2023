<?php
if (isset($_SERVER["PHP_AUTH_USER"])) {
  $user = $_SERVER["PHP_AUTH_USER"];
  $pass = $_SERVER["PHP_AUTH_PW"];
} 
$auth = false;
if($user){
$pwdb = mysqli_connect("localhost", "root", "1234");
mysqli_select_db($pwdb, "auth");
$rows = mysqli_query($pwdb, "SELECT user, pass FROM users where user='".$user."' and pass ='".crypt($pass,"pw")."'") or die ("Error!!!");
if (($row = mysqli_fetch_array($rows)) && (!$auth)) {
  if ($user == $row["user"] && crypt($pass, "pw") == $row["pass"]) {
    $auth = true;
  }
}
}
if (!$auth) {
  header("WWW-Authenticate: Basic realm=\"Area Protegida\"");
  header("HTTP/1.0 401 Unauthorized");
}
echo "Bienvenido $user";
?>
