<?php
//    function testFunction($name, $year) {
//        echo "$name borned in $year <br>";
//        var_dump($name);
//    }

//    testFunction("Thanh", 1998);

    //Tham chiếu
    // $value =1;
    // function changeValue(&$value) {
    //     $value= 20;
    // }

    // changeValue(30);

//     $a = 10;
//     function change_Value(&$value) {
//         $value =20;
//     }
//    change_Value($a);
//    echo $a;

    echo date("Y/m/d h:i:sa") . "<br>";

    $d=strtotime("next Sunday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
    $ngay = '2017-10-08';
    echo date("Y/m/d", strtotime('+2 month' , strtotime($ngay)));
?>