<?php
if (isset($_SERVER["PHP_AUTH_USER"])) {
     $user = $_SERVER["PHP_AUTH_USER"];
     $pass = $_SERVER["PHP_AUTH_PW"];
} /*elseif (isset($_SERVER["HTTP_AUTHORIZATION"])) {
     if (substr($_SERVER["HTTP_AUTHORIZATION"], 0, 5) == "Basic") {
         $userpass = preg_split(":", base64_decode(substr($_SERVER["HTTP_AUTHORIZATION"], 6)));
         $user = $userpass[0];
         $pass = $userpass[1];
     }
}*/
$auth = false;       $pwfile = fopen("users.txt", "r");
while (!feof($pwfile)) {

     $data = preg_split('/:/', rtrim(fgets($pwfile, 1024)));
     if ($user == $data[0] && crypt($pass, "pw") == $data[1]) {
        $auth = true;
        break;
    }
}
fclose($pwfile);

if (!$auth) {
     header("WWW-Authenticate: Basic realm=\"Area Protegida\"");
     header("HTTP/1.0 401 Unauthorized");
} else {     echo("BIENVENIDO, ".$user."!!");   }
?>
