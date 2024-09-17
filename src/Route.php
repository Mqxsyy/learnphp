<?php

namespace App;

use App\Router;

class Route
{
    public function __construct(public $method, public $path, public $action) { }

    public static function get($path, $action) {
        Router::AddRoute("GET", $path, $action);
    }

    public static function post($path, $action) {
        Router::AddRoute("POST", $path, $action);
    }
}
