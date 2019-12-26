<?php
    session_start();
    session_unset();
    header('location: 04-login.php');