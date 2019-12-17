<?php 
    function clean_input($input) {
        $input = trim($input); // loại bỏ khoảng trắng 2 bên
        $input = stripslashes($input); //loại bỏ các kí tự // \
        $input = htmlspecialchars($input); // chuyển các kí tự lạ sang kí tự đặc biệt của html;
        return $input;
    }
    //Regular Expresss
    function isName($input) {
        return preg_match('/^[a-zA-Z]{8,16}$/', $input);
    }
    function isPassword($input) {
        return preg_match('/^[a-zA-Z]{4,6}$/', $input);
    }
    

    // if(!isset($_POST['name']) || $_POST['name']=="") {
    //     echo 'error';
    // } // KIỂM TRA CÁC LỖI 

    if(!empty($_POST)){
        $userName = $_POST['name'];
        $passWord = $_POST['password'];
        
        if(!isName($userName)) {
            echo 'error username';
        }
        else if (!isPassword($passWord)) {
            echo 'error password';
        }
        else {
            echo 'ok';
        }
    } else {
        echo 'error';
    }
?>