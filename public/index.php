<?php
use App\Controllers\CategoryController;
use App\Controllers\ProductController;
use Router\RouterHeader;

require("../vendor/autoload.php");

$slug = $_GET["slug"] ?? "";
$slug = explode("/", $slug);

$resource = $slug[0] == "" ? "/" : $slug[0];
$id = $slug[1] ?? null;


$router = new RouterHeader();

switch ($resource) {
    case '/':
        echo "Front page";
        break;

    case 'category':
        $method = $_POST["method"] ?? "get";
        $router->set_method($method);
        $router->set_data($_POST);
        $router->route(CategoryController::class, $id);
        break;

    case 'product':
        $method = $_POST["method"] ?? "get";
        $router->set_method($method);
        $router->set_data($_POST);
        $router->route(ProductController::class, $id);
        break;
    
    default:
        echo "404 not found";
        break;
}
