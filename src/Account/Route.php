<?php
namespace Foo\Account;

class Route {
    private $route;

    public function __construct ($route) {
        $this->route = $route;
    }

    public function paths () {
        $this->route->get('/account', 'accountController@account');
    }

    public static function location () {
        return __DIR__;
    }
}