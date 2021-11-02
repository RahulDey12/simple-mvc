<?php

namespace App;

class ServiceContainer
{
    private $classes = [];

    public function get(string $id)
    {
        if (isset($this->classes[$id])) {
            return $this->classes[$id]($this);
        }

        throw new \Exception("Class Binding not Found");
    }

    public function set(string $id, callable $callback)
    {
        $this->classes[$id] = $callback;
    }
}