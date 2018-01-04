<?php
class Cat {
    public $name;
    public $age;
    public $color;

    public function __construct($name = 'Doremon', $age = 10, $color = 'blue') {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getColor() {
        return $this->color;
    }

    public function showInfo() {
        echo 'Name: ' . $this->getName() . '<br>';
        echo 'Age: ' . $this->getAge() . '<br>';
        echo 'Color: ' . $this->color . '<br>';
    }   
}