<?php
    
    if(isset($_COOKIE['lastlogin'])) {
        $time = $_COOKIE['lastlogin'];
        echo 'Last login: ' . date('d/m/y h:i:s', $time);
        setcookie('lastlogin',time(),  time() + 3600);
    } else {
        setcookie('lastlogin',time(),  time() + 3600);
    }