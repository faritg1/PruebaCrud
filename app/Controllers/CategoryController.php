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
        echo "<pre>";
        print_r($rel);
        echo "</pre>";

        foreach ($rel as $fila) {
            foreach ($fila as $valor) {
                echo $valor . ' '; 
            }
            echo '<br>'; 
        }
    }

    public function Post($data){

        $stmt = $this->connection->prepare("INSERT INTO category (Name, CreatedAt, UpdatedAt) VALUES(?,?,?);"); /* 
        '{$data['Name']}',
        '{$data['CreatedAt']}',
        '{$data['UpdatedAt']}'*/
        $stmt->bind_param("sss", $data['Name'], $data['CreatedAt'], $data['UpdatedAt']);
        $stmt->execute();
        echo "Se han insertado en categoria {$stmt->affected_rows} fila";
        $stmt->close();
    }

    public function Put(){}

    public function Delete(){}
}