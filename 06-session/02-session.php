<?php
    session_start();
    if(isset($_SESSION['name']))
    {
        echo 'ton tai';
    }
    else
    {
        echo 'ko ton tai';
    }