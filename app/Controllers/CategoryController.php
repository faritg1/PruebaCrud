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
        /* echo "<pre>";
        print_r($rel);
        echo "</pre>";

        foreach ($rel as $fila) {
            foreach ($fila as $valor) {
                echo $valor . ' '; 
            }
            echo '<br>'; 
        } */
    }

    public function create() {
        require("../resources/views/category/categoryPost.php");
    }

    public function Post($data){
        $stmt = $this->connection->prepare("INSERT INTO category (Name, CreatedAt, UpdatedAt) VALUES(?,?,?);"); 
        $stmt->bind_param("sss", $data['Name'], $data['CreatedAt'], $data['UpdatedAt']);
        $stmt->execute();
        echo "Se han insertado en categoria {$stmt->affected_rows} fila";
        header("Location: http://localhost/pruebacrud/resources/views/category/categoryGet.php");
        $stmt->close();
    }

    public function Put($data, $id){
        $stmt = $this->connection->prepare("UPDATE category SET Name =?, UpdatedAt =? WHERE Id =?");
        $stmt->bind_param("ssi", $data['Name'], $data['UpdatedAt'], $id);
        $stmt->execute();
        echo "Se han actualizado {$stmt->affected_rows} fila";
        $stmt->close();
    }

    public function Delete($id){
        $this->connection->begin_transaction();
        $stmt = $this->connection->prepare("DELETE FROM category WHERE Id =?");
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