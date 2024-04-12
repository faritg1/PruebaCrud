<?php

use App\Controllers\CategoryController;

require("vendor/autoload.php");

$categoryController = new CategoryController();
$categoryController->Post([
    "Name" => "Category 1",
    "CreatedAt" => date("Y-m-d H:i:s"),
    "UpdatedAt" => date("Y-m-d H:i:s")
]);