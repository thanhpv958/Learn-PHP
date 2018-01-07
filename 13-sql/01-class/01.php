<?php
    require_once 'Database.class.php';

    $db = new Database('localhost', 'root','','learnphp');

    $query = "SELECT * FROM user WHERE username='thanhpv958'";
    $result = $db->sqlQuery($query);
    $db->exportData($result);
    echo '<pre>';
    print_r($abc);
    echo '</pre>';

    
    