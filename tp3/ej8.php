<?php

interface Computer{
    public function copy();
    public function paste();
}

trait CPU{
    public function copy(){
        echo "Funcion Copy() <br>";
    }
}

class User implements Computer{
    use CPU;
/*    public function copy(){
        echo "Funcion Copy() <br>";
    }
*/
    public function paste(){
        echo "Funcion Paste() <br>";
    }
}

$u1 = new User();
$u1->copy();
$u1->paste();

?>