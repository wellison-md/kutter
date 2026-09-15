<?php

namespace Wellison\Kutter\Routes;

use Wellison\Kutter\Controllers\HomeController;


class Router {

    private array $routes;

    public function __construct() {
        $this->routes = [
            "/" => [HomeController::class, "index"],
        ];
    }

    public function init() {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (isset($this->routes[$path])) {

            [$controller, $classMethod] = $this->routes[$path];

            $ctrller = new $controller();
            $ctrller->$classMethod();
            exit();
        }

        require __DIR__ . "/../Views/NotFound.php";
    }
}
