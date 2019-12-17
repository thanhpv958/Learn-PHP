<?php
    $content = file_get_contents('https://www.vietcombank.com.vn/');

    $pattern = '#(?<=Content_HomeSideBar_RatesBox_ExchangeRates_ExrateView">).*(?=</table>)#simu';
    /*
        i: ko phân biệt chữ hoa chữ thường
        m: nhiều dòng
        u: utf-8
        U: dùng khi sử dụng .*?
        s: hiển thị khi có nhiều dòng và modifier đc set
    */
    preg_match($pattern,$content,$matches);

    echo '<pre>';
    print_r($matches);
    echo '</pre>';
    
    