<?php
header("Content-Type: application/json; charset=UTF-8");

// Menyertakan file routes
include "app/Routes/ProductRoutes.php";

// Menggunakan namespace yang benar
use app\Routes\ProductRoutes;

// Menangkap request method
$method = $_SERVER['REQUEST_METHOD'];

// Menangkap request path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Panggil Routes
$productRoutes = new ProductRoutes();
$productRoutes->handle($method, $path);
