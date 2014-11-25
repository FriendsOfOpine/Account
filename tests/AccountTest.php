<?php
namespace Foo;
use PHPUnit_Framework_TestCase;
use Opine\Container\Service as Container;

class AccountTest extends PHPUnit_Framework_TestCase {
    public function setup () {
        $root = __DIR__ . '/../public';
        $container = Container::instance($root, $root . '/../config/container.yml');
    }

    public function testSample () {
        $this->assertTrue(true);
    }
}