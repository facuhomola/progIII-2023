<?php

$imagenes = array("https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/711px-PHP-logo.svg.png"
, "https://1000marcas.net/wp-content/uploads/2020/11/Java-logo.png", "https://www.python.org/static/community_logos/python-logo-master-v3-TM-flattened.png"
, "https://w7.pngwing.com/pngs/826/607/png-transparent-linux-from-scratch-training-lxc-operating-systems-linux-logo-vertebrate-bird.png");

foreach ($imagenes as $key => $value) {
    echo "<img src=$value width=275 height=245> <br>";
}

?>