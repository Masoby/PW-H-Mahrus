<?php

namespace App\Routes;

include "app/Controller/ProductController.php";

use App\Controller\ProductController;

class ProductRoutes {
    public function handle($method, $path) {
        // Handle GET request for "/api/product"
        if ($method === "GET" && $path === "/api/product") {
            $controller = new ProductController();
            echo $controller->index();
        }

        // Handle GET request for "/api/product/{id}"
        elseif ($method === "GET" && strpos($path, "/api/product/") === 0) {
            $pathParts = explode("/", $path);
            $id = $pathParts[count($pathParts) - 1];
            $controller = new ProductController();
            echo $controller->getById($id);
        }

        // Handle POST request for "/api/product"
        elseif ($method === "POST" && $path === "/api/product") {
            $controller = new ProductController();
            echo $controller->insert();
        }

        // Handle PUT request for "/api/product/{id}"
        elseif ($method === "PUT" && strpos($path, "/api/product/") === 0) {
            $pathParts = explode("/", $path);
            $id = $pathParts[count($pathParts) - 1];
            $controller = new ProductController();
            echo $controller->update($id);
        }

        // Handle DELETE request for "/api/product/{id}"
        elseif ($method === "DELETE" && strpos($path, "/api/product/") === 0) {
            $pathParts = explode("/", $path);
            $id = $pathParts[count($pathParts) - 1];
            $controller = new ProductController();
            echo $controller->delete($id);
        }
    }
}
