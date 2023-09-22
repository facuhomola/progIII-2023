<?php

interface printable {
    public function printme();
}

abstract class Number {
    private $value;
    abstract public function value();
    public function reset() {
        $this->value = NULL;
    }
}

class Integer implements printable {

    private $value;
    function __construct($value) {
        $this->value = $value;
    }

    public function getValue() {
        return (int)$this->value;
    }
    public function printme() {
        echo (int)$this->value;
    }

}

/* Crear una función que requiera la interfaz printable. */
function printNumber (printable $myObject) {
/* Si se llama a esta función, podemos estar seguros de que tiene un método printme() */
    $myObject->printme();
}

$inst = new Integer(10);
printNumber($inst);

?>