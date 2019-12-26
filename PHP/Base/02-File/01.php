<?php
    
    // if(file_exists('../01-base/'))  // Kiểm tra sự tồn tại của file
    // {
    //     echo 'Ton tai';
    // }
    // else {
    //     echo 'ko ton tai';
    // }

    $filename = '../01-base/';
    echo filetype($filename) . '<br>';
    echo filesize($filename) . '<br>';