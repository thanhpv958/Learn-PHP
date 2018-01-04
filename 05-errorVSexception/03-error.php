<?php
    function myError($error_level, $error_message, $error_file, $error_line, $error_context)
    {
        echo '<pre>';
        print_r($error_level);
        echo '</pre>';

        $result[] = '<b>Error number: </b>' . $error_level;
        $result[] = '<b>Error message: </b>' . $error_message;
        $result[] = '<b>Error file: </b>' . $error_file;
        $result[] = '<b>Error line: </b>' . $error_line;
        
        $result = implode('<br>', $result); // nối các phần tử của mảng thành 1 chuỗi cách nhau <br>

        die($result);

    }
    set_error_handler('myError');
    echo ($test);