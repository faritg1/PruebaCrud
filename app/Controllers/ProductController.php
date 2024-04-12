<?php

namespace App\Controllers;

use Database\MySQLi\Connection;

class ProductController{

    private $connection;

    public function __construct(){
        $this->connection = Connection::getInstance()->getDbConnection();
    }
    
    public function Get(){
        $stmt = $this->connection->prepare("SELECT * FROM product");
        $stmt->execute();
        $rel = $stmt->get_result()->fetch_all();
        require("../resources/views/product/productGet.php");
        $stmt->close();
    }

    public function create() {
        require("../resources/views/product/productPost.php");
    }

    public function Post($data){
            $stmt = $this->connection->prepare("INSERT INTO product (Code, Name, Price, CategoryId) VALUES(?,?,?,?);");
            $stmt->bind_param("ssii", $data['Code'], $data['Name'], $data['Price'], $data['CategoryId']);
            $stmt->execute();
            header("Location: http://localhost/pruebacrud/public/product");
            $stmt->close();
    }

    public function Put($data, $id){
        $stmt = $this->connection->prepare("UPDATE product SET Code=?, Name=?, Price=?, CategoryId=? WHERE Id =?");
        $stmt->bind_param("ssiii", $data['Code'], $data['Name'], $data['Price'], $data['CategoryId'], $id);
        $stmt->execute();
        require("../resources/views/product/productPut.php");
        $stmt->close();
    }
    
    public function Delete($id){
        $this->connection->begin_transaction();
        $stmt = $this->connection->prepare("DELETE FROM product WHERE Id =?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        require("../resources/views/product/productDelete.php");
        $sure = strtoupper(readline("¿Desea eliminarlo?"));
        $stmt->close(); 
    }
}