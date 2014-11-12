<?php
namespace Opine\Account;

class Route {
    private $route;

    public function __construct ($route) {
        $this->route = $route;
    }

    public function paths () {}

    public static function location () {
        return __DIR__;
    }
}