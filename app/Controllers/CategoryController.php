<?php

namespace App\Controllers;

use Database\MySQLi\Connection;

class CategoryController{

    public function Get(){}

    public function Post($data){
        $connection = Connection::getInstance()->getDbConnection();

        $connection->query("INSERT INTO category (Name, CreatedAt, UpdatedAt) VALUES(
            '{$data['Name']}',
            '{$data['CreatedAt']}',
            '{$data['UpdatedAt']}'
        );");
    }

    public function Put(){}

    public function Delete(){}
}