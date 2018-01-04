<?php
    // ini_set('display_errors', 'off'); // tắt hiển thị lỗi

    // ini_set('log_errors', 'on');
    // ini_set('error_log', 'php_error.log');

    error_reporting(0);

    foreach ($array as $key => $value) {
       $html .=$value;
    }