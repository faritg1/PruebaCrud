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
        echo "<pre>";
        print_r($rel);
        echo "</pre>";

        foreach ($rel as $fila) {
            foreach ($fila as $valor) {
                echo $valor . ' '; 
            }
            echo '<br>'; 
        }
        $stmt->close();
    }

    public function Post($data){
        $stmt = $this->connection->prepare("INSERT INTO product (Code, Name, Price, CategoryId, CreatedAt, UpdatedAt) VALUES(?,?,?,?,?,?);");
        $stmt->bind_param("ssiiss", $data['Code'], $data['Name'], $data['Price'], $data['CategoryId'], $data['CreatedAt'], $data['UpdatedAt']);
        $stmt->execute();
        echo "Se han insertado en producto {$stmt->affected_rows} fila";
        $stmt->close();
    }

    public function Put(){}
    
    public function Delete(){}
}