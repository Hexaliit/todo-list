<?php

namespace App\Core;

class Base {

    protected static $container;

    public static function setContainer($container) {

        self::$container = $container;

    }
    public static function container() {

        return self::$container;

    }

    public static function resolve($key) {

        return static::container()->resolve($key);

    }

    public static function bind($key , $resolver) {

        static::container()->bind($key , $resolver);

    }

}