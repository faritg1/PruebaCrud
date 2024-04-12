<?php

namespace App\Controllers;

use Database\MySQLi\Connection;

class CategoryController{

    private $connection;

    public function __construct(){
        $this->connection = Connection::getInstance()->getDbConnection();
    }

    public function Get(){
        $stmt = $this->connection->prepare("SELECT * FROM category");
        $stmt->execute();
        $rel = $stmt->get_result()->fetch_all();
        require("../resources/views/category/categoryGet.php");
        $stmt->close();
    }

    public function create() {
        require("../resources/views/category/categoryPost.php");
    }

    public function Post($data){
            $stmt = $this->connection->prepare("INSERT INTO category (Name) VALUES(?);"); 
            $stmt->bind_param("s", $data['Name']);
            $stmt->execute();
            header("Location: http://localhost/pruebacrud/public/category");
            $stmt->close();
    }

    public function Put($data, $id){
        $stmt = $this->connection->prepare("UPDATE category SET Name = ? WHERE Id = ?");
        $stmt->bind_param("si", $data['Name'], $id); // Solo necesitas pasar el nombre y el ID
        $stmt->execute();
        require("../resources/views/category/categoryPut.php");
        $stmt->close();
    }

    public function Delete($id){
        $this->connection->begin_transaction();
        $stmt = $this->connection->prepare("DELETE FROM category WHERE Id =?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        require("../resources/views/categoryDelete.php");
        $stmt->close(); 
    }
}