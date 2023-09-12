<?php

//Ejemplo de POO

class clasePersona {
    private $nombre;
    private $anio_nacimento;
    private $edad;
    public $estado_civil;
    public function __construct($nombre, $anio_nacimiento) {
        $this->nombre = $nombre;
        $this->anio_nacimiento = $anio_nacimiento;
    }
    private function calcular_edad($anio_actual) {
        $edad = $anio_actual - $this->anio_nacimiento;
        return $edad;
    }
    public function obtener_nombre() {
        return $this->nombre;
    }

    public function obtener_edad() {
        $anio_actual = date("Y", mktime());
        $this->edad = $this->calcular_edad($anio_actual);
        return $this->edad;
    }
}

$p1 = new clasePersona("Facundo Homola", 1995);
$p1->estado_civil = "Soltero";

echo $p1->obtener_nombre();
echo "<br>";
echo $p1->obtener_edad();

?>