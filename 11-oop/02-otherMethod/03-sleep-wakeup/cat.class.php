<?php
    class Cat {
        private $name;
        private $age;

        public function __construct($name = 'Doremon', $age = 12)
        {
            $this->name = $name;
            $this->age = $age;
        }
    }