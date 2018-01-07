<?php

class Database {

    private $connect;
    private $query;

    public function __construct($server, $username, $password, $dbname) // connect database
    {
        //return new mysqli($server, $username, $password, $dbname);
        return $this->connect = mysqli_connect($server, $username, $password, $dbname);
    }

    public function  sqlQuery($query)
    {
        return $this->query = mysqli_query($this->connect,$query);
    }

    public function exportData()
    {
        if(mysqli_num_rows($this->query) > 0)
        {
            while($row = mysqli_fetch_assoc($this->query))
            {
                echo '<pre>';
                print_r($row);
                echo '</pre>';
            }
        }
        else
        {
            echo 'no result';
        }
    }
    public function __destructor()
    {
        mysqli_close();
    }
}