<?php
    require_once './04-functionProcess.php';
    session_start();
    if((!checkEmpty($_POST['username']) && !checkEmpty($_POST['password']) )) {
        
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        // database
        $conn = new mysqli('localhost', 'root', '', 'learnphp');
        if($conn->connect_error)
        {
            die('Connection failed' . $conn->connect_error);
        }

        $sql = "SELECT * FROM user WHERE username='" . $username ."' AND password='" .$password."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                $_SESSION['user'] = $row;
            }
            $_SESSION['flagPermission'] = true;
            echo '<h3>Xin chào ' . $_SESSION['user']['username'] . '</h3>';
            echo '<a href="04-logout.php">Log out</a>';
        } else {
            header('location: 04-login.php');
        }
    } else {
        header('location: 04-login.php');
    }


    