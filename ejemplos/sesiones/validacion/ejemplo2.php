<?php
if (isset($_SERVER["PHP_AUTH_USER"])) {
   echo ("<h3>Usuario / password: ");
   echo (htmlspecialchars($_SERVER["PHP_AUTH_USER"])." / ". 
            htmlspecialchars($_SERVER["PHP_AUTH_PW"]));
   echo "</h3>";

} else {
    header("WWW-Authenticate: Basic realm=\"Area Protegida\"");
    header("HTTP/1.0 401 Unauthorized");
}

?>
