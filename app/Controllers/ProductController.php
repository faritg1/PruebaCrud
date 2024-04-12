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
        $stmt = $this->connection->prepare("UPDATE product SET Code=?, Name=?, Price=?, CategoryId=?, UpdatedAt=? WHERE Id =?");
        $stmt->bind_param("ssiisi", $data['Code'], $data['Name'], $data['Price'], $data['CategoryId'], $data['UpdatedAt'], $id);
        $stmt->execute();
        echo "Se han actualizado put {$stmt->affected_rows} fila";
        $stmt->close();
    }
    
    public function Delete($id){
        $this->connection->begin_transaction();
        $stmt = $this->connection->prepare("DELETE FROM product WHERE Id =?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $sure = strtoupper(readline("¿Desea eliminarlo?"));
        if($sure == "SI"){
            $this->connection->commit();
            echo "Se ha eliminado correctamente";
        }else{
            $this->connection->rollback();
            echo "No se ha eliminado";
        }
        $stmt->close(); 
    }
}