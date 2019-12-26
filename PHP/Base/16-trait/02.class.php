<?php
    include_once "02-trait.php";

    class People
    {
        use SetGetShop;
        use SetGetCustomer {
            SetGetCustomer::getAll insteadof SetGetShop;
        }
    }

    $p1 = new People();
    echo $p1->getAll();