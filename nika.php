<?php
class Animal {
    public $name;
    public $age;

    public function _onstruct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function walk() {
        echo "Walk";
    }
}
class Cat extends Animal {
    public $color;

    public function __construct($name, $age, $color) {
        parent::__construct($name, $age);
        $this->color = $color;
    }

    function showCatInfo() {
        echo "Cat name: ". $this->name . "\n" . "Cat age: " . $this->age . "\n" . "Cat color: " . $this->color . "\n";
    }
}
$cat = new Cat("Bobo", 2, "red");
echo $cat->showCatInfo();
?>