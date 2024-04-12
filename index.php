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
$categoryController->Get();

$ProductController = new ProductController();
$ProductController->Get();

/* $ProductController->Post([
    "Code" => "22_12",
    "Name" => "Product 2",
    "Price" => 100,
    "CategoryId" => 1,
    "CreatedAt" => date("Y-m-d H:i:s"),
    "UpdatedAt" => date("Y-m-d H:i:s")
]);  */