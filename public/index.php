<?php
require_once '../src/controllers/HomeController.php';

$controller = new HomeController();

$requestUri = $_SERVER['REQUEST_URI'];

if ($requestUri === '/') {
    $controller->index();
} else {
    http_response_code(404);
    echo "404 Not Found";
}