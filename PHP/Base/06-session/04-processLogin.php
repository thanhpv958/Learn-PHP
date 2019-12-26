<?php
    require_once './04-functionProcess.php';
    session_start();
    if((!checkEmpty($_POST['username']) && !checkEmpty($_POST['password']) )) {
        
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $data = parse_ini_file('./04-users.ini');

        $userInfo = explode('|', $data[$username]);

        if($userInfo[0] == $username && $userInfo[1] == $password) {
            
            $_SESSION['fullName'] = $userInfo[2];
            $_SESSION['flagPermission'] = true;
            echo '<h3>Xin chào ' . $_SESSION['fullName'] . '</h3>';
            echo '<a href="04-logout.php">Log out</a>';
        } else {
            header('location: 04-login.php');
        }
       
        
    } else {
        header('location: 04-login.php');
    }
    