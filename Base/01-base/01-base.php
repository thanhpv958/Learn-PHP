<?php
    // $a = 1;
    // echo $a ."<br>";
    // var_dump($a);
    // static $a =0;
    // function test(){
    //     global $a;
    //     $a++;
    //     echo $a."<br>";
    // }

    // test();
    // test();
    // test();
    
    // $a=[1,2,3];
    // $a[] =4;
    // for($i=0; $i < count($a);$i++){
    //     echo $a[$i];
    //     echo "<br>";
    // }
    // $arr = ["key1"=> 1, "key2" => 2];
    // echo $arr["key1"];

    // $arr = [
    //     1,
    //     2,
    //     "b" => [
    //         "abc"=> 1,
    //         "abcd" => [
    //             1,2,3
    //         ]
    //     ]
    // ];
    
    // echo $arr["b"]["abcd"][1];
    $abc = [
        '0' => ['ten' => 'abccc', 'sdt' => '45454545'],
        '1' => ['ten' => 'fgfgf', 'sdt' => '565656'],
    ];
    echo '<pre>';
    var_dump($abc);
    echo '</pre>';
    //$abc = ['mang' => $abc];
    foreach ($abc as $value) {
        echo 'key:'.$value. '<br>';
        // foreach ($value as $key1 => $value1) {
        //     echo $value1. '<br>';
        // }
    }
?>