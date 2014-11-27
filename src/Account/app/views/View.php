<?php
namespace Foo\Account;

use Opine\Interfaces\Layout as LayoutInterface;

class View {
    private $layout;

    public function __construct (LayoutInterface $layout) {
        $this->layout = $layout;
    }

    public function account () {
        echo $this->layout->make(['account/account', 'Account/account']);
    }
}