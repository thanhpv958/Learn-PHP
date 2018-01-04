<?php
    // $x=5;
    // var_dump(filter_var($x, FILTER_VALIDATE_INT)); 

    function convertSpace($string)
    {
        return str_replace(" ", "_", $string);
    }

    $abc = "abc abc";
    echo filter_var($abc, FILTER_CALLBACK, ["options" => "convertSpace"]);
   