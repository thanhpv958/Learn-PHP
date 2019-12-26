<?php
    function checkEmail($value) {
        $pattern = '#^[a-z][\w_\.]{4,32}@[\w]{2,}(\.[a-z]{2,4}){1,2}$#';
        return preg_match($pattern, $value);
    }

    function checkUserName($value) {
        $pattern = '#^[a-z_][\w\s_\.]{4,32}$#';
        return preg_match($pattern, $value);
    }

    function checkPassword($value) {
        $pattern = '#^(?=.+\d)(?=.+\W)(?=.+[A-Z]).{8,8}$#';
        return preg_match($pattern, $value);
    }