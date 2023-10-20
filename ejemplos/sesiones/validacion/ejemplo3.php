<?php
if (isset($_SERVER["PHP_AUTH_USER"])) {
   $user = $_SERVER["PHP_AUTH_USER"];
   $pass = $_SERVER["PHP_AUTH_PW"];
} /*elseif (isset($_SERVER["HTTP_AUTHORIZATION"])) {
  if (substr($_SERVER["HTTP_AUTHORIZATION"], 0, 5) == "Basic") {
    $userpass = split(":", base64_decode(substr($_SERVER["HTTP_AUTHORIZATION"], 6)));
       $user = $userpass[0];
       $pass = $userpass[1];
     }
  }*/

if (!isset($user) || !isset($pass) || $user!="php5" || $pass!="iscool") {
    header("WWW-Authenticate: Basic realm=\"Area Protegida\"");
    header("HTTP/1.0 401 Unauthorized");
} else {
     echo("BIENVENIDO, ".$user."!!");
}
?>
