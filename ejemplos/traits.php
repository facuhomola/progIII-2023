<?php
trait HolaMundo {
    public function decirHola() { echo '¡Hola Mundo!'; }
}

class ElMundoNoEsSuficiente {
    use HolaMundo;
    public function decirHola() {
        echo '¡Hola Universo!';
    }
}

$o = new ElMundoNoEsSuficiente();
$o->decirHola();

?>