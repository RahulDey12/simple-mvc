<?php

namespace App\Inc;

class Router
{
    private $current_uri;

    private $container;

    public function __construct($current_uri, $container)
    {
        $this->current_uri = $current_uri;
        $this->container = $container;
    }

    public function get($uri, $controller, $method)
    {
        if($this->current_uri == $uri) {
            $instance = $this->container->get($controller);
            return $instance->$method();
        }
    }
}