<?php

/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 3/1/20
 * Time: 8:55 PM
 */
class Database
{
    public $conn;

    public function __construct()
    {
        $servername = "localhost";
        $username = "lokang";
        $password = "laboni21";

        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=cms", $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function query($query){
        return $this->conn->query($query);
    }

    public function prepare($prepare){
        return $this->conn->prepare($prepare);
    }
}