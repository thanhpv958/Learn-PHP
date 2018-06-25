<?php
    trait SetGetShop
    {
        private $name;

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getName()
        {
            return $this->name;
        }

        private function getAll() {
            return "get all in shop";
        }
    }

    trait SetGetCustomer
    {
        private $age;

        public function setAge($age)
        {
            $this->age = $age;
        }

        public function getAge()
        {
            return $this->age();
        }

        private function getAll() {
            return "get all in customer";
        }
    }