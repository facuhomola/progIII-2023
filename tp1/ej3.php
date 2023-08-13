<!--Identifique los errores del siguiente código:-->
<?php
    $x = -1;
    $y = 9;
    $suma = x + y; # no aparece el signo $, es decir, no esta definida la constante x e y
    print("El valor de x es <i>$x<i>") #falta punto y coma
    <br /> # debe estar dentro de la sentencia echo "";
    print("El valor de y es <i>$y</i><br />"; # falta cerrar parentesis
    print("La suma es <b><i>$suma</i></b><br />");
?>;