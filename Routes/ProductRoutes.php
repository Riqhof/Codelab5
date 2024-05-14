<?php

namespace Routes;

include "Controller/ProductController.php";

use Controller\ProductController;

class ProductRoutes
{
    public function handle($method, $path)
    {
        // REQUEST METHOD GET DAN PATH
        if ($method == 'GET' && $path == '/api/product') {
            $controller = new ProductController();
            echo $controller->index();
        }

        // REQUEST METHOD GET DAN PATH
        if ($method == 'GET' && strpos($path, '/api/product/') == 0) {
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->getById($id);
        }

        // REQUEST METHOD POST DAN PATH
        if ($method == 'POST' && $path == '/api/product') {
            $controller = new ProductController();
            echo $controller->insert();
        }

        // REQUEST METHOD PUT DAN PATH
        if ($method == 'PUT' && strpos($path, '/api/product/') == 0) {
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->update($id);
        }

        // REQUEST METHOD DELETE DAN PATH
        if ($method == 'DELETE' && strpos($path, '/api/product/') == 0) {
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->delete($id);
        }
    }
}
