<?php

trait Hola {
    public function decirHola() { echo 'Hola '; }
}
    
trait Mundo {
    public function decirMundo() { echo 'Mundo'; }
}
    
class MiHolaMundo {
    use Hola, Mundo;
    public function decirAdmiracion() { echo '!'; 
    }
}

$o = new MiHolaMundo();
$o->decirHola();
$o->decirMundo();
$o->decirAdmiracion();

?>