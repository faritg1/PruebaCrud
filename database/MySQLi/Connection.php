<?php

namespace Database\MySQLi;

class Connection{
    private static $instance;
    private $connection;

    private function __construct(){
        $this->make_connection();
    }

    public static function getInstance(){
        if(!self::$instance instanceof self){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getDbConnection(){
        return $this->connection;
    }

    private function make_connection(){
        $server = "localhost";
        $database = "pruebauno";
        $username = "root";
        $password = "";

        $conn = new \mysqli($server, $username, $password, $database);
        
        if ($conn->connect_errno) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $setname = $conn->prepare("SET NAMES 'utf8'");
        $setname->execute();

        $this->connection = $conn;
    }
}


