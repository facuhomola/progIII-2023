<?php

class empleado {
    private $nombre;
    private $apellido;
    private $dependencia;
    public function __construct($nombre,$apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    public function __set($var, $valor) {
        $this->$var = $valor;
    }
    public function __get($var) {
        return $this->$var;
    }
}

$empleado = new empleado('Andres','Lara');
$empleado -> dependencia = 'Programador Junior';
echo 'Empleado es: '.$empleado->nombre.' - '.$empleado->apellido.'';
echo 'Y la dependencia es: '. $empleado->dependencia;

?>