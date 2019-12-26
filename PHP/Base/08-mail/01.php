<?php
    $to = "thanhpv62@wru.vn";
    $subject = "Email test";
    $message = 'This is test';
    $header = "From: thanhpv958@gmail.com";

    if(mail($to, $subject, $message, $header) == true) {
        echo 'Sucesss';
    } else {
        echo 'Fail';
    }
    