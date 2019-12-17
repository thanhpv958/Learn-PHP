<?php
    // $pattern = '/[0-9]/';
    // $subject = 'd';
    // if (preg_match($pattern, $subject)){
    //     echo 'Chuỗi regex so khớp';
    // } else {
    //     echo 'error';
    // }

    // $pattern = '/[a2b]/';
    // $subject = 'a';
    // if (preg_match($pattern, $subject)){
    //     echo 'Chuỗi regex so khớp';
    // }

    // $pattern ='/^[a-z]{5}$/';
    // $subject = 'abcaba';
    // if(preg_match($pattern, $subject)) {
    //     echo 'ok';
    // } else {
    //     echo 'error';
    // }

    // $pattern = '/(A|B)/';
    // $subject = 'C';
    // if (preg_match($pattern, $subject)){
    //     echo 'Chuỗi regex so khớp';
    // }
    $pattern = '/[a-z]*/';
    $subject = 'dđs';
    // if (preg_match($pattern, $subject)){
    //     echo 'Chuỗi regex so khớp';
    // }

    preg_match($pattern, $subject,$mathes);

    echo '<pre>';
    print_r($mathes);
    echo '</pre>';

    // \d - Chữ số bất kỳ ~ [0-9]
    // \D - Ký tự bất kỳ không phải là chữ số (ngược với \d) ~ [^0-9]
    // \w - Ký tự từ a-z, A-Z, hoặc 0-9 ~ [a-zA-Z0-9]
    // \W - Ngược lại với \w (nghĩa là các ký tự không thuộc các khoảng: a-z, A-Z, hoặc 0-9) ~[^a-zA-Z0-9]
    // \s - Khoảng trắng (space)
    // \S - Ký tự bất kỳ không phải là khoảng trắng.