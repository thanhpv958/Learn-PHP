<?php
class Cat {
    public $name;
    public $age;
    static public $color;

    public function __construct($name = 'Doremon', $age = 10, $color = 'blue') {
        $this->name = $name;
        $this->age = $age;
       self::$color = $color;
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
        echo 'Color - self: ' . self::$color . '<br>';
        echo 'Color - class: ' . Cat::$color . '<br>';
    }
}