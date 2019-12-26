<?php

    $data = [
        'name' => 'phan van thanh',
        'age'  => 123,
        'email'=> 'thanhpv958@gmail.com'
    ];

    $filters = [
        'name' => [
            'filter' => FILTER_CALLBACK,
            'options'=> 'ucwords'
        ],
        'age' => [
            'filter' => FILTER_VALIDATE_INT,    
        ],
        'email' => [
            'filter' => FILTER_VALIDATE_EMAIL
        ]
    ];

    $result = filter_var_array($data, $filters);
    echo '<pre>';
    print_r($result);
    echo '</pre>';

    