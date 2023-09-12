<?php

class ParentClass {
    public function callMe() {
    echo "Parent called!\n";
    }
    }
    class ChildClass extends ParentClass {
        public function callMe() {
        echo "Child called!\n";
    }
}
$child = new ChildClass;
$child->callMe();

?>