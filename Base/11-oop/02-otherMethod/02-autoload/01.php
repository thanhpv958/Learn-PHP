<?php
    function __autoload($className) {
        $path = './class/';
        require_once $path . "{$className}.class.php";
    }

    $cat = new Cat();
    $cat->showInfo();
    

    /*
        autoload: tự động nạp các đường dẫn đến các class
        Hạn chế dùng vì nó sẽ load tất cả các class trong $path -> chậm web
    */