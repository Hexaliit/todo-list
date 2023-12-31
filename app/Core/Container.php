<?php

namespace App\Core;


class Container {

public $bindings = [];


public function bind($key, $resolver)
    {
        $this->bindings[$key] = $resolver;
    }

public function resolve($key)
    {
        if (!array_key_exists($key, $this->bindings)) {
            throw new \Exception('No matches found for your input');
        }
        return call_user_func($this->bindings[$key]);
    }

}