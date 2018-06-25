<?php
    include_once "01-trait.php";

    class People
    {
        use SetGetShop;
    }

    $sinhVienA = new People;
    $sinhVienA->setName('Phan Van Thanh');
    echo $sinhVienA->getName();