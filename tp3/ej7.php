<?php

trait Ordenamenor{ //ordena de menor a mayor
    public function ordenar($arg){
        asort($arg);
        foreach ($arg as $key => $value) {
            echo "$value  ";
        }
    }
}

trait Ordenamayor{
    public function ordenar2($arg){
        arsort($arg);
        foreach ($arg as $key => $value) {
            echo "$value  ";
        }
    }
}

class listaNumeros{
    use Ordenamenor, Ordenamayor;
    private $arregloNum = array();
    
    public function __construct($arregloNum) {
        $this->arregloNum = $arregloNum;
    }

    public function mostrar(){
        foreach ($this->arregloNum as $key => $value) {
            echo "$value  ";
        }
    }

    public function __get($propiedad){
        if (property_exists($this, $propiedad)) {
            return $this->$propiedad;
        }
    }

    public function __set($propiedad, $valor){
        if (property_exists($this, $propiedad)) {
            $this -> $propiedad = $valor;
        }
    }

}

$lista1 = array(22, 15, 1, 3, 10, 12);
$arr = new listaNumeros($lista1);
$arr->mostrar(); echo "<br> arreglo ordenado de menor a mayor: ";
$arr->ordenar($arr->__get("arregloNum")); echo "<br> Arreglo ordenado de mayor a menor: ";
$arr->ordenar2($arr->__get("arregloNum"));


?>