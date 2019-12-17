<?php
    $config = ini_get_all(); // lấy tất cả content trong .ini file

    // echo '<pre>';
    // print_r($config);
    // echo '</pre>';

    echo $timezone = ini_get('date.timezone');