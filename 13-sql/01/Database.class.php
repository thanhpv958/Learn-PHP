<?php

class Database {
    protected $connect;

    public function __construct() // connect database
    {
        mysqli_connect();
    }

    public function __destructor()
    {
        mysqli_close();
    }
}