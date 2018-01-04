<?php
    require_once './cat.class.php';

    class Lion extends Cat {
       public function showInfo() {
           parent::showInfo();
           echo 'Lion';
       }
    }