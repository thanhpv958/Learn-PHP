<?php
    // class Animal {
    //     private static $name;

    //     public function setName($name) {
    //         Animal::$name = $name;
    //         echo Animal::$name;
    //     }
    // }

    // $animal = new Animal();
    // $animal->setName('abc');

    abstract class Animal {

        // public static function whichClass() {
        //     echo "I am an Animal!";
        // }
    
        // public static function sayClassName() {
        //     self::whichClass();
        // }

        public abstract function input();
        public function output() {
            echo 'abc';
        }
    }

    class Lion extends Animal {
        public function input() {
            echo 'input Lion';
        }

    }
    
    $animalObj = new Lion();
    $animalObj->input();
?>