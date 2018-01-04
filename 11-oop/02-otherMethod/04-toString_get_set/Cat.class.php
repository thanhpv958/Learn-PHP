<?php

class Cat {
    private $name;
    private $age;

    public function __construct($name = 'Doremon', $age = 12)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString()
    {
        return $this->name;
    }

    public function __set($name, $value)
    {
        return $this->$name =$value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function showInfo()
    {
        echo 'Name: ' .$this->name . '<br>';
        echo 'Age: ' . $this->age . '<br>';
    }
}