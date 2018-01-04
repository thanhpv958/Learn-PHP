<?php
    // $pattern = '/a*b/';
    // $subject = 'aabc abc bc';

    // preg_match($pattern,$subject, $matches);

    // echo '<pre>';
    // print_r($matches);
    // echo '</pre>';

    /*
        *  0 or more
        +  1 or more
        ?  0 or 1

        *? = 0
        +? = 1
        ?? = 0

        \w = /[A-Za-z0-9]/
        \s = Khoảng trắng
        \S = Ký tự bất kì ko phải khoảng trắng
        \d = chữ số bất kì [0-9]
        \D = Ký tự bất kỳ không phải là chữ số

        \A = tìm từ đầu chuỗi nguồn, tương đương ký hiệu ^
        \z = tìm từ cuối chuỗi nguồn, tương đương ký hiệu $

        i = is not case = ko phân biệt chữ hoa chữ thường

        Email: ^[a-z][\w_\.]{4,32}@[\w]{2,}(\.[a-z]{2,4}){1,2}$
        Tên đăng nhập: ^[a-z_][\w\s_\.]{4,32}$
        Password: ^(?=.+\d)(?=.+\W)(?=.+[A-Z]).{8,8}$
    */