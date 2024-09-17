<?php
namespace App;

use App\Route;

class Router {
    public static $routes = [];
    private $path;

    public function __construct($path, private $method) {
        $this->path = parse_url($path, PHP_URL_PATH);
    }

    public function Match() {
        foreach (self::$routes as $route) {
            if ($route->path === $this->path && $route->method === $this->method) {
                return $route;
            }
        }

        return false;
    }

    public static function AddRoute($method, $path, $action) {
        self::$routes[] = new Route($method, $path, $action);
    }
}