<?php
    class User {
        public $userName;
        
        public function infoUser() {
            echo $this->userName . ' was login' .PHP_EOL;
        }
    }

    class Admin extends User {
        public function infoUser() {
            echo $this->userName . ' is Admin' . PHP_EOL;
        }
    }

    // $user = new User();
    // $user->userName = "ABC";
    // $user->infoUser();
    $admin = new Admin;
    $admin ->userName = "ABC";
    $admin -> infoUser();
?>