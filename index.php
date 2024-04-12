<?php

use App\Controllers\CategoryController;
use App\Controllers\ProductController;

require("vendor/autoload.php");

$categoryController = new CategoryController();

/*$categoryController->Post([
    "Name" => "Category 1",
    "CreatedAt" => date("Y-m-d H:i:s"),
    "UpdatedAt" => date("Y-m-d H:i:s")
]); */

//$categoryController->Get();

/* $categoryController->Put([
    "Name" => "Categoria 2234",
    "UpdatedAt" => date("Y-m-d H:i:s")
], 9); */

//$categoryController->Delete(10);

$ProductController = new ProductController();
//$ProductController->Get(); 

$ProductController->Delete(1); 

/* $ProductController->Put([
    "Code" => "22_1223",
    "Name" => "Product das2",
    "Price" => 100,
    "CategoryId" => 1,
    "UpdatedAt" => date("Y-m-d H:i:s")
], 1);  */